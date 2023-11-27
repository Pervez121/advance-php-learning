<?php
// get the database connection file here
require "db.php";
$connection->select_db("php_tutorial");
$sql = "CREATE TABLE users(
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    user_name VARCHAR(25) NOT NULL,
    user_email VARCHAR(35) NOT NULL,
    User_password VARCHAR(35) NOT NULL,
    User_countary VARCHAR(25) NOT NULL DEFAULT 'Not Selected',
    Registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($connection->query($sql) === TRUE){
    echo "<br>Table sucessfully Created";
}
else{
    echo "<br>Error".$connection->error;
}
    
    ?>