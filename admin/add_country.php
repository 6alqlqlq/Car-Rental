<?php
	include '../includes/config.php';
?>
<!DOCTYPE html >
<html>
<head>
	
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
						<h2>Add New Country</h2>
					</div>					
					<form action="" method="post" enctype="multipart/form-data">						
						<div class="form">
								<p>
									<span class="req">max 10 symbols</span>
									<label>CountryID <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="CountryID" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Country <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="Country" required />
								</p>						
						</div>						
						<div class="buttons">							
							<input type="submit" class="button" value="submit" name="send" />
						</div>						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$country = $_POST['Country'];
								$countryid = $_POST['CountryID'];
							
								
								$qr = "INSERT INTO country (CountryID,Country) 
													VALUES ('$countryid','$country')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_country.php\")
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
						<a href="country.php" class="add-button"><span>View Our Country</span></a>							
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>
</body>
</html>