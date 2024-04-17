<!-- 32) Define static variable count in your program to count frequency of calling a function call. Also define global and local variables in function and perform some basic arithmetic operations.    -->

<?php
$a = 10;

function variables()
{
    $b=20;
    echo"Local Variable: ".$b."<br>";
    global $a;
    echo"Global Variable: ".$a."<br>";
}
variables();
echo"Global Variable: ".$a.'<br>';

function inccount()
{
    static $count = 0;
    $count++;
    echo'Count: ' . $count . '<br>';
}
inccount();
inccount();
inccount();
inccount();
?>

<?php
// Define two numbers
$number1 = 10;
$number2 = 5;

// Addition
$addition = $number1 + $number2;
echo "Addition: $number1 + $number2 = $addition <br>";

// Subtraction
$subtraction = $number1 - $number2;
echo "Subtraction: $number1 - $number2 = $subtraction <br>";

// Multiplication
$multiplication = $number1 * $number2;
echo "Multiplication: $number1 * $number2 = $multiplication <br>";

// Division
if ($number2 != 0) {
    $division = $number1 / $number2;
    echo "Division: $number1 / $number2 = $division <br>";
} else {
    echo "Division by zero is not allowed. <br>";
}

// Modulo
if ($number2 != 0) {
    $modulo = $number1 % $number2;
    echo "Modulo: $number1 % $number2 = $modulo <br>";
} else {
    echo "Modulo by zero is not allowed. <br>";
}
?>
