<!-- 27)Write a program to find perfect number using user defined function in php. -->

<?php 
function isPerfectNumber($N) 
{ 
	$sum = 0; 
	
	for ($i = 1; $i < $N; $i++) 
	{ 
		if ($N % $i == 0) 
		{ 
			$sum = $sum + $i; 
		}	 
	} 
	 
	return $sum == $N; 
} 

$N = 6; 

if (isPerfectNumber($N)) 
	echo " Perfect Number"; 
else
	echo "Not Perfect Number"; 
?> 