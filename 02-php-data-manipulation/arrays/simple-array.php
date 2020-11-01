<?php

$course = ['javascript', 'laravel', 'php', 'vuejs'];

echo '<pre>';
var_dump($course);

$course2 = [ 
    'javascript', 
    'laravel',
    10 => 'php',
    'vuejs'
];

echo '<pre>';
var_dump($course2);

?>
