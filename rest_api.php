<?php

function crudRest($metodo, $service_url, $data)
{
    switch ($metodo) {
        case 'POST':
            $ch = curl_init($service_url);
            $payload = json_encode($data);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_HEADER, true);
            $result = curl_exec($ch);

            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            break;
        case 'PUT':
            $ch = curl_init($service_url);
            $payload = json_encode($data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, true);
            $result = curl_exec($ch);
            $httpcode2 = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            break;

        case 'DELETE':

            $ch = curl_init($service_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            $response = curl_exec($ch);
            curl_close($ch);
            break;
    }
}

function retornaGet($url)
{
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    if (!$result) {
        die("Connection Failure");
    }
    curl_close($curl);

    return $result;
}
