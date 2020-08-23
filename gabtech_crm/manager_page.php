<?php
	include 'includes/session.php';
?>

<!DOCTYPE html>
<html>
	<!-- website infos -->
	<head>
		<title>Manager's Page</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/manager_page.css">
	</head>

	<!-- visible in the page -->
	<body>
		<header>
			<img class="logo" id="logo" src="Gabtech-Global.png" alt="Gabtech Logo" width="310" height="80">
		</header>

		<!-- main content of the page -->
		<main id="manager_main">
		<!-- menu content-->
			<div class="menu" id="menu">
				<h4>Welcome <?php echo $login_session; ?></h4> 
				<span><a href="includes/logout.php"> Log Out</a></span>
			</div>
			<!-- sidebar -->
				<div class="sidebar">
					<button class="btn">Create</button>
					<button class="btn">View</button>
					<button class="btn">Edit</button>
					<button class="btn">Delete</button>
					<button class="btn">Log Out</button>
				</div>
			<!-- main content -->
				<div class="viewtab">
				</div>
		</main>

		<!-- php script for the footer -->	
		<?php
			 require 'includes/footer.php';
		?>
	</body>
</html>