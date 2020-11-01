<?php

function greet($name){
    return "Hola, $name";
}

echo greet('Fredy');
echo '<br>';

// Referencias
$course = 'PHP';
//function path($course){
function path(&$course){
    $course = 'Laravel';
    echo $course;
    echo '<br>';
}

path($course);
echo $course;
echo '<br>';


// Predeterminado
function greetAgain($name = 'Italo'){
    return "Hola, $name";
}

echo greetAgain();
echo '<br>';
echo greetAgain('Fredy');
echo '<br>';

?>
