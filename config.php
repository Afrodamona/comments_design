<?php 

	//this insert data in my data base
$dsn1='localhost';
$user= 'root';
$password='';  
$dbname  = 'comment';

$conn = new mysqli($dsn1, $user, $password, $dbname);



	// $conn = new mysqli("localhost", "root", "comment");
	if($conn->connect_error){
		die('Connection Failed'.$conn->connect_error);
	}else{
		// echo "posting this is also working";
	};


?>