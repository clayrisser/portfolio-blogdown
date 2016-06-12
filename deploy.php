<?php

/* Settings */
$secret = false;
$customDirectory = false;

$success = false;
$githubEvent = $_SERVER['X-GitHub-Event'];
$githubSignature = $_SERVER['X-Hub-Signature'];
$githubDelivery = $_SERVER['X-GitHub-Delivery'];
if ( $githubEvent == 'push' ) {
	if ( $secret == false || $secret == $githubSignature ) {
		$directory = getcwd();
		if ( $customDirectory ) {
			$directory = $customDirectory;
		}
		shell_exec( 'cd '.$directory.' && git reset --hard HEAD && git pull' );
		$success = true;
	}
}
if ($success) {
	echo 'Pulled from repo successfully for ' + $githubDelivery + '.';
} else {
	echo 'Failed to pull from repo successfully.';
}
