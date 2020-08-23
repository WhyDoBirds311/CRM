<?php
	require 'dbconnect.php';

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$newUsername = mysqli_real_escape_string($conn, $_POST['username']);
		$newRole = mysqli_real_escape_string($conn, $_POST['user_role']);
		$id = $_POST['id'];

		$sql = "UPDATE users SET username = '$newUsername', user_role = '$newRole' WHERE userID = $id;"; 

	if($conn->query($sql) === TRUE)
	{
		alert("Record updates successfully");
	}
	else
	{
		alert("Error updating record: ");
	}
	}

	$conn->close();
?>
