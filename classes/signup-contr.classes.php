<!-- Properties of objects to create delete add display the user object---controller -->

<?php

class SignupContr {

    // properties we need to create a user
    private $uid;
    private $email;
    private $pwd;
    private $pwdrepeat;

    // constructor grabs data from the includes files and assigns it to its correct property
    // so we pass the variables from the user as arguments to the constructor
    
    public function __construct($uid, $email, $pwd, $pwdrepeat){
        $this->$uid = $uid;
        $this->$email = $email;
        $this->$pwd = $pwd;
        $this->$pwdrepeat = $pwdrepeat;
    }
// now using the above I can instantiate the class in the inc file
  
}