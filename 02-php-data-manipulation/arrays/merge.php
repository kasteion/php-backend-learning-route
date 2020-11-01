<?php

$frontend = ['javascript'];
$backend = ['php', 'laravel'];

echo '<pre>';
var_dump($frontend + $backend);
echo '<br><br>';

$frontendComplex = ['frontend' => 'javascript'];
$backendComplex = ['backend' => 'php', 'framework' => 'laravel'];
var_dump($frontendComplex + $backendComplex);
echo '<br><br>';

var_dump(array_merge($frontend, $backend));

$frontendComplex2 = [
    'a' => 'javascript'
];

$backendComplex2 = [
    'a' => 'php',
    'b' => 'laravel'
];

echo '<br><br>';
var_dump(array_merge($frontendComplex2, $backendComplex2));

echo '<br><br>';
var_dump(array_merge_recursive($frontendComplex2, $backendComplex2));

$courses = ['javascript', 'php', 'laravel'];
$categories = ['frontend', 'backend', 'framework'];

echo '<br><br>';
var_dump(array_combine($categories, $courses));
?>
