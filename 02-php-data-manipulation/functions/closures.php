<?php

// Una función anónima se utiliza en una variable que require lógica

$greet = function ($name) {
    return "Hola, $name";
};

echo $greet('Fredy');
echo '<br>';

function greetAgain (Closure $lang, $name){
    return $lang($name);
}

$es = function ($name){
    return "Hola, $name";
};

$en = function ($name){
    return "Hello, $name";
};

echo greetAgain($es, 'Linda');
echo '<br>';
echo greetAgain($en, 'Lynda');

?>
