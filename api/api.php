<?php
header("Content-Type:application/json;charset=utf8");

require '../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();


echo json_encode(["hello"=>"hello"], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);


