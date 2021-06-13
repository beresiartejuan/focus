<?php

session_start();

require_once 'vendor/autoload.php';
require_once './helpers/import.helper.php';
require_once './controllers/router.controller.php';
// Llamo al archivo de configuración y guarda el array que devuelve
$_CONFIG = require_once 'config.php';
// Config Templates Engine
$loader = new \Twig\Loader\FilesystemLoader($_CONFIG['views']);
$tmp = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/cache/twig',
    'debug' => true
]);
// Config database
$db = new \FaaPz\PDO\Database($_CONFIG['dns'], DBUSER, DBPASSWORD);

import([
    'path' => 'helpers',
    'extension' => 'helper.php'
]);
import([
    'path' => 'models',
    'extension' => 'model.php',
    'first' => 'base',
]);
import([
    'path' => 'controllers',
    'extension' => 'controller.php',
    'first' => 'base'
]);

Router::run();