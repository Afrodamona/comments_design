<?php  


require 'config.php';

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$date = date('Y-m-d');

	$sql = "INSERT INTO comment_table(name,comment,cur_date)VALUES('$name','$comment','$date')";

	if($conn->query($sql)){
		$msg = "Posted Suceessfully";
		echo $msg;
	}else{
		$msg = "Failed to post comment";
		echo $msg;

		echo "ERROR: " . $sql . "<br>" . $conn->error;
	};

};





?>