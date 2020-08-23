<?php
if(isset($_POST['signup'])) 
{
	require 'dbconnect.php';
	require 'su_validate.php';
	
	$role = '4';
 	$hashpassword = password_hash($password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO users (email, username, password, company, user_role) VALUES ('$mail', '$username', '$hashpassword', '$company', '$role');";
	
	if(mysqli_query($conn, $sql))
	{
		header("Location: ../index.php");
		die();
	}
	else
	{
		echo "Error: " .$sql. "". mysqli_error($conn);
	}
	$conn->close();
}

else
{
	header("Location: ../signup.php");
	die();
}

function alert($msg) 
{
	echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>