<?php

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./views/');
$twig = new \Twig\Environment($loader, [
    'cache' => './views/cache/',
    'cache' => false
]);
$template = $twig->load('form-login.html');
echo $template->render(['title' => 'Form-Login']);

