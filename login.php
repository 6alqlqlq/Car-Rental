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

input[type=text]:focus, input[type=password], input[type=email]:focus {
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

/* Add a blue text color to links */

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
	</section><!--  end hero section  -->


	          <form class="form-horizontal" role="form" method="post">
			    <h2>Sing IN</h2>
				<hr>     
	        <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                    <input type="text" name="username" placeholder="Enter Username" class="form-control" autofocus >
                    </div>
            </div>
			<div class="form-group">                    
					<label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
					</div>
					
					<button class="loginbtn" type="submit" name="login" >Login</button>
                <div class="form-group">
				<p>Dont have account?  <a href="registration.php">Sign UP</a>.</p>
				</div>
			</div>
			
			
			</div>
	</form>
</form>

    <!-- end login Content -->
	
<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$username = $_POST['username'];
					$password = $_POST['password']; 
					
					$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num >0 ) {
					if($num > 0){
						session_start();
						$_SESSION['username'] = $rows['username'];
						$_SESSION['password'] = $rows['password'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful. Welcome To Our System\");
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"login.php\")
									</script>";
					} }
					else {
					$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['username'] = $rows['username'];
						$_SESSION['password'] = $rows['password'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful. Welcome To Our System\");
									window.location = (\"cars.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"login.php\")
									</script>";
					}
					}
				}
				

?>
</section>
	
</body>
</html>