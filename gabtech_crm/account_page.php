<!DOCTYPE html>
<html>

	<!-- webpage's info -->
	<head>
		<title>Account Page</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/account_page.css">
	</head>


	<!-- visible in the webpage -->
	<body>
		<!-- header container -->
		<header id="gt-header">
			<img id="gt-image" src="Gabtech-Global.png" alt="Gabtech Global logo" width = "310" height="80">     
		</header>

		<!-- menu container -->
		<div id="gt-menu">                                                                             
		</div>			
			<!-- main content -->
			<main>
				<!-- form content -->
				<form id="acc-form" name="acc-form">
					<!-- container  -->
					<div class="container">
						<h3>New Account Creation Page</h3>
						<p>Please fill out the information needed</p>
							<fieldset id="dropdown" name="dropdown" class="fieldset">
								<select  class="select" id="acc-form" name="acc-form">
									<option value="_Any" selected="selected">Choose Month</option>
									<option value="1">Month = 1</option>
									<option value="2">Month = 2</option>
									<option value="3">Month = 3</option>
									<option value="4">Month = 4</option>
									<option value="5">Month = 5</option>
									<option value="6">Month = 6</option>
									<option value="7">Month = 7</option>
									<option value="8">Month = 8</option>
									<option value="9">Month = 9</option>
									<option value="10">Month = 10</option>
									<option value="11">Month = 11</option>
									<option value="12">Month = 12</option>
								</select>

								<select id="" class="select">
									<option value="">SEO specialists</option>
								</select>

								<select class="select">
									<option value="">Status</option>
									<option value="1">Need More Business Info</option>
									<option value="2">Ready For Link Building</option>
									<option value="3">Backlinks Checked By QA</option>
								</select>

								<button type="submit" id="save-btn" name="save-btn">SAVE</button>
							</fieldset>

							<fieldset id="blog-post" name="blog-post" class="fieldset">
								<label for="blog-post">Add Blog Post??</label>
									<select class="select">
										<option value=""></option>
										<option value="1">YES</option>
										<option value="2">NO</option>
									</select>
							</fieldset>

							<fieldset id="business-info" name="business-info" class="fieldset">
								<legend>General Business Info</legend>
									<div class="container" id="container1">
										<label for="business">Business Name:</label>
										<input type="text" name="business" id="business">

										<label for="address">Full Business Address:</label>
										<input type="text" name="address" id="address">

										<label for="number">Business Contact Number:</label>
										<input type="text" name="number">

										<label for="website">Business Website:</label>
										<input type="url" name="url">
									</div>

									<div class="container" id="container2">

										<label id="keyword" for="keyword">Keywords</label>
										<textarea></textarea>
									</div>
							</fieldset>

							<fieldset id="pages" name="pages" class="fieldset">
								<legend>More Pages</legend>
									<div id="container3">
										<label for="page1">More Page #1:</label>
										<input type="url" name="page1">

										<label for="page2">More Page #2:</label>
										<input type="url" name="page1">

										<label for="page3">More Page #3:</label>
										<input type="url" name="page3">
									</div>
							</fieldset>
					</div>
				</form>
			</main>
		<!-- php script for the footer -->		
		<?php
			require 'includes/footer.php';
		?>

	</body>
</html>