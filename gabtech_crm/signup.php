<!-- Signup form for the Gabtech CRM System -->


<!-- Start of Signup page --> 

<!DOCTYPE html>
<html>

	<head>
		<title>Sign Up</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/su_style.css">
	</head>

<!-- visible in the webpage -->
	<body>
	<!-- logo container -->
	  <header id="gt-header">
			<img id="gt-image" src="Gabtech-Global.png" alt="Gabtech Global logo" width = "310" height="80">       
		</header>
		<!-- Main content of the Page -->
			<main id="su-main"> 
			  <!-- menu -->
				<div id="signup-menu">
					<p id="p-menu">Already have an account? <a href="index.php">Sign in</a>.</p>                           
				</div>

			  <!-- signup form main content -->

				<form id="signup-form" action="includes/signup_inc.php" method="post">
					<p id="p-signup">Fill some information about yourself</p>
					<label for="email">Email</label>
					<input id="email" type="email" name="mail" placeholder="Email" required>                                
					<label for="username">Username</label>
					<input id="username" type="text" name="username" placeholder="Username" required>                       
					<label for="password">Password</label>
					<input id="password" type="password" name="password" placeholder="Password" required>                   
					<label for="company">Company</label>
					<input id="company" type="text" name="company" placeholder="Company" required>			                
					<button id="submit" type="submit" name="signup">Sign up</button>
				</form>
			</main>  
		<!-- End of the Signup form -->
		
		<!-- php script for the footer -->	
		<?php
			require 'includes/footer.php';
		?>

	</body>
</html>