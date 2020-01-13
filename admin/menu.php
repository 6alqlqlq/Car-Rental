<?php
	session_start();
	if(!$_SESSION['username'] && (!$_SESSION['password'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#"></a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>Administrator</strong></a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Dashboard</span></a></li>
			    <li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
				<li><a href="bookingstatus.php"><span>Booking Status</span></a></li>			   
				<li><a href="rent.php"><span>Rent Price</span></a></li>				
				<li><a href="penalty.php"><span>Penalty</span></a></li>
				<li><a href="country.php"><span>Country</span></a></li>
				<li><a href="city.php"><span>City</span></a></li>
				<li><a href="specialoffer.php"><span>Special Offers</span></a></li>
			   			    
			</ul>
		</div>