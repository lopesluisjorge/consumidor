<?php require_once 'cabecalho.php' ?>

<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Subhead
================================================== -->
    <section id="subintro">

        <div class="container">
            <div class="row">
                <div class="span4">
                    <h3>Lista <strong>de alunos</strong></h3>
                </div>
                <div class="span8">
                    <ul class="breadcrumb notop">
                        <li><a href="#">Home</a><span class="divider">/</span></li>
                        <li class="active">Cadastrar</li>
                    </ul>
                </div>
            </div>

    </section>
    <section id="maincontent">
        <div class="container">
            <div class="span12">
                <div class="row">
                    <div class="col-md-4">
                        <a href="cadastrar.php" class="btn btn-success btn-block">Cadastrar novo aluno</a>
                    </div>
                    <hr>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código</th>
                                <th>RG</th>
                                <th>CPF</th>
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>Telefone</th>
                                <th class="acao">Editar</th>
                                <th class="acao">Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($response as $linha) : ?>
                            <tr>
                                <td><?= $linha['codigoAluno'] ?></td>
                                <td><?= $linha['rg'] ?></td>
                                <td><?= $linha['cpf'] ?></td>
                                <td><?= $linha['nome'] ?></td>
                                <td><?= $linha['endereco'] ?></td>
                                <td><?= $linha['telefone'] ?></td>
                                <td><a href="editar.php?id=<?= $linha['id'] ?>&codigo=<?= $linha['codigo'] ?>&rg=<?= $linha['rg'] ?>&cpf=<?= $linha['cpf'] ?>&nome=<?= $linha['nome'] ?>&endereco=<?= $linha['endereco'] ?>&etelefone=<?= $linha['telefone'] ?>" class="btn btn-info">Editar</a></td>
                                <td><a href="excluir.php?id=<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>