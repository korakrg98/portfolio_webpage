<?php

	$name = filter_input(INPUT_POST, 'name');
	$email = filter_input(INPUT_POST, 'email');
	$message = filter_input(INPUT_POST,'message');
	if (!empty($name)){
	if (!empty($email)){
	if (!message($message)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "contacts";

	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'
			.mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO peopledetails (name,email,message) values('name','email','message')";
		if($conn->query($sql)){
			echo "record taken sucessfully"
		}
		else{
			echo "Error: ".$sql."<br>".$conn->error;
		}
		$conn->close();
	}

	}
	else{
		echo "message should not be empty";
		die();
	}
	}
	else{
		echo "email should not be empty";
		die();

	}
	}
	else{
		echo "name should not be empty";
		die();
	}
?>