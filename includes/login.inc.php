<!-- file receiving data from the user from browser -->
<?php
	require_once '../classes/login-contr.classes.php';
	require_once '../classes/login.classes.php';
	require_once '../classes/dbh.classes.php';
	
	if(isset($_POST["submit"])){
		
		// Grabbing the data
		$uid = $_POST["uid"];
		$pwd = $_POST["pwd"];
		
		// Instantiate SignupController class
		$loginController = new LoginController($uid, $pwd);
		
		
		// Running error handlers and signup
		$loginController->loginUser();
		
		// Going back to front page
		header("location: ../index.php?error=loginnone");
	}