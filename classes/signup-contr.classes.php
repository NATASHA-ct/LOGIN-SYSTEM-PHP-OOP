<!-- Properties of objects to create delete add display the user object---controller -->

<?php

require_once 'signup.classes.php';

class SignupContr extends Signup {

    // properties we need to create a user
    private $uid;
    private $email;
    private $pwd;
    private $pwdRepeat;

    // constructor grabs data from the includes files and assigns it to its correct property
    // so we pass the variables from the user as arguments to the constructor
    
    public function __construct($uid, $email, $pwd, $pwdRepeat){
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
    }

    // error handling method

    		public function signupUser() {
			
			if (!$this->emptyInput()) {
				header("location: ../index.php?error=emptyinput");
				exit();
			}
			if (!$this->invalidUid()) {
				header("location: ../index.php?error=username");
				exit();
			}
			if (!$this->invalidEmail()) {
				header("location: ../index.php?error=email");
				exit();
			}
			if (!$this->pwdMatch()) {
				header("location: ../index.php?error=passwordmatch");
				exit();
			}
			if (!$this->uidTakenCheck()) {
				header("location: ../index.php?error=useroremailtaken");
				exit();
			}
			
			$this->setUser($this->uid, $this->pwd, $this->email);
			
			var_dump($this->uid);
		}


   //when user leaves one input empty , use empty php method
    private function emptyInput(): bool{

        $result;
        if (empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwdRepeat)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    // when user enters invalid username, use preg_match php method
    private function invalidUid(): bool{
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


    // when user enters invalid email, use filter_var php method

     private function invalidEmail(): bool{

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
    private function pwdMatch(): bool{

        $result;
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    
    // when user enters a username that already exist in the database
    private function uidTakenCheck(): bool{
        $result;
        if (!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}

