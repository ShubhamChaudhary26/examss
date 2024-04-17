<?php

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