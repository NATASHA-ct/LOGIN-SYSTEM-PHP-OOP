<?php
	
	require_once 'login.classes.php';
	
	class LoginController extends Login {
		
		public function __construct(
            private $uid,
            private $pwd,
            )
		{
		}

		// checks for errors before allowing user to login
		public function loginUser() {
			
			if (!$this->emptyInput()) {
				
				header("location: ../index.php?error=emptyinput");
				exit();
			}
			
            // grab the user from the DB
			$this->getUser($this->uid, $this->pwd);
		}

        // method to check if user entered a email and a pwd run during login	
		private function emptyInput(): bool{
			
			if(empty($this->uid) || empty($this->pwd)){
				$result = false;
				
			}
			else{
				$result = true;
			}
			
			return $result;
		}
	}