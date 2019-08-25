<?php

declare(strict_types=1);

namespace Alunos\Controller;

class AlunoController
{
    public function detalhes()
    { }

    public function listar()
    {
        $service_url = 'http://localhost:8080/trabalho-rest-sd-v1/academico/alunos/lista';

        $get_data = retornaGet($service_url);

        $response = json_decode($get_data, true);

        include_once __DIR__ . '/../../lista_alunos.php';
    }

    public function formCadastrar()
    {
        include_once __DIR__ . '/../../alunos.php';
    }

    public function cadastrar()
    {
        $service_url = 'http://localhost:8080/trabalho-rest-sd-v1/academico/alunos/cria';

        $data = array(
            'codigoAluno' => $_POST['codigoAluno'],
            'rg' => $_POST['rg'],
            'cpf' => $_POST['cpf'],
            'nome' => $_POST['nome'],
            'endereco' => $_POST['endereco'],
            'telefone' => $_POST['telefone'],
        );

        crudRest('POST', $service_url, $data);

        header('Location: /alunos/listar');
    }

    public function formEditar()
    {
        include_once __DIR__ . '/../../alunos.php';
    }

    public function editar()
    {
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

        header('Location: /alunos/listar');
    }

    public function excluir()
    {
        $id = $_GET['id'];
        $service_url = 'http://localhost:8080/trabalho-rest-sd-v1/academico/alunos/remove/' . $id;

        crudRest('DELETE', $service_url, false);

        header('Location: /alunos/listar');
    }
}
