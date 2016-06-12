<?php

/* Settings */
$secret = false;
$customDirectory = false;

$success = false;
$githubEvent = $_SERVER['HTTP_X_GITHUB_EVENT'];
$githubSignature = $_SERVER['HTTP_X_HUB_SIGNATURE'];
$githubDelivery = $_SERVER['HTTP_X_GITHUB_DELIVERY'];
if ( $githubEvent == 'push' ) {
	if ( $secret == false || $secret == $githubSignature ) {
		$directory = getcwd();
		if ( $customDirectory ) {
			$directory = $customDirectory;
		}
		shell_exec( 'cd '.$directory );
		shell_exec( 'git reset --hard HEAD' );
		shell_exec( 'git pull' );
		shell_exec( 'find ./* -type d -exec chmod 0755 {} \;' );
		shell_exec( 'find ./* -type f -exec chmod 0644 {} \;' );
		$success = true;
	}
}
if ( $success ) {
	echo 'Pulled from repo successfully for '.$githubDelivery.'.';
} else {
	echo 'Failed to pull from repo successfully.';
}
