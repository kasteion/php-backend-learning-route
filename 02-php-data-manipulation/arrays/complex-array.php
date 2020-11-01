<?php

$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];

echo '<pre>';
var_dump($courses);
echo '<br>';
echo '<br>';

foreach ($courses as $key => $value) {
    echo "$key: $value <br>";
}
echo '<br>';

foreach ($courses as $course){
    echo "$course <br>";
}

echo '<br>';
function upper($course, $key){
    echo strtoupper($course)." : ".strtoupper($key)."<br>";
}

array_walk($courses, 'upper');

echo '<br>';
var_dump((bool)array_key_exists('frontend', $courses));
echo '<br>';
echo '<br>';
var_dump(in_array('javascript', $courses));
echo '<br>';
echo '<br>';
var_dump(array_keys($courses));
echo '<br>';
echo '<br>';
var_dump(array_values($courses));

?>
