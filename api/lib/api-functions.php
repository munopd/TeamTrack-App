<?php
$GLOBALS['siteAddress'] = '';
$GLOBALS['sitePath'] = '';
$GLOBALS['pageName'] = '';

$siteAddress = "https://app.teamtrack.ca/";

$GLOBALS['siteAddress'] = "https://app.teamtrack.ca/";
$GLOBALS['siteTitle'] = "MyQ";
$GLOBALS['sitePath'] = "/";

$dbname = 'opednlca_tt_app';
$usernameR = 'opednlca_tt_usrR';
$usernameW = 'opednlca_tt_usrW';
$password = 'tOZ6GR69tEdh';

$ip = $_SERVER['REMOTE_ADDR'];

$servername = "localhost";

date_default_timezone_set("America/St_Johns");

$dbR = new db($servername, $usernameR, $password, $dbname);
$dbW = new db($servername, $usernameW, $password, $dbname);

function  getTest($db){
    $results = $db->query('SELECT fldID, fldTest1, fldTest2, fldDateTime FROM app_test')->fetchAll();
    foreach ($results as $result) {
        $testID = $result['fldID'];
        $test1 = $result['fldTest1'];
        $test2 = $result['fldTest2'];
        $testDate = $result['fldDateTime'];
        //echo '<tr>';
        echo '<li>';
        echo    $testID.' '.$test1;
        echo '</li>';
    }
    
}