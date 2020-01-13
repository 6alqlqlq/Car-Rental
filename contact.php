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
  width: 94%;
  padding: 15px;
  margin: 5px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text],input[type=password],input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit button */
.submitbtn {
  background-color: #00bfff;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.submit:hover {
  opacity: 1;
}


/* Set a grey background color and center the text of the "sign in" section */
submit {
  background-color: #f1f1f1;
  text-align: center;
}


</style>
</head>
<body>


<form class="form-horizontal" role="form" method="post" accept-charset="utf-8">
  <h2>Contact Us</h2>
	<div class="form-group">
    <label class="col-sm-3 control-label" for="fname">First Name</label>
	<div class="col-sm-9">
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
	<div>
    <label class="col-sm-3 control-label"  for="lname">Last Name</label>
	<div class="col-sm-9">
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
	<div>
    <label class="col-sm-3 control-label" for="country">Country</label>
    <select id="country" name="country">
		<option value="Germany">Germany</option>      
		<option value="Bulgaria">Bulgaria</option>
     
    </select>
	<hr>
    <label class="col-sm-3 control-label" for="subject">Subject</label>
	<div class="col-sm-9">
    <textarea id="subject" name="subject" placeholder="Write something.." style="height: 213px; margin: 0px; width: 522px;"></textarea>
	<div>
    <input type="submit" a href="index.php" value="Submit" class="submitbtn">
  </form>
</div>
