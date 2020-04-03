<?php

$nalname = 'bio';
$arr = range("a", "z");
$maxIndex = count($arr) - 1;
print_r($arr);
do {
    $string = $arr[rand(0, $maxIndex)] . $arr[rand(0, $maxIndex)] .$arr[rand(0, $maxIndex)];
} while ($nalname !== $string);
print_r--($string);