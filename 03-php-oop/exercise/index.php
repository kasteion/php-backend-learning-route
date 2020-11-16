<?php

namespace App;

require __DIR__.'/vendor/autoload.php';

$autor = new Author('Fredy', 'fredy@email.com');
echo '<pre>';
var_dump($autor);
echo '<br>';

$categoria = new Category('Vue.js');
var_dump($categoria);
echo '<br>';

$post = new Post($autor, $categoria);
var_dump($post);

?>
