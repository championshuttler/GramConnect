<?php

ob_start();
session_start();

$script_name = $_SERVER['SCRIPT_NAME'];
@$http_referer = $_SERVER['HTTP_REFERER'];


/**
 * function to check whether there is an active session
 * with valid user logged in or not
 * @return boolean
 */
function loggedin(){
	return (bool)(isset($_SESSION['id']) && !empty($_SESSION['id']));
}


/**
 * function to check whether user currently logged in is admin or not
 * @return boolean
 */
function isadmin(){
	return (bool)(isset($_SESSION['id']) && $_SESSION['id'] == 1);
}
