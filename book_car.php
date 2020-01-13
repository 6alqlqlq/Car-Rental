<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
<style>
/* Full-width input fields */
input[type=text], input[type=password], input[type=email]  {
  width: 30%;
  padding: 15px;
  margin: 5px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password], input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit button */
.payme {
  background-color: #00bfff;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.payme:hover {
  opacity: 1;
}

/* Add a blue text color to links */

/* Set a grey background color and center the text of the "sign in" section */
payme {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
	
	
</head>
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
	
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo $rws['hire_cost'].'$/Per Day';?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car brand>'.$rws['car_brand'];?></a>
						</h1>
						<h2>Car Model: <span class="property_size"><?php echo $rws['car_model'];?></span></h2>
					</div>
				</li>
				<h3>Proceed to Hire <?php echo $rws['car_model'];?>. </h3>
				<?php
					if(!$_SESSION['username'] && (!$_SESSION['password'])){
				?>
				<form method="post">
					<table>
						<tr>
							
						<h2><a href="registration.php">Please register first </a></h2>
							
							
					</table>
				</form>
				<?php
					} else
						{
							?>
							 <form class="form-horizontal" role="form" method="post">
							<div class="form-group">        
							<hr>
							<label class="col-sm-3 control-label">Booking From </label>							
							<input type="text" name="BookingFrom" placeholder="Enter Year/Month/date" class="form-control">
							</div>
							<div class="form-group">        
							<label class="col-sm-3 control-label">Booking To </label>							
							<input type="text" name="BookingTo" placeholder="Enter Year/Month/date" class="form-control">
							</div>
							<hr>
							</form>
								<a href="pay.php">Click to Book</a>
							<?php 
							if(isset($_POST['login'])){
								include 'includes/config.php';
								$BookingFrom = $_POST['BookingTo'];
								$BookingTo = $_POST['BookingFrom']; 
								$sql = "INSERT INTO booking ( BookingFrom, BookingTo)"
											."VALUE('$BookingFrom','$BookingTo',)";
							
							}
							
							?>
							
							
							
							
							
							<?php
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"pay.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
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
						<li>SPEECIAL OFFERS</li>
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