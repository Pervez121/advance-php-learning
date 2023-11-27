<?php
        require "db.php";
        require "templates/header.php";
        $connection->select_db("php_tutorial");

        $sql = "SELECT * FROM users ORDER BY user_name LIMIT 2 , 5";
        $reasult = $connection->query($sql);
?>

<!-- /* <div class="container">
    <p class="h3">search user by email address</p>
    <div class="input-group rounded">
        <input type="search" class="form-control rounded" placeholder="Enter Email Adress" aria-label="Search"
            aria-describedby="search-addon" value="" name="Search_email" />
        <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
        </span>
    </div>
</div> */ -->

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">User ID</th>
            <th scope="col">User name</th>
            <th scope="col">User email</th>
            <th scope="col">Registration date</th>
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
        </tr>

        <?php }}  ?>
    </tbody>
</table>


<?php require "templates/footer.php"; ?>