<?php
/*
* PHP Functioins
*/

function site_title($custom="") {

    if($custom == "") {
        echo "Include and Require Methods";
    } else {
        echo $custom." | Include and Require Methods";
    }
   
}
function site_url() {
    echo "http://localhost/php-tutorial/";
}
?>