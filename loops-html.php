<?php
/*
* PHP Loops explained with HTML
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops in PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrap">
        <?php 
        for($i = 1; $i <= 6; $i++) {
        ?>
        <!-- post block code -->
        <div class="post">
            <div class="thumbnail">
                <img src="img/img-<?php echo $i; ?>.jpg" alt="Image <?php echo $i; ?>">
            </div>
            <h2 class="title">Some Post Title</h2>
            <p class="desc">Some post description for demo blocks at loops page</p>
            <a href="#" class="read-more">Read More</a>
        </div>
        <?php } ?>
    </div>
    
</body>
</html>