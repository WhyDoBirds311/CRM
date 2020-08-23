<?php

	$mail = $username = $password = $company = "";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["mail"]))
		{
			$emailErr = "Email is required";
		}
		else 
		{
			$mail = test_input($_POST["mail"]);
		}

			//Check if e-mail is well-formatted
			if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
			{
				$emailErr = "Invalid email format";
			}
		
		if(empty($_POST["username"]))
		{
			$userErr = "Username is required";
		}
		else
		{
			$username = test_input($_POST["username"]);
		}

		if(empty($_POST["password"]))
		{
			$pwdErr = "Password is required";
		}
		else
		{
			$password = test_input($_POST["password"]);
		}

		if(empty($_POST["company"]))
		{
			$compErr = "Company is required";
		}
		else 
		{
			$company = test_input($_POST["company"]);
		}
	}

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>