<?php require_once 'rest_api.php' ?>

<?php

$service_url = 'http://localhost:8080/trabalho-rest-sd-v1/academico/alunos/atualiza/' . $_POST['id'];

$data = array(
    'codigoAluno' => $_POST['codigoAluno'],
    'rg' => $_POST['rg'],
    'cpf' => $_POST['cpf'],
    'nome' => $_POST['nome'],
    'endereco' => $_POST['endereco'],
    'telefone' => $_POST['telefone'],
);

crudRest('PUT', $service_url, $data);

header('Location: lista_alunos.php');
die();
