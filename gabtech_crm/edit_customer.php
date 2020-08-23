<?php
	require_once 'dbconfig.php';

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
	<link rel="stylesheet" type="text/css" href="css/account_page.css">
</head>

<body>
	<header id="gt-header">
			<img id="gt-image" src="Gabtech-Global.png" alt="Gabtech Global logo" width = "310" height="80">     
	</header>

	<div id="gt-menu">                                                                             
		</div>			
			<!-- main content -->
			<main>
				<!-- form content -->
				<form id="acc-form" name="acc-form">
					<!-- container  -->
					<div class="container">
						<h3>Account Page for Edit and View</h3>
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
									<option value="">Add Blog Post</option>
									<option value="1">ADD BLOG POST = NO</option>
									<option value="2">ADD BLOG POST = YES</option>
									<option value="3">BLOG POST ADDED</option>
								</select>

								<select class="select">
									<option value="">Status</option>
									<option value="1">Need More Business Info</option>
									<option value="2">Ready For Link Building</option>
									<option value="3">Backlinks Checked By QA</option>
								</select>

								<button type="submit" id="save-btn" name="save-btn">SAVE</button>
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
									<div class="container" id="container3">
										<label for="page1">More Page #1:</label>
										<input type="url" name="page1">

										<label for="page2">More Page #2:</label>
										<input type="url" name="page1">

										<label for="page3">More Page #3:</label>
										<input type="url" name="page3">
									</div>
							</fieldset>

							<fieldset id="pdf-link" name="pdf-link" class="fieldset">
								<legend>PDF Document Link</legend>
									<div class="container" id="container4">
										<label for="pdf-link">PDF Document Link:</label>
										<input type="url" name="PDF">
									</div>
							</fieldset>

							<fieldset id="account-info" name="account-info" class="fieldset">
								<legend>Account and Password</legend>
									<div class="container" id="container1">
										<label for="gmail-name">Gmail First & Last name:</label>
										<input type="text" name="gmailname">

										<label for="gmail-account">Gmail Account:</label>
										<input type="email" name="gmailaccount">

										<label for="gmail-pass">Gmail Password:</label>
										<input type="password" name="gmailpass">

										<label for="alt-email">Recovery Email:</label>
										<input type="email" name="recoveryEmail">

										<label for="alt-pass">Recovery Password:</label>
										<input type="password" name="recoveryPass">
									</div>

									<div class="container" id="container2">
										<label for="short-bio">Short Bio:</label>
										<input type="text" name="shortBio">

										<label for="long-bio">Long Bio</label>
										<textarea></textarea>
									</div>
							</fieldset>

							<fieldset class="fieldset">
								<legend>Backlinks</legend>
									<div>
									</div>
							</fieldset>

							<fieldset class="fieldset">
								<legend>Blog Post</legend>
									<div>
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