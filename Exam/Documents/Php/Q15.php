<!-- 15)Write a program to swap the numbers using call by references -->

<?php
function swap($num1, $num2)
{
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

// Test the function
$a = 5;
$b = 10;

echo "Before swapping: a = $a, b = $b <br>";

// Pass variables by reference to swap their values
swap($a, $b);

echo "After swapping: a = $a, b = $b";
?>