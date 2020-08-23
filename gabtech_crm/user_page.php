<!-- User page Main Content -->

<!-- Start of coding -->
<?php
	include 'includes/session.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>User Page</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/userpage.css">
	</head>

	<!-- visible in the webpage -->
	<body>
		<header id="usrpg-header">
			<img id="usrpg-logo" src="Gabtech-Global.png" alt="Gabtech Global logo" width="310" height="80">       
		</header>
		<!-- main content of the webpage -->
		<main id="user-main">
			<!-- menu container -->
			<div id="usrpg-menu">
				<h4>Welcome <?php echo $login_session; ?></h4>  
				<span><a href="includes/logout.php"> Log Out</a></span>
			</div>

			<!-- sidebar selections -->
			<div id="usr-sidebar">
				<button class="btn">View</button>                                                  
				<button class="btn">Links</button>	
				<button class="btn">Procedures</button>																					
				<button class="btn">Log Out</button>
			</div>


			<!-- user view tab -->
			<div id="usr-viewtab">							
			</div>
		</main>

	<!-- php script for the footer -->	
		<?php
			require 'includes/footer.php';
		?>
	</body>
</html>