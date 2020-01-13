<?php
	include '../includes/config.php';
?>
<!DOCTYPE html >
<html>
<head>	
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"  />
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
						<h2>Add New Vehicles</h2>
					</div>					
	<form action="" method="post" enctype="multipart/form-data">						
						<div class="form">
								<p>
									<span class="req">max 100 symbols</span>
									<label>Vehicle Brand <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_name" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Vehicle Model <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_type" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Vehicle YearOfManufacturing <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="YearOfManufacturing" required />
								</p>
								<p>
									<span class="req">Current Images</span>
									<label>Vehicle Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" required />
								</p>
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Vehicle Capacity<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity" required />
								</p>	
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Engine <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="Engine" required />
								</p>	
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>GearBox<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="GearBox" required />
								</p>	
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Doors<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="Doors" required />
								</p>	
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Doors<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="Status" required />
								</p>							
						</div>						
						<div class="buttons">							
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../cars/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$car_name = $_POST['car_brand'];
								$car_type = $_POST['car_mode'];
								$YearOfManufacturing = $_POST['YearOfManufacturing'];
								$capacity = $_POST['capacity'];
								$Engine = $_POST['Engine'];
								$GearBox = $_POST['GearBox'];
								$doors = $_POST['Doors'];
								
								$qr = "INSERT INTO cars (image, car_brand,car_model,YearOfManufacturing,capacity,status,engine,doors,gearbox,) 
													VALUES ('$image','$car_name','$car_type','$YearOfManufacturing','$capacity','Available','$Engine','$GearBox','$doors')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
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
						<a href="add_vehicles.php" class="add-button"><span>View Our Vehicles</span></a>
												
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</div>

</body>
</html>