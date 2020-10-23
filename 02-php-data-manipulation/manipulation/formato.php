<?php

echo '<h1>FORMATO DE DATOS</h1>';

echo '<h2>ALTERAR</h2>'; 

$texto = "PHP es UN LENGUAJE año 2020 programación"; 
echo $texto.'<br>'; 
echo strtolower($texto).'<br>';
echo strtoupper($texto).'<br>';
echo lcfirst($texto).'<br>';
echo ucfirst($texto).'<br>';

echo '<h2>REEMPLAZAR</h2>';

$slug = str_replace(' ', '-', $texto);
echo strtolower($slug).'<br>'; 


echo '<h2>MODIFICAR</h2>';

$code = 39;
echo str_pad($code, 8, '#', STR_PAD_BOTH).'<br>';
$withTags = '<h1>PHP es un Lenguaje</h1>';
echo $withTags;
echo strip_tags($withTags).'<br>';
//Esta función es monobyte y no procesa bien el texto.
echo strtoupper($texto).'<br>'; 
//Esta función es multibyte y por eso procesa bien el texto
echo mb_strtoupper($texto).'<br>';
?>
