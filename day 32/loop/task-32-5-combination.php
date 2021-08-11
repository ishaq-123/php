<?php 
$n=10;
$r=3;
$fact=1;
$c=1;
$combination;

//n!

$c=1;
for ($i=$n; $i>0; $i--)
{
	$c=$c*$i;
}
echo"$c";

//n(n-r)!

for ($x=$r;$x>=1;$x-- )
{
$fact=$n*$fact*$x;
}
echo"$fact";

//combination

$combination=$c/$fact;
echo"<br>Question=n!/n(n-r)!";
echo"<br>n! =$c<br>/<br> n(n-r)! =$fact <br>Result=$combination";
?>