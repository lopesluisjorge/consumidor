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
                    <a href="/alunos/cadastrar" class="btn btn-success btn-block">Cadastrar novo aluno</a>
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
                        <?php foreach ($dados as $linha) : ?>
                        <tr>
                            <td><?= $linha['codigoAluno'] ?></td>
                            <td><?= $linha['rg'] ?></td>
                            <td><?= $linha['cpf'] ?></td>
                            <td><?= $linha['nome'] ?></td>
                            <td><?= $linha['endereco'] ?></td>
                            <td><?= $linha['telefone'] ?></td>
                            <td><a href="/alunos/editar?id=<?= $linha['codigoAluno'] ?>" class="btn btn-info">Editar</a></td>
                            <td><a href="/alunos/excluir?id=<?= $linha['codigoAluno'] ?>" class="btn btn-danger">Excluir</a></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
</section>