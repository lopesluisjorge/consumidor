<?php  require_once 'rest-api.php' ?>
<?php

$service_url = 'x';


$data = array(
'id' =>$_POST['id'],
'codigo' => $_POST['codigo'],
'rg' => $_POST['rg'],
'cpf' => $_POST['cpf'],
'nome' => $_POST['nome'],
'endereco' => $_POST['endereco'],
'telefone' => $_POST['telefone'],
);

crudRest('PUT',$service_url,$data);

header('Location: lista_alunos.php');
die();
