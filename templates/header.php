<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php site_title() ?></title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header id="main-header">
        <div class="small-header">
            <div class="container header_container">
                <div class="small-header-col header-contact">
                    <span>Email: info@wpacademy.pk</span>
                    <span>Phone: +1-111-111111</span>
                </div>
                <div class="small-header-col social-icons">
                    <!-- <span><img src="images/facebook.png" alt="Facebook"></span>
                    <span><img src="images/twitter.png" alt="Twitter"></span>
                    <span><img src="images/path.png" alt="Path"></span>
                    <span><img src="images/flickr.png" alt="Flickr"></span> -->
                    <!-- <span> -->
                    <!-- <img src="images/pervez.jpg" alt="user" class="user_image"> -->
                   
                        <?php
                            if(isset($_SESSION['$user_id'] ) && isset($_SESSION['$user_name'] )){
                                echo 'Welcome:'.$_SESSION['$user_name'];
                                echo '<a href="logout.php" class="logout_link">Logout</a>';
                            
                            }
                            else{
                                echo '<a href="login.php">login</a>';
                            }
                        ?>
                         
                   
                    <!-- </span> -->
                    
                </div>


            </div>
            
        </div>
        <div class="main-header">
            <div class="container">
                <div class="header-logo">
                    <a href="#"><img src="images/logo.png" alt="Website Logo"></a>
                </div>
                <div class="header-banner">
                    <img src="images/banner.jpg" alt="Main Banner">
                </div>
            </div>
        </div>
        <nav class="main-navigation">
            <div class="container">
                <ul class="menu">
                    <li><a href="<?php site_url(); ?>">Home</a></li>
                    <li>
                        <a href="http://localhost/php-tutorial/page.php">Projects</a>
                        <ul class="sub-menu">
                            <li><a href="#">SEO</a></li>
                            <li>
                                <a href="#">Design</a>
                                <ul class="sub-menu-level">
                                    <li><a href="#">SEO</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://localhost/php-tutorial/page.php">Services</a>
                        <ul class="sub-menu">
                                <li><a href="#">SEO</a></li>
                                <li>
                                    <a href="#">Design</a>
                                    <ul class="sub-menu-level">
                                        <li><a href="#">SEO</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                    </li>
                    <li><a href="http://localhost/php-tutorial/page.php">About Us</a></li>
                    <li><a href="http://localhost/php-tutorial/page.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>