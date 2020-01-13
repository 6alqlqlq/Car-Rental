<?php
	include '../includes/config.php';
	
?>
<!DOCTYPE html >
<html>
<head>	
	<title>Admin Edit Vehicle</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
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
						<h2>Edit Vehicle</h2>
					</div>
<form action="" method="post" enctype="multipart/form-data">		
			<?php			
			$id = $_REQUEST['id'];
			$select = "SELECT * FROM cars.cars where car_id = '$id'";
					$result = $conn->query($select);
							if(!is_null($result)) 
								{
								while($row = $result->fetch_assoc())
								{
									if(count($row) > 0)
									{
							?>
						<div class="form">
								<p>
									<span class="req">max 100 symbols</span>
									<label>Vehicle Brand <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_name" value = "<?php echo $row['car_brand'] ?>" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Vehicle Model <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_type" value = "<?php echo $row['car_model']?>" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Vehicle YearOfManufacturing <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="YearOfManufacturing" value = "<?php echo $row['YearOfManufacturing']?>" required />
								</p>
								<p>
									<span class="req">Current Images</span>
									<label>Vehicle Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" value = "<?php echo $row['image']?>" required />
								</p>
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Vehicle Capacity<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity" value = "<?php echo $row['capacity']?>" required />
								</p>	
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Engine <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="Engine" value = "<?php echo $row['Engine']?>" required />
								</p>	
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>GearBox<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="GearBox" value = "<?php echo $row['Gearbox']?>" required />
								</p>	
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Doors<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="Doors" value = "<?php echo $row['doors']?>" required />
								</p>	
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Status<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="status" value = "<?php echo $row['status']?>" required />
								</p>
							<?php 
									}
								}
								}
							?>
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
								$status = $_POST['Status'];
								
								$qr = "update cars.cars
									SET image='$image',
									car_brand='$car_name',
									car_model = '$car_type',
									YearOfManufacturing = '$YearOfManufacturing',
									capacity='$capacity',
									status = '$status',
									engine = '$Engine',
									doors = '$doors',
									gearbox = '$GearBox'
                                      where car_id = 	'$carid'";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"bookingstatus.php\")
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
						<a href="add_cars.php" class="add-button"><span>Add Vehicle</span></a>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>