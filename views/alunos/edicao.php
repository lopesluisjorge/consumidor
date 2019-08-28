<section id="subintro">

    <div class="container">
        <div class="row">
            <div class="span4">
                <h3>Editar <strong>aluno</strong></h3>
            </div>
            <div class="span8">
                <ul class="breadcrumb notop">
                    <li><a href="#">Home</a><span class="divider">/</span></li>
                    <li class="active">Editar</li>
                </ul>
            </div>
        </div>
    </div>

</section>
<section id="maincontent">
    <div class="container">
        <div class="row">
            <div class="span12">
                <section id="global">

                    <form action="/alunos/editar" method="POST">
                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input type="text" class="form-control" placeholder="Código do aluno" value="<?= $dados['codigoAluno'] ?>" disabled>
                            <input type="hidden" name="codigoAluno" value="<?= $dados['codigoAluno'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input name="nome" type="text" class="form-control" placeholder="Nome do aluno" value="<?= $dados['nome'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="rg">RG</label>
                            <input name="rg" type="text" class="form-control" placeholder="xxxxxxx-x" value="<?= $dados['rg'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input name="cpf" type="text" class="form-control" placeholder="xxx.xxx.xxx-xx" value="<?= $dados['cpf'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input name="endereco" type="text" class="form-control" placeholder="Rua x bairro y numero z" value="<?= $dados['endereco'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input name="telefone" type="text" class="form-control" placeholder="(98) 9xxxx-xxxx" value="<?= $dados['telefone'] ?>" required>
                        </div>

                        <button type="submit" class="btn">Salvar</button>
                    </form>
                </section>
            </div>
        </div>
    </div>
</section>