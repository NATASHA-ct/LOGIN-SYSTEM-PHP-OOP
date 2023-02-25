<!--Class to run the queries runs queries-->

<?php

class Signup extends Dbh{

    // first run a query to check if the user already  exist in the database

    protected function checkUser($uid, $email){
        // query to check if the user being created already exist in the database
        $sql = "SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;";

        // grab the connection from the Dbh class
        $stmt = $this->connect()->prepare($sql);


        if($stmt->execute(arra($uid, $email))){
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
    
     