<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script> -->
<style>
.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 30%;
}

.button:hover {
    background-color: #555;
}

</style>
</head>

<body>

	<section class="hero">
		<?php
			include 'header.php';
		?>
			<section class="caption">
					<h2 class="caption" style="text-align: center"><i>Find Your Dream Cars For Rent!</i></h2>				
			</section>	
			
			</section>	
<!--  end hero section  -->

<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h3 class="properties" style="text-align: center"> OUR CARS</h3>
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="320" height="190">
					</a>
					<span class="price"><?php echo $rws['hire_cost'].'$/Per day';?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Brand:'.$rws['car_brand'];?></a>
						</h1>
						<h2>Car Model: <span class="property_size"><?php echo $rws['car_model'];?></span></h2>
						<h2>Engine:<span class="property_size"><?php echo $rws['Engine'];?></span></h2>
						<h2>Gearbox:<span class="property_size"><?php echo $rws['Gearbox'];?></span></h2>
						<h2>Year of Manufacturing: <span class="property_size"><?php echo $rws['YearOfManufacturing'];?></span></h2>
						<h2>Doors: <span class="property_size"><?php echo $rws['doors'];?></span></h2>
						<h2>Capacity: <span class="property_size"><?php echo $rws['capacity'];?></span></h2>
						<p><button class="button" type="button" onclick="location.href='cars.php';" >Book Now</button></p>
					</div>
				</li>
			<?php
						}
			?>  <!-- end php/wrapper,full home -->
			</ul>
		</div>
	</section>


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
<!--  end footer  -->
</body>
</html>