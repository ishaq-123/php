<?php
$car=array("Suzuki" ,"Mehran","2017","White","abc123");
$car1=array("Toyota" ,"Corolla","2010","Blue","abc127");
//echo $car[2];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
	<table class="table">
		<thead>
			<tr>
			<th>Make</th>
			<th>Name</th>
			<th>Model</th>
			<th>Color</th>
			<th>Registration</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo "$car[0]"; ?></td>
				<td><?php echo "$car[1]"; ?></td>
				<td><?php echo "$car[2]"; ?></td>
				<td><?php echo "$car[3]"; ?></td>
				<td><?php echo "$car[4]"; ?></td>
			</tr>
			<tr>
				<td><?php echo "$car1[0]"; ?></td>
				<td><?php echo "$car1[1]"; ?></td>
				<td><?php echo "$car1[2]"; ?></td>
				<td><?php echo "$car1[3]"; ?></td>
				<td><?php echo "$car1[4]"; ?></td>
			</tr>
			</tbody>
</table>
</div>

</body>
</html>