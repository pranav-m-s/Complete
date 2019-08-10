<?php 
	include "conn.php";

	//Arguments passed in POST should have same as the value for name attribute in file3.html file

//	$name = $_POST['name'];

	//$id=$_POST['id'];
	$email = $_POST['email'];
	$password=$_POST['password'];



	$password =password_hash($password, PASSWORD_BCRYPT);
	
	// $question = $_POST['question'];
	$query = "INSERT INTO `login_admin` (`email`,`password`) VALUES('$email','$password' )";
	$result = mysqli_query($con,$query);

	if($result){
		echo "successfully inserted";
	}
	else{
		echo "failed to insert";
	}

 ?>