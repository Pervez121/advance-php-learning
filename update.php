<?php
require "db.php";
require "templates/header.php";
$connection->select_db("php_tutorial");


$user_name = $user_email = $user_country = $User_password = "";
// **************************************************************************
// ********************** code for update user ******************************
// **************************************************************************


if( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    //Function to clean the submitted data
    function clean_input($field){
        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;
    }
       echo     $user_id = intval($_POST["id"]);
       echo        $user_name = clean_input($_POST["user_name"]);
       echo       $user_email = clean_input($_POST["email"]);
       echo        $user_country = clean_input($_POST["country"]);
       echo      $User_password = clean_input($_POST["user_password"]);



        //Check if all the required fields are submitted
        if(isset($user_name) && !empty($user_name) && isset($user_email) && !empty($user_email) && isset($User_password) && !empty($User_password)){

            $sql = "UPDATE users SET user_name = '$user_name', user_email = '$user_email', User_password = '$User_password',
            user_country = '$user_country' WHERE user_id = $user_id";
  
            if($connection->query($sql) === TRUE) {
                echo "Records Updated Sucessfully";
            }

           else {
                echo "Update query not Executed".$connection->error; 
            }
            
            $connection->close();
        }
        //If required fields are not submitted then show the error.
        else {
            $error = "You must fill all the required fields";
        }
        //echo "Hello, ".$name;
}
?>


<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form class="mx-1 mx-md-4"
                                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    <div class="user_id_box">
                                    <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" class="form-control" name="user_name"
                                                value="<?php echo $user_name; ?>" />
                                            <label class="form_label" for="form3Example1c">Your Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" class="form-control" name="email"
                                                value="<?php echo $user_email; ?>" />
                                            <label class="form_label" for="form3Example3c">Your Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <select class="form-control" id="countryDropdown" name="country">
                                                <option value="<?php echo $user_country; ?>">
                                                    <?php echo $user_country; ?></option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Canada">Canada</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="France">France</option>
                                                <option value="Germany">Germany</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Korea">South Korea</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                            </select>
                                            <label class="form_label" for="form3Example4cd">Select Your Country</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" class="form-control"
                                                name="user_password" value="<?php echo $User_password; ?>" />
                                            <label class="form_label" for="form3Example4c">Password</label>
                                        </div>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3c" />
                                        <label class="form-check-label" for="form2Example3">
                                            I agree all statements in <a href="#!">Terms of service</a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Update User</button>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
require "templates/footer.php";
?>