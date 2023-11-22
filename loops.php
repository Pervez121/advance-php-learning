<?php
/*
* PHP Loops
*/
$i = 1;
$colors = array ("red", "green", "blue", "yellow");
//While Loop
/* while ($i <= 5) {
    //code to be executed
    echo "This number is ".$i."<br>";
    $i++;
} */

//Do-While Loop
/* do {
    echo "This number is ".$i."<br>";
    $i++;
} while ($i <= 5);
*/

//For Loop
/* for ($x = 0; $x <= 100; $x+=10) {
    echo "This number is ".$x."<br>";
} */

//Foreach Loop
foreach($colors as $value) {
    echo "This color is ".$value."<br>";
}
?>