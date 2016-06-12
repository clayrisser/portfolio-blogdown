<?php

$directory = getcwd();

if ( $_SERVER['HTTP_X_GITHUB_EVENT'] == 'push' ) {
	shell_exec( 'cd '.$directory.' && git reset --hard HEAD && git pull' );
}
