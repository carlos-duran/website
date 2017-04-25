<?php

require_once __DIR__.'/vendor/autoload.php';

use Siler\Dotenv;
use Siler\Twig;
use Siler\Route;
use RedBeanPHP\R;

Dotenv\init(__DIR__);

// Database connection
$db_host     = Dotenv\env('DB_HOST');
$db_database = Dotenv\env('DB_DATABASE');
$db_username = Dotenv\env('DB_USERNAME');
$db_password = Dotenv\env('DB_PASSWORD');
R::setup( 'mysql:host='.$db_host.';dbname='.$db_database, $db_username, $db_password);

// Template engine
Twig\init(__DIR__.'/app/views', __DIR__.'/temp/twig', Dotenv\env('APP_DEBUG'));

// Load routes
Route\files(__DIR__.'/app/controllers');
