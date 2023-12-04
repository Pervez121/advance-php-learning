<?php
require 'db.php';
require "templates/header.php";
$connection->select_db("php_tutorial");

$sql = "SELECT * FROM users ORDER BY user_name LIMIT 2 , 5";
$reasult = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <script src="ajax.js"></script>
    <style>
        .user-datail.modal-body.modal-lg {
    /* width: 700px;
 height: 500px; */
    border: 1px solid #39ad66;
    border-radius: 23px;
    padding: 25px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    display: none; 

}
    </style>
    <title>jQuery</title>

</head>
<body>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">User ID</th>
            <th scope="col">User name</th>
            <th scope="col">User email</th>
            <th scope="col">Registration date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($reasult->num_rows > 0 ){
         while($row = $reasult->fetch_assoc()){
    ?>

        <tr>
            <th scope="row"><?php echo $row["user_id"]; ?></th>
            <td><?php echo $row["user_name"]; ?></td>
            <td><?php echo $row["user_email"]; ?></td>
            <td><?php echo $row["Registration_date"]; ?></td>
            <td><a href="#" onclick='loadUser(<?php echo $row["user_id"]; ?>)' class="actions">Edit</a> &nbsp 
            <a href="delete_user.php?id=<?php echo $row["user_id"]; ?>&confirm=0" class="actions">Delete</a></td>
        </tr>

        <?php }}  ?>
    </tbody>
</table>

<div class="user-datail modal-body modal-lg">
 
</div>


<?php require "templates/footer.php"; ?>
</body>
</html>

