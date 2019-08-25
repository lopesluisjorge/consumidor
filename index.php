<?php

use Alunos\App;
use Alunos\Router;

require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();

$router->get('/', 'HomeController@index');

$app = new App($router);

$app->run();
