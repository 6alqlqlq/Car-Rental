<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
<style>
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
/* Set a style for the submit button */
.sumitbtn {
  background-color: #00bfff;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.sumitbtn:hover {
  opacity: 1;
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

<form class ="form-horizontal" role="form"  method="post">
  <h2> Update your info </h2>
  <hr>
<?php   $username2= $_SESSION['username'] ;
		echo "Logged as : $username2" ;		
		include 'includes/config.php';
		$sql = "SELECT * FROM user WHERE username = '$username2' ";
		$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_array($result)) 
			{								 
			$FirstName = $row['FirstName'];
			$LastName = $row['LastName'];
			$CountryID = $row['CountryID'];
			$CityID = $row['CityID'];
			$Address = $row['Address'];
			$Email = $row['email'];
			$Username = $row['username'];
			$Password = $row['password'];
			}
			//echo " $Username,$FirstName,$LastName,$Email" // test display valuables
	

?>	

	
	<div class="form-group">        
		<hr>
		<label class="col-sm-3 control-label">First Name </label>
       	<input  type="text" maxlength="15" name="FirstName" value="<?php if(isset($_POST['FirstName'])); else echo $FirstName; ?>" />
    </div>
<?php 
	echo " $username2 ";
	if(isset($_POST['Update']))
	{
	include 'includes/config.php';
	$fName = $_POST['FirstName'] ;
	
	$sql = "UPDATE user SET FirstName = '$fName' WHERE username = '$username2' " ;
	

}

?>

<div class="form-group">        
		<label class="col-sm-3 control-label">Last Name </label>
       	<input  type="text" maxlength="15" name="LastName" value="<?php if(isset($_POST['LastName'])) ; else echo $LastName; ?>" />
    </div>

	
	
<div class="form-group">        
		<label class="col-sm-3 control-label">Email</label>
       	<input  type="text" maxlength="15" name="Email" value="<?php if(isset($_POST['Email'])) ; else echo $Email; ?>" />
    </div>
	
<div class="form-group">        
		<label class="col-sm-3 control-label">Address</label>
       	<input  type="text" maxlength="15" name="Address" value="<?php if(isset($_POST['Address'])) ; else echo $Address; ?>" />
    </div>

	
<label for='CountryID'>Country
<div class="country-select" style="width:250px;">
<select name="CountryID" id="CountryID" >
<?php

$query = "select CountryID,Country from country order by Country ASC";
$result = $conn -> query($query);
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['CountryID'] . "'>" . $row['Country'] . "</option>";
}
?>
</select>	
</div>
</label>

<label for='CityID'>City
<div class="city-select" style="width:250px;">
<select name="CityID" id="CityID" >
<?php

$query = "select CityID,City from city ";
$result = $conn -> query($query);
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['CityID'] . "'>" . $row['City'] . "</option>";
}
?>
</select>
</div>
</label>

<div class="form-group">        
		<label class="col-sm-3 control-label">Address</label>
       	<input  type="text" maxlength="15" name="Address" value="<?php if(isset($_POST['Address'])) ; else echo $Address; ?>" />
</div>

<div class="form-group">        
		<label class="col-sm-3 control-label">Password</label>
       	<input  type="text" maxlength="15" name="Password" value="<?php if(isset($_POST['Password'])) ; else echo $Password; ?>" />
    </div>
	
<div class="form-group">        
		<label class="col-sm-3 control-label">Confirm Password</label>
       	<input  type="text" maxlength="15" name="confirmpassword" value="<?php if(isset($_POST['Password'])) ; else echo $Password; ?>" />
</div>

<hr>

<div class="col-sm-9">
	<input type="submit" name="nameSubmit" value="Update" class="sumitbtn" />
</div>	

</form>

	

    
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