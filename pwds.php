<?php 
$USERS["webber55"] = "web55"; 
$USERS["webber56"] = "web56"; 
$USERS["webber57"] = "web57";
 $USERS["webber58"] = "web58";
 $USERS["webber59"] = "web59";
$USERS["webber60"] = "web60"; 
 
function check_logged(){ 
     global $_SESSION, $USERS; 
     if (!array_key_exists($_SESSION["logged"],$USERS)) { 
          header("Location: log.php"); 
     }; 
}; 
?>
