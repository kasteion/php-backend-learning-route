<?php

function greet(){
    return "Hola...";
}

echo greet();
echo '<br>';

function returningArray(){
    return ['PDF', 'View'];
}

// No convertir un array en string... por eso utilizamos var_dump
var_dump(returningArray());

?>
