<!DOCTYPE html>
<?php 
include ("functions.php");
?>

<html>
<head>


	<title>My ecommerce site</title>


	<link rel="stylesheet" href="style.css" media="all"/>
</head>
<body>



	<div class="main_wrapper">
		
			

		<!-- navigation bar -->
			
			<div class="menubar">
				
				<ul id="menu">
					
					<li><a href="#">Home</a></li>
					<li><a href="#">All products</a></li>
					<li><a href="#">Account</a></li>
					<li><a href="#">Sign up</a></li>
					<li><a href="#">Shopping Cart</a></li>
					<li><a href="#">Contact Us</a></li>

				</ul>


					<div id="form">
							
						<form method="get" action="results.php" enctype="multipart/form-data">
							
							<input type="text" name="user_query" placeholder="Search a Product"/>
							<input type="submit" name="search" value="Search"/>


						</form>



					</div>


			</div>
		
		<!--- end navigation bar -->	

			<div id="content_wrapper">
				
				<div id="sidebar">
				
		
					<div id="sidebar_title">Categories</div>

					<ul id="cats">

						<?php

							getCats();

						?>
						
					 <!-- change content

						<li><a href="#">Laptops</a></li>
						<li><a href="#">Computers</a></li>
						<li><a href="#">Mobiles</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">ipads</a></li>
						<li><a href="#">Tablets</a></li>
						-->
					</ul>
					
					<div id="sidebar_title">Brands</div>

					<ul id="cats"> <!-- change content -->

						<li><a href="#">HP</a></li>
						<li><a href="#">DELL</a></li>
						<li><a href="#">Motorola</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">Sony Eracson</a></li>
						<li><a href="#">LG</a></li>
						<li><a href="Apple">Apple</a></li>

					</ul>




				</div>




				<div id="content_area">This is content area</div>

			</div>
				

				<div id="footer">
					<h3 style = "text-align: center; padding-top: 30px; ">&copy; 2017 by www.Thiswashardasf***.com</h3>

				</div>
			
			




	</div>




</body>
</html>