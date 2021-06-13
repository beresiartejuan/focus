<?php
// Definiendo constantes globales
define('NAMEAPP', 'Focus');
define('DBUSER', 'root');
define('DBPASSWORD', '');
define('DBDRIVER', 'mysql');
define('DBHOST', 'localhost');
define('DBNAME', 'focus');
define('DBCHARSET', 'utf8');
// Array devuelto con variables generales
return array(
    'media' => __DIR__ . '/media',
    'css' => __DIR__ . '/media/css',
    'js' => __DIR__ . '/media/js',
    'views' => __DIR__ . '/views',
    'Controllers' => __DIR__ . '/controllers',
    'Models' => __DIR__ . '/models',
    'charset' => 'utf8',
    'dns' => DBDRIVER . ':host=' . DBHOST . ';dbname=' . DBNAME . '; charset=' . DBCHARSET 
);