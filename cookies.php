<?php

$cookies_name = "last_visited";
$cookies_value = date("d-m-y h:i:s");


if(isset($_COOKIE[$cookies_name])){
    echo "your last visited cookie on the website: ".$_COOKIE[$cookies_name];
    setcookie($cookies_name , $cookies_value, time() - 3600, "/");

}
else{
    setcookie($cookies_name , $cookies_value, time() + (86400 * 30), "/");
    echo "Cookie Created";
}


?>