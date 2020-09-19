<?php require_once("lib/initialize.php");


$ajaxAction = "";
$userSession = "";

echo 'test';
getTest($dbR);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userSession = make_safe($_POST["userSession"]);
    
    if (!empty($userSession)&&$userSession===session_id()) {
        $ajaxAction = make_safe($_POST["ajaxAction"]);
        
        switch ($ajaxAction){
            
            case "logout-website":
                processLogout($db);
                break;
                
            default:
                echo "fail";
                
        }
        
    }else{
        $userMsg = alertMSG("danger", "<strong>Ajax Error!.</strong><br>An Error has been logged with the system ".$ajaxAction." ", "false");
        echo "fail|".$userMsg;
    }
    
    
}