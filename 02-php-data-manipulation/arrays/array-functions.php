<?php

$courses = [
    'php', 
    'javascript',
    'laravel'
];

echo '<pre>';
var_dump($courses);
echo '<br><br>';

sort($courses);
var_dump($courses);
echo '<br><br>';

rsort($courses);
var_dump($courses);
echo '<br><br>';

$courses2 = [
    100 => 'php', 
    10 => 'javascript',
    1000 => 'laravel'
];

var_dump($courses2);
echo '<br><br>';

ksort($courses2);
var_dump($courses2);
echo '<br><br>';

krsort($courses2);
var_dump($courses2);
echo '<br><br>';

var_dump(array_slice($courses, 1));
echo '<br><br>';

var_dump(array_chunk($courses, 2));
echo '<br><br>';

var_dump(array_chunk($courses, 1));
echo '<br><br>';

echo array_shift($courses);
echo '<br><br>';

var_dump($courses);
echo '<br><br>';

array_unshift($courses, 'php');
var_dump($courses);
echo '<br><br>';

echo array_pop($courses);
echo '<br><br>';
var_dump($courses);
echo '<br><br>';

array_push($courses, 'javascript');
var_dump($courses);
echo '<br><br>';

var_dump(array_flip($courses2));
?>
