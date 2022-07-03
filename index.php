<?php

require './vendor/autoload.php';

$data = new DateClass();

$loader = new \Twig\Loader\FilesystemLoader('./views/');
$twig = new \Twig\Environment($loader, [
    'cache' => './views/cache/',
    'cache' => false
]);
$template = $twig->load('index.html');
echo $template->render(['title' => 'Home','data' => $data->whatdate()]);