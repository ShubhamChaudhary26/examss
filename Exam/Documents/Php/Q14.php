<!-- 14)Write a program to swap the numbers using call by value. -->

<?php
function swap($a,$b)
{
    echo"Number Before swap is: $a and $b <br>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo"Number After swap is: $a and $b <br>";
}
swap(12,13)
?>