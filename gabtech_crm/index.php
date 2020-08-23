<!-- 
Gabtech Global Solutions Customer Relationship Management System.
version 1.0. 
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Gabtechglobal CRM System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel=stylesheet type="text/css" href="css/GTCRM_style.css"> 
	</head>

	<!-- visible in the webpage -->

	<body>
	  <!-- image container -->
	  	<header id="gt-header">
			<img id="gt-image" src="Gabtech-Global.png" alt="Gabtech Global logo" width = "310" height="80">       
		</header>

      <!-- Menu conatiner -->
		<div id="gt-menu">
			<a href="#">About the System</a>                                                                               
		</div>			
      
      <!-- Content of the Page -->
		<main id="gt-main">
			<h1 id="gt-title">Gabtech CRM System</h1>                                                                     

			<!--  The Log in form -->
				<form id="main-form" action="includes/login_inc.php" method="post">
					<p id="p-login">Please Log in to use the CRM.</p>
							<label for="user">Email</label> 
							<input id="username" type="text"  name="username" placeholder="Username" required>                    
							<label for="password">Password</label>
							<input id="password" type="password"  name="password" placeholder="Password" required>        

							<button type="submit" name="login">Log in</button>                                            
					<p id="signup-txt">Don't have an account??.<a href="signup.php">Sign Up</a> here.                          
				</form>

			<!-- End of the Log In form -->
		</main>

   <!-- php script for the footer -->	
		<?php
			require 'includes/footer.php';
		?>

	</body>
</html>