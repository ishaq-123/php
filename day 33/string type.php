<?php
$string="my name is khan";
?>
<!DOCTYPE html>
<html>
<head>
	<title>String type</title>
</head>
<body>
	<p>String length:      <?php echo strlen($string) ?>        </p>
	<p>String Count Word:  <?php echo str_word_count($string) ?> </p>
	<p>String Reverse:     <?php echo strrev($string)?></p>
	<p>String Replace:     <?php echo str_replace("khan", "K***", $string)  ?> </p>
	<p>String Uppercase:   <?php echo strtoupper($string)?></p> 
	<p>String Lowercase:   <?php echo strtolower($string)?></p>
	<p>String Substr:      <?php echo substr($string, 6)?></p>


</body>
</html>