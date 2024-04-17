<!-- 28)Write a program to show scope of variables. -->

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