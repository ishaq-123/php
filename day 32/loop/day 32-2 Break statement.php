<!DOCTYPE html>
<html>
<head>
	<title>BREAK STATEMENT</title>
</head>
<body>
	<h1>BREAK STATEMENT</h1>
	<h4>Break statement jumps out of the loop if condition is True</h4>
<?php
for ($x=0;$x<10;$x++) 
{
	if($x==7)
	{
		break;
	}
	echo"The number is :$x<br>";
}
?>
<p>As you can see when x==7 reach loop ends</p>
</body>
</html>
