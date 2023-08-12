<?php
	session_start();
	if(isset($_SESSION['email'])){
		$email = $_SESSION['email'];
		echo "Welcome,". $email. "!";
		header('Location: index.php'); // Redirect back to the projects page
        exit();
	}
	if(empty($email)){
		echo "You're not an authorized user. Please <a href='index.php'>login</a>.";
	}
?>