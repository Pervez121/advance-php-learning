<?php
//always start session at the top of page
session_start();
require "functions.php";
require "templates/header.php" ;
$user_name = $password = $field = "";

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {

  function cleaninput($field){
      $field = trim($field);
      $field = stripcslashes($field);
      $field = htmlspecialchars($field);
      return $field;
  }

  $user_name = cleaninput($_POST['user_name']);
  $password = cleaninput($_POST['password']);


  if (isset($user_name) && isset($password)) {
    $_SESSION['user_name'] = $_POST['user_name'];
    $_SESSION['password'] = $password;

  header("Location: index.php");
  }
  else{
    //header("Location: login.php");
  }
    

}

else {
  //header("Location: login.php");

}


 ?>

<!-- Background image -->
<div id="intro" class="bg-image shadow-2-strong">
    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-8">
                    <form class="bg-white  rounded-5 shadow-5-strong p-5"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example1" class="form-control" name="user_name" />
                            <label class="form-label" for="form1Example1">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example2" class="form-control" name="password" />
                            <label class="form-label" for="form1Example2">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3"
                                        checked />
                                    <label class="form-check-label" for="form1Example3">
                                        Remember me
                                    </label>
                                </div> -->
                            </div>

                            <div class="col text-center">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->
<?php include "templates/footer.php" ?>