<?php

require_once __DIR__.'/vendor/autoload.php';

use RedBeanPHP\R;
use Siler\{Twig, Route, Http\Response};
use Siler\Dotenv;

Dotenv\init(__DIR__);

$db_host = Dotenv\env('DB_HOST');
$db_database = Dotenv\env('DB_DATABASE');
$db_username = Dotenv\env('DB_USERNAME');
$db_password = Dotenv\env('DB_PASSWORD');

R::setup( 'mysql:host='.$db_host.';dbname='.$db_database, $db_username, $db_password);
Twig\init(__DIR__.'/app/views', __DIR__.'/temp/twig', Dotenv\env('APP_DEBUG'));
Route\files(__DIR__.'/app/controllers');
