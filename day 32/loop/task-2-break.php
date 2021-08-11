<!DOCTYPE html>
<html>
<head>
	<title>BREAK STATEMENT</title>
</head>
<body>
	<h1>BREAK STATEMENT 50 NUMBER IS SKIP</h1>
<?php
for ($x=1;$x<100;$x++) 
{
   if($x==50)
	{
		continue;
    }
	if($x==80)
	{
		break;
    }
	echo"$x<br>";
}
?>
</body>
</html>