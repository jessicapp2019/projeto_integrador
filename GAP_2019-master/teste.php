<?php
include "header.php";
?>

<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Cadastrar Usuário</h2>
            </div>
        </div>
        <hr>
        <form action="usuario_include.php" method="GET">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> Nome</label>
                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome Completo" required>
                </div>
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> E-mail</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Seu e-mail" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> Senha</label>
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="A senha com mínimo de 6 caracteres" required minlength="6">
                </div>
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span> Confirmação de Senha</label>
                    <input name="conf_senha" type="password" class="form-control" id="conf_senha" placeholder="Confirmar a senha" required required minlength="6">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Endereço</label>
                    <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Rua João...">
                </div>
                <div class="form-group col-md-2">
                    <label>Número</label>
                    <input name="numero" type="text" class="form-control" id="numero" placeholder="123">
                </div>
                <div class="form-group col-md-4">
                    <label>Complemento</label>
                    <input name="complemento" type="text" class="form-control" id="complemento" placeholder="Sala, Apartamento">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Estado</label>
                    <select name="estado" id="estado" class="form-control">
                        <option selected>Selecione</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label>Cidade</label>
                    <select name="cidade" id="cidade" class="form-control">
                        <option selected>Selecione</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label>CEP</label>
                    <input name="cep" type="text" class="form-control" id="cep" placeholder="xx.xxxx-xxx">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label>Login</label>
                    <input name="login" type="text" class="form-control" id="login" placeholder="Insira um login" required>
                </div>
                <div class="form-group col-md-2">
                    <label>Nivel de Acesso</label>
                    <select name="nivel_acesso" id="nivel_acesso" class="form-control">
                        <option selected>"Selecione"</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select>
                </div>
                <div class="form-check col-md-1 p-5">
                    <input class="form-check-input" name="status" type="checkbox" value="ativo" id="status">
                    <label class="form-check-label" for="defaultCheck1">
                        Ativo
                    </label>
                </div>
                <p>
            </div>
            <span class="text-danger">*</span> Campo Obrigatório
            </p>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>
</div>
</div>
</div>
<!------------------- Modal para confirmar a exclusão de um registo--------------------------->
<div class="modal fade" id="apagarRegistro" tabindex="-1" role="dialog" aria-labelledby="apagarRegistro" aria-hidden="true">
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
include "footer.php";
?>