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
						<h2>Add New Penalty</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 10 symbols</span>
									<label>ID <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="ID" required />
								</p>
								<p>
									<span class="req">max 10 symbols</span>
									<label>RentID <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="RentID" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>PeriodID<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="PeriodID" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>PenaltyAmount<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="PenaltyAmount" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>FinalPenalty<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="FinalPenalty" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>BaseCurrencyID<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="BaseCurrencyID" required />
								</p>
						
						</div>
						
						<div class="buttons">
							<input type="button" class="button" value="preview" />
							<input type="submit" class="button" value="submit" name="send" />
						</div>						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$id = $_POST['ID'];
								$RentID = $_POST['RentID'];
								$PeriodID = $_POST['PeriodID'];
								$PenaltyAmount = $_POST['PenaltyAmount'];
								$FinalPenalty = $_POST['FinalPenalty'];
								$BaseCurrencyID = $_POST['BaseCurrencyID'];
							
								
								$qr = "INSERT INTO rentpenalty (ID,RentID,PeriodID,PenaltyAmount,FinalPenalty,BaseCurrencyID) 
													VALUES ('$id','$RentID''$PeriodID','$PenaltyAmount''$FinalPenalty','$BaseCurrencyID')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_penalty.php\")
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
						<a href="penalty.php" class="add-button"><span>View Our Penalty</span></a>
					</div>
				</div>
			</div>							
		</div>
	</div>
</div>
</body>
</html>