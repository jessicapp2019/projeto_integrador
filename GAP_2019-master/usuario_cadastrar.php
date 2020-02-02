<?php
$page = 'novo_usuario';
require('header.php');
?>
<script type="text/javascript">
function validar() {
    var senha = formuser.senha.value;
    var conf_senha = formuser.conf_senha.value;

    if (senha == "" || senha.length <= 5) {
        alert('Preencha o campo senha com minimo 6 caracteres');
        formuser.senha.focus();
        return false;
    }

    if (conf_senha == "" || conf_senha.length <= 5) {
        alert('Preencha o campo senha com minimo 6 caracteres');
        formuser.conf_senha.focus();
        return false;
    }

    if (senha != conf_senha) {
        alert('Senhas diferentes');
        formuser.senha.focus();
        return false;
    }
}
</script>
<!-- Formulario de cadastro  -->
<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Cadastrar Usuário</h2>
            </div>
        </div>
        <hr>
        <form name="formuser" action="usuario_include.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label> Código</label>
                    <input name="codigo" type="text" class="form-control" id="codigo" autocomplete="off" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label><span class="text-danger">*</span> Nome</label>
                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome Completo"
                        autocomplete="off" required>
                </div>
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> E-mail</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Seu e-mail"
                        autocomplete="off" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Endereço</label>
                    <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Nome da rua"
                        autocomplete="off" value="">
                </div>
                <div class="form-group col-md-2">
                    <label>Número</label>
                    <input name="numero" type="number" class="form-control" id="numero" placeholder="123"
                        autocomplete="off" value="">
                </div>
                <div class="form-group col-md-4">
                    <label>Complemento</label>
                    <input name="complemento" type="text" class="form-control" id="complemento"
                        placeholder="Sala, Apartamento" autocomplete="off" value="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Estado</label>
                    <select name="estado" id="estado" class="form-control">
                        <option select>*Selecione*</option>
                        <option>Rio de Janeiro</option>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label>Cidade</label>
                    <select name="cidade" id="cidade" class="form-control">
                        <option selected>*Selecione*</option>
                        <option>Belford Roxo</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label>CEP</label>
                    <input name="cep" type="text" class="form-control" id="cep" placeholder="xx.xxxx-xxx"
                        autocomplete="off" value="s">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label><span class="text-danger">*</span> Login</label>
                    <input name="login" type="text" class="form-control" id="login" placeholder="Insira um login"
                        autocomplete="off" value="" required>
                </div>
                <div class="form-group col-md-2">
                    <label><span class="text-danger">*</span> Nivel de Acesso</label>
                    <select name="tipo_acesso" id="tipo_acesso" class="form-control" required>
                        <option value="1">1-Usuario</option>
                        <option value="2">2-Administrador</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label><span class="text-danger">*</span> Senha</label>
                    <input name="senha" type="password" class="form-control" id="senha"
                        placeholder="A senha com mínimo de 6 caracteres" autocomplete="off" value="" required>
                </div>
                <div class="form-group col-md-2">
                    <label><span class="text-danger">*</span> Repita a Senha</label>
                    <input name="conf_senha" type="password" class="form-control" id="conf_senha"
                        placeholder="Confirmar a senha" autocomplete="off" value="" required>
                </div>
                <div class="form-check col-md-1 p-5">
                    <input class="form-check-input" name="situacao" type="radio" value="ativo" id="situacao" checked>
                    <label class="form-check-label">Ativo</label>
                </div>
                <div class="form-check col-md-1 p-5">
                    <input class="form-check-input" name="situacao" type="radio" value="ativo" id="situacao">
                    <label class="form-check-label">Inativo</label>
                </div>
            </div>
            <p>
                <span class="text-danger">*</span> Campo Obrigatório
            </p>
            <button type="submit" class="btn btn-primary" onclick="return validar()">Cadastrar</button>

        </form>
    </div>

</div>
</div>
</div>
<!-- Modal para confirmar a exclusão de um registo-->

</div>

<!-- Modal para confirmar a exclusão de um registo-->

<div class="modal fade" id="apagarRegistro" tabindex="-1" role="dialog" aria-labelledby="apagarRegistro"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Excluir item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluiir o item selecionado?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Apagar</button>
            </div>
        </div>
    </div>
</div>
<?php
    require('footer.php');
?>