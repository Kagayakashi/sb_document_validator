<?php

require_once '../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

session_start();

$router = new \Validator\Router;
