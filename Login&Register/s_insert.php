<?php 
	include "conn.php";

	//Arguments passed in POST should have same as the value for name attribute in file3.html file

	$name = $_POST['name'];


	$email = $_POST['email'];
	$password = $_POST['password'];



	$password =password_hash($password, PASSWORD_BCRYPT);
	
	// $question = $_POST['question'];
	$query = "INSERT INTO `login_student` (`name`,`email`,`password`) VALUES('$name','$email','$password' )";
	$result = mysqli_query($con,$query);

	if($result){
		echo "successfully inserted";
	}
	else{
		echo "failed to insert";
	}

 ?>