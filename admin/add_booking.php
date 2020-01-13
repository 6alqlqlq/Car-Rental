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
						<h2>Add New Booking</h2>
					</div>					
<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 10 symbols</span>
									<label>Booking ID<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="BookingID" required />
								</p>
								<p>
									<span class="req">max 10 symbols</span>
									<label>User ID <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="UserId" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Car ID<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="CarID" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>PeriodID <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="PeriodID" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>BookingFrom <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="BookingFrom" required />
								</p>
<p>
									<span class="req">max 20 symbols</span>
									<label>BookingTo <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="BookingTo" required />
								</p>		
								<p>
									<span class="req">max 20 symbols</span>
									<label>Booking Price<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="BookingPrice" required />
								</p>
								
						</div>
						
						<div class="buttons">							
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$BookingID = $_POST['BookingID'];
								$UserId = $_POST['UserID'];
								$CarID = $_POST['CarID'];
								$BookingFrom = $_POST['BookingFrom'];
								$BookingTo = $_POST['BookingTo'];
								$BookingPrice = $_POST['BookingPrice'];
								
								$qr = "INSERT INTO booking (BookingID,UserID,CarID,BookingFrom,BookingTo,BookingPrice) 
													VALUES ('$BookingID','$UserID','$CarID','$BookingFrom','$BookingTo','$BookingPrice')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_booking.php\")
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
						<a href="bookingstatus.php" class="add-button"><span>View Our Booking</span></a>				
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>
</body>
</html>