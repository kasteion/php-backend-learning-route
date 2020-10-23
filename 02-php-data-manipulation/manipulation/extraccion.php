<?php

$data = 'Estudio PHP';
echo $data[0];
echo '<br>';
echo $data{0}.'<br>';

$post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcae';
$extract = substr($post, 0, 20);

echo "$extract... [ver más]<br>";

$langs = 'javascript, php, laravel';
$tags = explode(', ', $langs);
echo "<pre>";
var_dump($tags);
echo "</pre>";

$courses = ['javascript', 'php', 'laravel'];
echo implode(', ', $courses).'<br>';

$course = "   Curso de PHP    <br>";

echo '<pre>Quiero aprender '.$course.'</pre>';
echo '<pre>Quiero aprender '.trim($course).'y también otros cursos.</pre>';
echo '<pre>Quiero aprender '.ltrim($course).'y también otros cursos.</pre>';
echo '<pre>Quiero aprender '.rtrim($course).'y también otros cursos.</pre>';
?>
