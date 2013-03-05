<?php
// Core functions

// Error Logging Function

function infusError($e_type, $e_severity, $e_context, $e_uid, $e_url) {
	global $x;
	// http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
	// http://php.net/manual/en/book.mysqli.php
	$infuse -> query('INSERT INTO inf_log (log_type,log_context,log_person_id) VALUES ("'.$e_type.'", "'.$e_severity.'", "'.$e_context.'", "'.$e_uid.'")');
	
}

function getsrv_name() { return $_SERVER['SERVER_NAME'] }
function getuser_ip() { return $_SERVER['REMOTE_ADDR'] }
function getuser_proxy() { return $_SERVER['HTTP_X_FORWARDED_FOR'] }
function getuser_httpstr() { return $_SERVER['HTTP_USER_AGENT'] }
function getuser_host() { return $_SERVER['REMOTE_HOST'] }
function getuser_requrl() { return $_SERVER['REQUEST_URI'] }
function getuser_pathinfo() { return $_SERVER['PATH_INFO'] }
function getuser_parthinfo2() { return $_SERVER['ORIG_PATH_INFO'] }
?>