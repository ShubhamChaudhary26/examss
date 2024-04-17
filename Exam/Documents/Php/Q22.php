<!-- 
22)Find out following pattern in a string.
a)only digits	b)only spaces	c)only characters	d)special symbol	d)range a to h.
 -->

 <?php
$string = "abc123 !@# def ghi 456";

// a) Only digits
if (preg_match('/^\d+$/', $string)) {
    echo "Pattern 'Only digits' found. <br>";
} else {
    echo "Pattern 'Only digits' not found. <br>";
}

// b) Only spaces
if (preg_match('/^\s+$/', $string)) {
    echo "Pattern 'Only spaces' found. <br>";
} else {
    echo "Pattern 'Only spaces' not found. <br>";
}

// c) Only characters
if (preg_match('/^[a-zA-Z]+$/', $string)) {
    echo "Pattern 'Only characters' found. <br>";
} else {
    echo "Pattern 'Only characters' not found. <br>";
}

// d) Special symbols
if (preg_match('/[^\w\s]/', $string)) {
    echo "Pattern 'Special symbols' found. <br>";
} else {
    echo "Pattern 'Special symbols' not found. <br>";
}

// e) Range a to h
if (preg_match('/^[a-h]+$/', $string)) {
    echo "Pattern 'Range a to h' found. <br>";
} else {
    echo "Pattern 'Range a to h' not found. <br>";
}
?>