<?php 
$n=10;
$r=3;
$b=1;
$c=1;
$permutation;

//n!

for ($i=$n; $i>0; $i--)
{
	$c=$c*$i;
}
echo"$c";

//n-r!

for ($x=$r;$x>=1;$x-- )
{
$b=$n-($x*$b);
}
echo"$b";

//permutation

$permutation=$c/$b;
echo"<br>Question=n!/n-r!<br>";
echo"n! =$c<br>/<br> n-r! =$b <br>Result=$permutation";
?>