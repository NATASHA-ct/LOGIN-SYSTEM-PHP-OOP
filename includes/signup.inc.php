<!-- file receiving data from the user from browser -->
<?php

// conditional to check if we have submit button set

if (isset($_POST["submit"])){
    
    //grabbing the data from inputs
    //storing them in variables

    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    // Instatiate class using the contr class  so we need to include the files and also the model.
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    // creating a new object
    $signup = new SignupContr($uid, $email, $pwd, $pwdRepeat);

    // runni ng error handlers and user signup
    $signup -> signupUser();
    
    // BACK TO FRONTPAGE
    header("location: ../index.php?error=none");

}