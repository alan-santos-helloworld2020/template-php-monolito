<?php

session_start();
include './auth/auth.php';

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./views/');
$twig = new \Twig\Environment($loader, [
    'cache' => './views/cache/',
    'cache' => false
        ]);
$template = $twig->load('admin.html');

$dados= file_get_contents("http://localhost:3000/");

echo $template->render([
            "title" => "Admin",
            "username"=>$_SESSION['username'],
            "dados"=> json_decode($dados)
        ]);


