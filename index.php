<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

<style>
/* Three columns side by side */
.column {
	float:left ;
   	width: 32.2%;	
    margin-bottom: 16px;
    padding: 0 8px;
}

/* Add some shadows to create a card effect */
.card {		
    box-shadow: 10px 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
    padding: 50px 60px;
}

/* Clear floats */
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}

.title {
    color: grey;
}

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
	<!-- hero section -->
	<section class="hero">
		<?php
			include 'header.php';
		?>
				<section class="caption">
				<h2 class="caption" style="text-align: center"><i>Find Your Dream Cars For Rent!</i></h2>				
			</section>
	</section><!--  end hero section  -->


<section class="listing">
<h2 style="text-align: center"> Special Offers</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="cars/golf7.jpg" alt="golf" style="width:100%">
      <div class="container">
        <h2>Volkswagen Golf7</h2>
         <h2>Only for 54$/Day</h2>
		  <p>  </p>
        <p><button class="button" type="button" onclick="location.href='cars.php';" >Book Now</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="cars/630.jpg" alt="bmw" style="width:100%">
      <div class="container">
        <h2>BMW 520 </h2>        
         <h2>Only for 54$/Day</h2>
        <p>     </p>
       <p><button class="button" type="button" onclick="location.href='cars.php';" >Book Now</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="cars/teslaS.jpg" alt="tesla" style="width:100%">
      <div class="container">
        <h2>Tesla Model S</h2>
         <h2>Only for 54$/Day</h2>
         <p></p>
        <p><button class="button" type="button" onclick="location.href='cars.php';" >Book Now</button></p>
      </div>
    </div>
  </div>
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