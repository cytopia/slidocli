<?php

/**
 * TODO: Configure the full path to your slidocli binary here:
 */
$slido_path = '/usr/local/bin/slidocli';


$url = isset($_REQUEST['url']) ? $_REQUEST['url'] : NULL;
$qid = isset($_REQUEST['qid']) ? $_REQUEST['qid'] : NULL;

if ( $url ) {
	if ( $qid ) {
		$cmd = $slido_path.' -q '.$qid.' '.$url;
	} else {
		$cmd = $slido_path.' '.$url;
	}
	passthru($cmd);
} else {
	printf("Error, url is missing\n");
}
