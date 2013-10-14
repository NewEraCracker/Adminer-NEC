<?php
define('IN_SCRIPT', true);

function adminer_object() {
	include_once './inc/plugin.php';
	include_once './inc/dump-bz2.php';
	include_once './inc/dump-zip.php';
	include_once './inc/dump-date.php';
	include_once './inc/forbid-empty-login.php';
	include_once './inc/login-servers.php';

	$plugins = array(
		new AdminerDumpBz2,
		new AdminerDumpZip,
		new AdminerDumpDate,
		new AdminerForbidEmptyLogin,
		new AdminerLoginServers(array('127.0.0.1'))
	);

	return new AdminerPlugin($plugins);
}

include './inc/adminer.php';
?>