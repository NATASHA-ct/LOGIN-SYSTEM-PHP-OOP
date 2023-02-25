<!-- Model class that connects to the DB  -->

<?php

class Dbh{

    private function connect(){
        // error handling
try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
            return $dbh;
        } catch (PDOExceotion $e) {
            print "Error! ". $e->getMessage()."<br/>";
            die();
        }

    }
}

   