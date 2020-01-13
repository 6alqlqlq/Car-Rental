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
						<h2>Add New Price</h2>
					</div>					
					<form action="" method="post" enctype="multipart/form-data">						
						<div class="form">
								<p>
									<span class="req">max 10 symbols</span>
									<label>Brand<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="Brand" required />
								</p>
								<p>
									<span class="req">max 10 symbols</span>
									<label>Car Price ID <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="CarPriceID" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Price Per Day <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="PricePerday" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>BaseCurrencyID <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="BaseCurrencyID" required />
								</p>						
						</div>						
						<div class="buttons">							
							<input type="submit" class="button" value="submit" name="send" />
						</div>						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$CarPriceID = $_POST['CarPriceID'];
								$PricePerday = $_POST['PricePerday'];
								$BaseCurrencyID = $_POST['BaseCurrencyID'];
								
								$qr = "INSERT INTO carprice (CarPriceID,PricePerday,BaseCurrencyID) 
													VALUES ('$CarPriceID','$PricePerday','$BaseCurrencyID')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_price.php\")
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
						<a href="rent.php" class="add-button"><span>View Our Price</span></a>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>	
</body>
</html>