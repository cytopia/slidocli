<?php

/**
 * TODO: Configure the full path to your slidocli binary here:
 */
$slido_path = '/usr/local/bin/slidocli';


$url = isset($_REQUEST['url']) ? $_REQUEST['url'] : Null;

if ( $url ) {
	$cmd = $slido_path.' '.$url;

	// Execute command
	ob_start();
	passthru($cmd);
	$output = ob_get_contents();
	ob_end_clean();


	$questions = False;
	$sections = 0;
	$array = [];
	$tmp = [];
	foreach ( preg_split("/((\r?\n)|(\r\n?))/", $output) as $line ) {

		// All lines from here are questions in the following format:
		// [
		//     "qid",     # (int)
		//     "vote",    # (int)
		//     "question" # (string)
		// ]
		if ($questions) {
			if ($sections == 0 && strpos($line, '[') !== False) {
				$sections++;
				continue;
			} elseif ($sections == 1) {
				$sections++;
				$tmp['qid'] = substr($line, 3, -2);
				continue;
			} elseif ($sections == 2) {
				$sections++;
				$tmp['vote'] = substr($line, 3, -2);
				continue;
			} elseif ($sections == 3) {
				$sections++;
				$tmp['question'] = substr($line, 3, -1);
				continue;
			} elseif ($sections == 4) {
				$array[] = $tmp;
				$sections = 0;
				continue;
			}
		}

		if ( strpos($line, 'LISTING QUESTIONS') !== False ) {
			$questions = True;
			continue;
		}
	}
	echo '<table border="1" style="border-collapse: collapse; border: 1px solid black;">';
	echo '<tr>';
	echo	'<th style="text-align:center;">Action</td>';
	echo	'<th style="text-align:center;">Qid</td>';
	echo	'<th style="text-align:center;">Score</td>';
	echo	'<th>Question</td>';
	echo '</tr>';
	foreach ($array as $q) {
		echo '<tr>';
		echo	'<td style="text-align:center;"><input type="button" name="vote" value="vote" onClick="vote(\''.$url.'\', \''.$q['qid'].'\')"/></td>';
		echo	'<td style="text-align:center;">'.$q['qid'].'</td>';
		echo	'<td style="text-align:center;"><div id="'.$q['qid'].'">'.$q['vote'].'</div></td>';
		echo	'<td>'.$q['question'].'</td>';
		echo '</tr>';
	}
	echo '</table>';
} else {
	printf("Error, url is missing\n");
}
