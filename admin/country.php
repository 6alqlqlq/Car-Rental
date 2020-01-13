<!DOCTYPE html>
<html>
<head>	
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this Country?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}
	</script>
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
						<h2 class="left">Countrys</h2>						
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>								
								<th>Contry ID</th>
								<th>Country</th>								
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM country ";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>								
								<td><h3><a href="#"><?php echo $row['CountryID'] ?></a></h3></td>
								<td><?php echo $row['Country'] ?></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
					</div>
					<h2><input type="submit" onclick="window.print()" value="Print Here" /></h2>					
				</div>
			</div>
			<div id="sidebar">
				<div class="box">	
					<div class="box-head">
						<h2>Management</h2>
					</div>
					<div class="box-content">
						<a href="add_country.php" class="add-button"><span>Add Country</span></a>										
					</div>
				</div>		
			</div>			
		</div>	
	</div>
</div>
</body>
</html>