<?php
// DB Definitions
define('db_host', 'CHANGE-ME');
define('db_user', 'CHANGE-ME');
define('db_code', 'CHANGE-ME');
define('db_name', 'CHANGE-ME');

$infuse = new mysqli(db_host,db_user,db_code,db_name);

// Dir Definitions

define('home', dirname(__FILE__) . '/');
define('addon', home . 'addon/');
define('class', home . 'class/');
define('js', home . 'jslib/');
define('visuals', home . 'visuals/');
define('themes', visuals . 'themes/');

// Misc Definitions

?>