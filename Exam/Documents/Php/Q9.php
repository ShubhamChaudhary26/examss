<!-- 9)Define and call a function factorial using PHP. -->

<?php
function factorial($num)
{
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) 
    {
        $fact *= $i;
    }
    return $fact;
}
echo"Factorial of 5 is: ".factorial(5);
?>