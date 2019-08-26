<?php

use Alunos\App;
use Alunos\Router;

require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/alunos/listar', 'AlunoController@listar');
$router->get('/alunos/detalhes', 'AlunoController@detalhes');
$router->get('/alunos/cadastrar', 'AlunoController@formCadastrar');
$router->post('/alunos/cadastrar', 'AlunoController@cadastrar');
$router->get('/alunos/editar', 'AlunoController@formEditar');
$router->post('/alunos/editar', 'AlunoController@editar');
$router->get('/alunos/excluir', 'AlunoController@excluir');

$app = new App($router);

$app->run();
