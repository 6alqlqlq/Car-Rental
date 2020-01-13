<?php
	include '../includes/config.php';
?>
<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">		
		<div id="main">
			<div id="content">				
				<div class="box">
					<div class="box-head">
						<h2>Add City</h2>
					</div>					
					<form action="" method="post" enctype="multipart/form-data">						
						<div class="form">
								<p>
									<span class="req">max 100 symbols</span>
									<label>City Name <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="City" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>City ID<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="CityID" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>CountryID <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="CountryID" required />
								</p>						
						</div>						
						<div class="buttons">							
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
						
								
								$CityID = $_POST['CityID'];
								$CountryID = $_POST['CountryID'];
								$City = $_POST['City'];
								
								
								$qr = "INSERT INTO city (CityID,CountryID,City) 
													VALUES ('$CityID','$CountryID','$City'";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_city.php\")
											</script>";
									}
								
								else 'Failed';
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">				
				<div class="box">					
					<div class="box-head">
						<h2>Management</h2>
					</div>					
					<div class="box-content">
						<a href="city.php" class="add-button"><span>View Our City</span></a>			
					</div>
				</div>
			</div>
				
		</div>
	</div>
</div>
</body>
</html>