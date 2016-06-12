<?php

/* Settings */
$secret = false;
$customDirectory = false;

$success = false;
if ( $_SERVER['HTTP_X_GITHUB_EVENT'] == 'push' ) {
	if ( $secret == false || $secret == $_SERVER['X-Hub-Signature'] ) {
		$directory = getcwd();
		if ( $customDirectory ) {
			$directory = $customDirectory;
		}
		shell_exec( 'cd '.$directory.' && git reset --hard HEAD && git pull' );
		$success = true;
	}
}
if ($success) {
	echo 'Pulled from repo successfully for ' + $_SERVER['X-GitHub-Delivery'] + '.';
} else {
	echo 'Failed to pull from repo successfully.';
}
