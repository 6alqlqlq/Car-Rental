<?php 
	include 'includes/db_connection.php';
 
	$conn = OpenCon();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		//two passwords are equal to each other

		if($_POST['Password'] == $_POST['confirmpassword'])
		{
			$FirstName = $conn->real_escape_string($_POST['FirstName']);
			$LastName = $conn->real_escape_string($_POST['LastName']);
			$CountryID = $conn->real_escape_string($_POST['CountryID']);
			$CityID = $conn->real_escape_string($_POST['CityID']);
			$Address = $conn->real_escape_string($_POST['Address']);
			$Email = $conn->real_escape_string($_POST['Email']);
			$Username = $conn->real_escape_string($_POST['Username']);
			$Password = $_POST['Password']; //md5 hash password security
			
			

			$sql = "INSERT INTO user (FirstName, LastName, CountryID, CityID, Address, email, username, password, CreatedON, ModifiedON)"
						."VALUE('$FirstName','$LastName','$CountryID','$CityID','$Address','$Email','$Username','$Password',UTC_TIMESTAMP,UTC_TIMESTAMP)";
						
					
			if($conn -> query($sql) == true)
			{
				echo"<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"index.php\")
											</script>";
			}
			else
			{
			"<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"registration.php\")
											</script>";
			}
		}
		else
		{
			$_SESSION['message'] = "Two passwords do not match";
		}
	}
	CloseCon($conn);
?>

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
.loginbtn {
  background-color: #00bfff;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.loginbtn:hover {
  opacity: 1;
}


/* Set a grey background color and center the text of the "sign in" section */
signup {
  background-color: #f1f1f1;
  text-align: center;
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
	</section>
<!--  end hero section  -->


	
	<form class="form-horizontal" role="form" action="registration.php" method="post" accept-charset="utf-8 enctype="multipart/form-data" autocomplete="off">
   
   <h2>Sing UP</h2>
   <hr>
    
		<div class="form-group">
            <label class="col-sm-3 control-label">First Name</label>
				 <div class="col-sm-9">
					<input class="form-control" type="text" placeholder="FirstName" name="FirstName" required autofocus />
				</div>	
		</div>	
		<div class="form-group">
			<label class="col-sm-3 control-label">Last Name</label>
			<div class="col-sm-9">
		<input type="text" placeholder="LastName" name="LastName" required />
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label">Address</label>
			<div class="col-sm-9">
		<input type="text" placeholder="Address" name="Address" required  />
		</div>
		</div>
		<div class="form-group">		
		<label class="col-sm-3 control-label">Email</label>
			<div class="col-sm-9">
		<input type="text" placeholder="Email" name="Email" required  />
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-sm-3 control-label">Username</label>
			<div class="col-sm-9">
		<input type="text" placeholder="UserName" name="Username" required />
		</div>
		</div>
			
		<div class="form-group">
		<label class="col-sm-3 control-label">Password</label>
			<div class="col-sm-9">
		<input type="password" placeholder="Password" name="Password" autocomplete="New-Password" required  />
		
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label">Confirm Password</label>
			<div class="col-sm-9">
		<input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
		</div>
		</div>

<label for='CountryID'>Country
<div class="country-select" style="width:250px;">
<select name="CountryID" id="CountryID" >
<?php
$conn = OpenCon();
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
$conn = OpenCon();
$query = "select CityID,City from city ";
$result = $conn -> query($query);
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['CityID'] . "'>" . $row['City'] . "</option>";
}
?>
</select>
</div>
</label>

<input type="submit" value="Register" name="register" class="loginbtn" />
				<div class="form-group">
				<p>Already have account?  <a href="login.php">Sign IN</a>.</p>
				</div>
 </form>



</body>
</html>