<?php

$courses = ['javascript', 'php'];
$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

echo '<pre>';
var_dump(array_diff($wishes, $courses));
echo '<br><br>';

$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayA, $arrayB));
echo '<br><br>';

var_dump(array_diff($arrayB, $arrayA));
echo '<br><br>';

$array1 = [
    'a' => 'green',
    'b' => 'brown',
    'c' => 'blue',
    'red'
];

$array2 = [
    'a' => 'green',
    'yellow',
    'red'
];

var_dump($array1);
echo '<br><br>';

var_dump($array2);
echo '<br><br>';

var_dump(array_diff_assoc($array1, $array2));
echo '<br><br>';
?>
