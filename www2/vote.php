<?php

/**
 * TODO: Configure the full path to your slidocli binary here:
 */
$slido_path = '/usr/local/bin/slidocli';


$url = isset($_REQUEST['url']) ? $_REQUEST['url'] : Null;
$qid = isset($_REQUEST['qid']) ? $_REQUEST['qid'] : Null;

if ( $url && $qid ) {
	$cmd = $slido_path.' -q '.$qid.' '.$url;

	// Execute command
	ob_start();
	passthru($cmd);
	$output = ob_get_contents();
	ob_end_clean();

	// Return new voting score
	foreach ( preg_split("/((\r?\n)|(\r\n?))/", $output) as $line ) {
		if (strpos($line, 'New score') !== False) {
			$matches = array();
			preg_match('/([0-9]+)/', $line, $matches);
			if (isset($matches[0])) {
				echo $matches[0];
			} else {
				echo 'err';
			}
			exit;
		}
	}
} else {
	printf("Error, url is missing\n");
}
