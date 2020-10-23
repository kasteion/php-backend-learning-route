<?php

echo 'Un texto de una línea
varias líneas
comilla simple \' backslash \\ continuamos con más texto
$variable<br>';

$name = 'Fredy';

echo "Mi nombre es $name <br>";

echo 'Mi nombre es '.$name.'<br>';

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

echo "{$courses['backend'][0]}<br>";

class User {
    public $name = 'Fredy';
}


echo "$user->$name quiere aprender {$courses['backend'][0]}.<br>";

$teacher = 'Italo';
$Italo = 'Profesor de PHP';

echo "$teacher es {${$teacher}}<br>";


function getTeacher()
{
    return 'teacher';
}

echo "{${getTeacher()}} enseña PHP<br>"; 

?>
