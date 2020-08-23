<!-- Admin Page Main Content of the Gabtech CRM System -->

<!-- Start building the administrator page -->

<?php
	include 'includes/session.php';
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Administrator's Page</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/admin_style.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>

		<script src="js/javascript.js" type="text/javascript"></script>
	</head> 

  <!-- Visible in the webpage -->	
	<body>

	  <!--image container -->	 
		<header id="gt-header">
			<img id="gt-image" src="Gabtech-Global.png" alt="Gabtech Global logo" width = "310" height="80">     
		</header>

      <!-- main form of the webpage -->
		<main id="admin-main">
		  <!-- menu container -->	
			<div id="admin-menu">
				<h4>Welcome <?php echo ucfirst($login_session); ?></h4> 
				<span><a href="includes/logout.php"> Log Out</a></span>				
			</div>

		  <!-- sidebar -->
			<div id="admin-sidebar">
		<!--		<button id="customer-btn" class="btn">Customers</button> -->	    	
				<button id="user-btn" class="btn">Users</button>   	  
			<!--	<button class="btn"></button>      		
				<button class="btn">Delete</button>  
				<button class="btn">Links</button> 
				<button class="btn">Procedures</button> -->		
			</div>

		  <!-- activity page -->
			<div id="admin-viewtab">
			</div>
		</main>
	  <!-- end of the main form -->

	  
	<!-- php script for the footer -->	
		<?php
			require 'includes/footer.php';
		?>

	</body>
</html>