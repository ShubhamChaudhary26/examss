<!-- 10)Write a program to implement any 5 string manipulation functions. -->

<?php
// String to manipulate
$string = "Hello, World!";
echo $string;
echo "<br>";

// 1. strlen: Get the length of the string
$length = strlen($string);
echo "Length of the string: $length <br>";

// 2. strtolower: Convert the string to lowercase
$lowercase = strtolower($string);
echo "Lowercase string: $lowercase <br>";

// 3. strtoupper: Convert the string to uppercase
$uppercase = strtoupper($string);
echo "Uppercase string: $uppercase <br>";

// 4. substr: Get a part of the string (starting from index 7, length 5)
$substring = substr($string, 7, 5);
echo "Substring: $substring <br>";

// 5. str_replace: Replace "World" with "Universe" in the string
$replacedString = str_replace("World", "Universe", $string);
echo "Replaced string: $replacedString <br>";
?>