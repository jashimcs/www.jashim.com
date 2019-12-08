<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$database="profile";
	
	//create connection
	
	$conn = mysqli_connect($servername, $username, $password, $database);
	//check connection
	if(!$conn){
		die("connection failed: " .mysqli_connect_errno());
	}
	//echo "connection successcully"
?>
