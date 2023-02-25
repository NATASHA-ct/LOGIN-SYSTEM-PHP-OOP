<!-- Properties of objects to create delete add display the user object---controller -->

<?php

class SignupContr {

    // properties we need to create a user
    private $uid;
    private $email;
    private $pwd;
    private $pwdRepeat;

    // constructor grabs data from the includes files and assigns it to its correct property
    // so we pass the variables from the user as arguments to the constructor
    
    public function __construct($uid, $email, $pwd, $pwdrepeat){
        $this->$uid = $uid;
        $this->$email = $email;
        $this->$pwd = $pwd;
        $this->$pwdRepeat = $pwdRepeat;
    }

    // error handling method

    public function signupUser(){
       if ($this -> emptyInput() == false){
        header("location: ../index.php?error=emptyinput");
           exit();
       }
        if ($this -> invalidUid() == false){
        header("location: ../index.php?error=username");
           exit();
       }
       if ($this -> invalidEmail() == false){
        header("location: ../index.php?error=email");
           exit();
       }
       if ($this -> pwdMatch() == false){
        header("location: ../index.php?error=emptyinput");
           exit();
       }
        if ($this -> uidTakenCheck() == false){
        header("location: ../index.php?error=username");
           exit();
       }
       if ($this -> invalidEmail() == false){
        header("location: ../index.php?error=email");
           exit();
       }
      
       
    }


   //when user leaves one input empty , use empty php method
    private function emptyInput(){

        $result;
        if (empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwdrepeat)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    // when user enters invalid email, use filter_var php method

     private function invalidEmail(){

        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    // when user enters different passwords to sign up,
    private function pwdMatch(){

        $result;
        if ($this->pwd !== $this->pwdrepeat) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    // when user enters invalid username, use preg_match php method
    private function invalidUid(){
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) 
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    // when user enters a username that already exist in the database
    private function uidTakenCheck(){
        $result;
        if ($this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}

