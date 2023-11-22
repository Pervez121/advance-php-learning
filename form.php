<?php 
/*
* Form Validation
*/

//Declare Variables for field values and error messages
$name = $email = $website = $gender = $bio = $country = $error = "";
$nameErr = $emailErr = $countryErr = $websiteErr = "";

//Check if form is submitted with POST method
if( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    //Function to clean the submitted data
    function clean_input($field){
        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;
    }

    //Assign form field values to variables and also apply clean function
    $name = clean_input($_POST['name']);
    $email = clean_input($_POST['email']);
    $website = clean_input($_POST['website']);
    $gender = clean_input($_POST['gender']);
    $country = clean_input($_POST['country']);
    $bio = clean_input($_POST['bio']);

    //Check if all the required fields are submitted
    if(isset($name) && $name != "" && isset($email) && $email !="" && isset($gender) && $gender !="" && isset($country) && $country !="" && isset($website) && $website !=""){

        // Check if field contains only letters and white spaces
        if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white spaces are allowed";
        }

        // Check valid email ID with built-in function
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Enter a valid Email ID";
        }

        // Check if it's a valid URL: Check this guide for in-depth regular expression explaination https://www.guru99.com/php-regular-expressions.html
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
    }
    //If required fields are not submitted then show the error.
    else {
        $error = "You must fill all the required fields";
    }
    //echo "Hello, ".$name;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Form Validation</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="signup-form">
            <div class="form-row">
                <input type="text" name="name" placeholder="Full Name *" value="<?php echo $name ?>">
                <?php
                if($nameErr) {
                    echo '<span class="fieldError">'.$nameErr.'</span>';
                }
                ?>
            </div>
            <div class="form-row">
                <input type="text" name="email" placeholder="Email Address *" value="<?php echo $email ?>">
                <?php
                if($emailErr) {
                    echo '<span class="fieldError">'.$emailErr.'</span>';
                }
                ?>
            </div>
            <div class="form-row">
                <input type="text" name="website" placeholder="Website" value="<?php echo $website ?>">
                <?php
                if($websiteErr) {
                    echo '<span class="fieldError">'.$websiteErr.'</span>';
                }
                ?>
            </div>
            <div class="form-row">
                Select Gender * 
                <input type="radio" name="gender" value="Male" <?php if (isset($gender) && $gender=="Male") echo "checked";?>> Male
                <input type="radio" name="gender" value="Female" <?php if (isset($gender) && $gender=="Female") echo "checked";?>> Female
            </div>
            <div class="form-row">
                <select name="country">
                    <option value="0">Select Country *</option>
                    <option value="pk">Pakistan</option>
                    <option value="in">India</option>
                    <option value="us">United States</option>
                </select>
            </div>
            <div class="form-row">
                <textarea name="bio" placeholder="Say something about yourself">
                    <?php echo $bio ?>
                </textarea>
            </div>
            <div class="form-row">
                <input type="submit" value="Signup Now" class="signup-btn">
                <input type="reset" value="Reset Form" class="reset-btn">
            </div>
            <div class="error-row">
                <?php
                    if($error) {
                        echo '<span style="display: block">'.$error.'</span>';
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>