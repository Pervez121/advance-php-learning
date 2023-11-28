<!-- create connection veriables -->
<?php
$server_name = "localhost";
$db_user_name = "root";
$password = "";

// connect to databace

$connection = new mysqli($server_name , $db_user_name , $password);



if($connection->connect_error){
     die("Cannot connect to database".$connection->connect_error);
}
else{
    // echo "Database connected";
}