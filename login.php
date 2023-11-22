<?php
// always start session at the top of page
session_start();
$_SESSION['$user_id'] = "1";
$_SESSION['$user_name'] = "pervez";

if(isset($_SESSION['$user_id'] ) && isset($_SESSION['$user_name'] )){
  //  echo "your session values are: ".$_SESSION['$user_id']." & ". $_SESSION['$user_name'];
  header("Location: index.php");
}
else{
    echo "please create login form here";
}

?>