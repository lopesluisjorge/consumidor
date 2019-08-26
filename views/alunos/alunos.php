<section id="subintro">

    <div class="container">
        <div class="row">
            <div class="span4">
                <h3>Cadastrar <strong>aluno</strong></h3>
            </div>
            <div class="span8">
                <ul class="breadcrumb notop">
                    <li><a href="#">Home</a><span class="divider">/</span></li>
                    <li class="active">Cadastrar</li>
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

                    <form action="cadastrar.php" method="post">
                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input name="codigo" type="text" class="form-control" placeholder="Código do aluno" required>
                        </div>
                        <div class="form-group">
                            <label for="rg">RG</label>
                            <input name="rg" type="text" class="form-control" placeholder="xxxxxxx-x" required>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input name="cpf" type="text" class="form-control" placeholder="xxx.xxx.xxx-xx" required>
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input name="nome" type="text" class="form-control" placeholder="Nome do aluno">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereco</label>
                            <input name="endereco" type="text" class="form-control" placeholder="Rua x bairro y numero z">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input name="telefone" type="text" class="form-control" placeholder="(98) 9xxxx-xxxx">
                        </div>
                        <button type="submit" class="btn">Salvar</button>
            </div>
        </div>
        </form>
</section>