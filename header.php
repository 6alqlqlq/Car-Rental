<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<style> 
<!--a {
  color: dodgerblue;
} -->
</style>

<header>
			<div class="wrapper">
				<h1 class="logo">Car Rental</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['username'] && (!$_SESSION['password'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="cars.php">Cars</a></li>					
						<li><a href="registration.php">Sing UP</a></li>
					    <li><a href="login.php">Sing IN</a></li>
					
					
					</ul>
				   <?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="cars.php">Cars</a></li>
								<li><a href="status.php">View Status</a></li>								
								<li><a href="profile.php">Profile</a></li>
								<li><a href="logout.php">Logout</a></li>
						</ul>
					
					<?php
						}
					?>
				</nav>
			</div>
		</header>