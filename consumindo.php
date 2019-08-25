<?php

$uri = 'x_listar';

$get_data = callAPI('GET',$uri , false);
$response = json_decode($get_data, true);
$data = $response;

echo '<pre>';
print_r ($data);
echo '</pre>';

//foreach($d as $data){
//   echo $d['nome'];
//}
?>
