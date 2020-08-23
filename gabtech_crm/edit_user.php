<?php
	require 'includes/dbconnect.php';

	if(isset($_GET['edit']))
	{

		$id = $_GET['edit'];
		$sql = "SELECT * FROM users;";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Account Edit and View</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/edit_user_page.css">
</head>

<body>
	<header id="gt-header">
			<img id="gt-image" src="Gabtech-Global.png" alt="Gabtech Global logo" width = "310" height="80">     
	</header>

	<main> 
		<div id="gt-menu">
		</div>

		<form id="user-form" class="form" method="POST" action="includes/update.php">
			<h3>Edit User Role</h3>
			<label for="username">Username:</label>
			<input id="username" type="text" name="username" value="<?php echo $row['username']; ?>">
			<input type="hidden" name="id">

			<select class="select" id="role-dropdown" name="role-dropdown">
				<option value="_Any" selected="selected">Please Choose</option>
				<option value="1">Admin</option>
				<option value="2">Manager</option>
				<option value="3">General User</option>
				<option value="4">External Company</option>
			</select>

			<button type="submit" name="update-btn" id="update-btn">Update</button>

		</form>
	</main>

	<?php
		require 'includes/footer.php';
	?>

</body>
</html>