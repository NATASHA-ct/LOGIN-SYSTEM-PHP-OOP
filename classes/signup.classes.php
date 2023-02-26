<!--Class to run the queries runs queries-->

<?php
require_once 'dbh.classes.php';

class Signup extends Dbh{

    // first run a query to check if the user already  exist in the database

        protected function setUser($uid, $pwd, $email) {
			$stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?, ?, ?);');
			
			$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
			
			if (!$stmt->execute(array($uid, $hashedPwd, $email)))
			{
				$stmt=null;
				header("location: ../index.php?error=stmtfailed");
				exit();
			}
			
			$stmt = null;
		}

        
    protected function checkUser($uid, $email){
        // query to check if the user being created already exist in the database
      

        // grab the connection from the Dbh class
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');


        if(!$stmt->execute(array($uid, $email))){
            // this is so if the query is false , the rest of the code is not run
           $stmt = null; 

        // this is a header function which sends back the user an error message
        // the one in the paranthesis will be the url shown
           header("location: ../index.php?error=stmtfailed");
           exit();
        };

        $resultCheck;

        // show how many rows were returned from DB using rowCount
        if ($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }
        return $resultCheck;
        }

       
    }
    
     