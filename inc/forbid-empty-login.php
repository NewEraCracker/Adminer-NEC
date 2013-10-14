<?php
if(!defined('IN_SCRIPT')) die('Access denied');

class AdminerForbidEmptyLogin {
	function login($login, $password) {
		if(strlen($login) == 0 || strlen($password) == 0)
			return false;
	}
}