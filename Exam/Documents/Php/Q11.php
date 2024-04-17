<!-- 11)Write a program to implement string compare and search operations. -->

<?php
// String comparison
$string1 = "Hello, World!";
$string2 = "hello, world!";

if (strcmp($string1, $string2) === 0) {
    echo "Strings are equal. <br>";
} else {
    echo "Strings are not equal. <br>";
}

// String search
$searchString = "Hello";
$haystack = "Hello, World! This is a test string.";

if (strpos($haystack, $searchString) !== false) {
    echo "String '$searchString' found in the haystack. <br>";
} else {
    echo "String '$searchString' not found in the haystack. <br>";
}
?>