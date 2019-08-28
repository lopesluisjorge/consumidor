<?php

declare(strict_types=1);

namespace Alunos\Controller;

class AlunoController
{
    public function listar()
    {
        $service_url = 'http://localhost:8080/trabalho-rest-sd-v1/academico/alunos/lista';

        $get_data = retornaGet($service_url);

        $response = json_decode($get_data, true);

        view('alunos/lista_alunos', $response);
    }

    public function formCadastrar()
    {
        view('alunos/cadastro', null);
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
        $id = $_GET['id'];

        $service_url = 'http://localhost:8080/trabalho-rest-sd-v1/academico/alunos/recupera/' . $id;
        $get_data = retornaGet($service_url);
        $response = json_decode($get_data, true);
        $data = $response;


        view('alunos/edicao', $data);
    }

    public function editar()
    {
        $service_url = 'http://localhost:8080/trabalho-rest-sd-v1/academico/alunos/atualiza/' . $_POST['codigoAluno'];

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
