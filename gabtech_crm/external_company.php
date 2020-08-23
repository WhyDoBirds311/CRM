<!-- a page for the non-company users -->

<?php
	include 'includes/session.php';
?>

<!DOCTYPE html>
<html>
	<!-- webpage's info -->
	<head>
		<title>External Company Page</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial scale=1">
		<link rel="stylesheet" type="text/css" href="css/external_company.css">
	</head> 

	<!-- visible in the webpage -->
	<body>
		<header>
			<img id="logo" src="Gabtech-Global.png" alt="Gabtech Logo" width="310" height="80">
		</header>

		<!-- main content of the page -->
		<main id="external_main">
			<!-- menu container -->
			<div class="menu">
				<!-- title and description of the page -->
				<h4>Welcome <?php echo $login_session; ?></h4>
				<span><a href="includes/logout.php"> Log Out</a></span>
			</div>

			<!-- sidebar -->
			<div class="sidebar">
				<button class="btn">View</button>
				<button class="btn">Log Out</button>
			</div>

			<!-- main content -->
			<div class="viewtab">
			</div>
		</main>
		<!-- end of the main div -->

		<!-- php script for the footer -->	
		<?php
			require 'includes/footer.php';
		?>
	</body>
</html>