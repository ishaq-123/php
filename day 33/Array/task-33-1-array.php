<!DOCTYPE html>
<html>
<head>
	<title>For Each Loop</title>
</head>
<body>
	<h1>FOR EACH LOOP</h1>
	<h4>FOR EACH LOOP IN CASE OF ARRAY</h4>
<?php
$col = array(1,2,3,4,5);     //declare and intilaize an array
foreach ($col as $val) 
{
	$val=$val+2;
	echo "$val<br>";
}
?>
</body>
</html>
