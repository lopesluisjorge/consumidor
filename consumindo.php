<?php require_once 'rest_api.php' ?>

<?php

$uri = 'http://localhost:8080/trabalho-rest-sd-v1/academico/alunos/lista';

$get_data = callAPI('GET', $uri, false);
$response = json_decode($get_data, true);
$data = $response;

echo '<pre>';
print_r($data);
echo '</pre>';

//foreach($d as $data){
//   echo $d['nome'];
//}
