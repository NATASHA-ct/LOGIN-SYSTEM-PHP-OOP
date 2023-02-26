<!--Class to run the login queries runs queries-->

<?php
	
	require_once 'dbh.classes.php';
	
	class Login extends Dbh{
		
		protected function getUser($uid, $pwd){
			
                // sql query to get the user according to the entered email and pwd
				$stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');
				
                // checking for errors  in the DB
				if (!$stmt->execute(array($uid, $uid))){
					
					$stmt=null;
					header("location: ../index.php?error=stmtfailed");
					exit();
				}
				
                // CHECK IF WE ARE GWTTING ANYTHING FROM DB
				if ($stmt->rowCount() == 0) {
					$stmt=null;
					header("location: ../index.php?error=usernotfound");
					exit();
				}
			

                // PDO::FETCH_ASSOC - ITS US TELLING THE DB WE NEED Data to be fetched and returned in an associated array
				$pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

            // check if pwd is the same as in the DB
			if ($checkPwd == false) {
				
				$stmt=null;
				header("location: ../index.php?error=wrongpassword");
				exit();
			}
			else{
				
				$stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;');

                // checking for errors  in the DB
				if (!$stmt->execute(array($uid, $uid, $pwdHashed))){
					
					$stmt=null;
					header("location: ../index.php?error=stmtfailed");
					exit();
				}


				// CHECK IF WE ARE GWTTING ANYTHING FROM DB
				if ($stmt->rowCount() == 0) {
					
					$stmt=null;
					header("location: ../index.php?error=usernotfoundafterpwd");
					exit();
				}
				

                // PDO::FETCH_ASSOC - ITS US TELLING THE DB WE NEED Data to be fetched and returned in an associated array
				$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				session_start();
				
                // grab data from DB
				$_SESSION["userid"] = $user[0]["users_id"];
				$_SESSION["useruid"] = $user[0]["users_uid"];
				$stmt=null;
			}
		}
	}