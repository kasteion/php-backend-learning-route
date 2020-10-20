<?php

// Asignación

$num = 9;
$lang = [
    'es' => 'español',
    'en' => 'inglés'
];

// Aritmética
echo "Suma 2 + 2 " . ((int) 2 + (int) 2);
echo "\nResta 2 - 2 " . ((int) 2 - (int) 2);
echo "\nMultiplica 2 * 2 " . 2 * 2;
echo "\nDivide 2 / 2 " . 2 / 2;
echo "\nMódulo 2 % 2 " . 2 % 2;
echo "\nExponencial 2 ** 2 " . 2 ** 2;

// Comparación

// Igual ==, valor '9' == 9 (Verdadero)
// Igual ===, valor-tipo '9' === 9 (Falso)
// Diferente !=, valor '9' != 9 (Falso)
// Diferente !==, valor-tipo '9' !== 9 (Verdadero)

// Variables variables
$app = 'name';
$name = 'Fredy';

echo "\n".$app;
echo "\n".$$app;

?>