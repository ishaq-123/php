<?php
$a=2;
$b=3;
$c=9;
$temp=788.9999;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Sum:<?php echo $a+$b+$c?></p>
<p>Subtract:<?php echo $a-$b-$c ?></p>
<p>Multiple:<?php echo $a*$b*$c ?></p>
<p>Divide:<?php echo $a/$b/$c ?></p>
<!--value 1 point increase-->
<p>Ceil:<?php echo ceil($temp)?></p>
<!--value 1 point decrease-->
<p>Floor:<?php echo floor($temp)?></p>
<!--Refresh value change-->
<p>Randon:<?php echo rand(1,100)?></p>
</body>
</html>