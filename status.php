<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
		*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
/* Full-width input fields */
input[type=text], input[type=password], input[type=email]  {
  width: 30%;
  padding: 10px;
  margin: 3px 0 2px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text], input[type=password], input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}
		
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="hero">
		<?php
			include 'header.php';
		?>
			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
		</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
					include 'includes/config.php';
					$username2= $_SESSION['username'] ;		
					
					$sql="SELECT * FROM booking WHERE UserID(SELECT client_id FROM user relations WHERE username='$username2'";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_array($result)) 
					{	
				
					$BookingFrom = $row['BookingFrom'];
					$BookingTo = $row['LastName'];
					$BookingPrice = $row['BookingPrice'];
					$BookingStatusID = $row['BookingStatusID'];
					}
					
					
			?>
			<form class="form-horizontal" role="form" >
   
   <h2>View Status of rent</h2>
   <hr>
    
		<div class="form-group">
            <label class="col-sm-3 control-label">Rented Car: <?php echo "$car_brand $carmodel " ?></label>
		</div>	
		<hr>
		<div class="form-group">
			<label class="col-sm-3 control-label">Period : <?php echo "$BookingFrom  $BookingTo " ?></label>
		</div>
		<hr>
		<div class="form-group">
		<label class="col-sm-3 control-label">BookingPrice: <?php echo " $BookingPrice" ?></label>
		</div>
		<hr>
		<div class="form-group">		
		<label class="col-sm-3 control-label">Status: <?php echo "$BookingStatusID" ?></label>
		</div>	
		<hr>
		
		</div>
		
	</section>	<!--  end listing section  -->

<!-- start footer -->
<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="aboutus.php">About Us</a></li>
						<li><a href="terms.php">Terms</a></li>						
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>SPECIAL OFFERS</li>
						<li><a href="cars.php">Volkswagen Golf7</a></li>
						<li><a href="cars.php">BMW M5</a></li>
						<li><a href="cars.php">Tesla Model S</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</li>

				<li class="about">
					<p>Our Social media:</p>
					<ul>
						<li><a href="http://facebook.com/" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/" class="google" target="_blank"></a></li>
						<li><a href="http://skype.com/" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy;2019
		</div>
	</footer>
	
</body>
</html>