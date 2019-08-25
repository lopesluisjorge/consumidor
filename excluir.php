<?php require_once 'rest_api.php'?>

<?php
$id = $_GET['id'];
$service_url = 'x'.$id;

crudRest('DELETE',$service_url,false);

header('Location: lista_alunos.php');
die();