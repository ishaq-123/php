<?php
$first_name="Muhammad";
$second_name="Ishaq";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Declation method of Declaring varible</title>
</head>
<body>
	<!--Method no 1 Easy methode-->
	<div class="container">
		<h1 class="text-danger">First Name:     <?php echo"$first_name";?></h1>
		<h1 class="text-info">Second Name:     <?php echo"$second_name";?></h1>
	<hr>

	<!--Method no 2-->
	<?php
    echo "<h1 class=\"text-danger\">First Name:$first_name</h1>";
    echo "<h1 class=\"text-info\">Second Name:$second_name</h1>";
    ?>

	<!--Method no 2-->
	<h1>Full Name:<?php echo"$first_name"?> <?php echo"$second_name "?></h1>
	</div>

</body>
</html>