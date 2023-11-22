<?php
/*
* PHP Conditional Statements
*/

$x = 4;
$y = "4";
$email = "someone@example.com";
$color = "red";

//Condition to be tested
if ( $x != $y ) {
    //Coded to be executed
    //echo "The value of X is not equal to Y";
} else {
    //echo "The value of X is equal to Y ";
}

//Condition to be tested with multiple conditions
/*
if ( ($x == $y) && ($x === $y) ) {
    
    echo "The value of X is equal to Y";
} else {
    echo "The value of X is not equal to Y ";
}
*/

//If-ElseIf Statements
if($color == "blue"){

    //echo "The color is blue";

} elseif($color == "black") {

    //echo "The color is black";

} elseif($color == "red") {

    //echo "Color Matched";

} else {
    //echo "No color matched";
}

//Switch Statements
switch($color) {

    case "blue":
        echo "Color is blue";
    break;
    case "red":
        echo "Color Matched";
    break;

    default:
        echo "No color matched";
}

?>