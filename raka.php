<?php

function swap(&$a, &$b) {
    $a = $a ^ $b;
    $b = $a ^ $b;
    $a = $a ^ $b;
}

$a = 5;
$b = 9;

echo "a=". $a ." b=". $b;

swap($a, $b);

echo "<br>a=".$a . " b=".$b;
?>

