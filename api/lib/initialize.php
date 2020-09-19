<?php
define("APP_ROOT", dirname(dirname(__FILE__)));
if(!isset($_SESSION)) { session_start();}
global $ip;
global $pageType;

require_once APP_ROOT . "/lib/db-class.php";
require_once APP_ROOT . "/lib/api-functions.php";
