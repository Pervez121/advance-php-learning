<?php

$string = "This is a string that contains some information";
$num = 5797;
$float = 654.6;
$string_number = "98898";

/*===================
 String Functions
===================*/
//String Length
//echo strlen($string);

//Count Words in a String
//echo str_word_count($string);

//Reverse a string
//echo strrev($string);

//Search for a text
//echo strpos($string, "that");

//Replace text in a string
//echo str_replace("information", "data", $string);

/*===================
 Numeric Functions
===================*/

//Is Integer
//var_dump( is_int($num) );

//Is Float
//var_dump( is_float($float) );

//Is Number
//var_dump(is_numeric($string_number));

//Casting Strings and Floats to Integers
$int_cast = (int)$float;
$int_cast = (int)$string_number;
var_dump($int_cast);


?>