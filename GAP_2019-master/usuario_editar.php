<?php
include_once 'conexao.php';
$page = 'listar_usuario';
require('header.php');
$id = $_GET['id'];
?>
<!------------------- Title do formulário  --------------------------->
<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Editar Usuário</h2>
            </div>
            <div class="p2">
                <span class="d-none d-md-block">
                    <a href="javascript:history.go(-1)" class="btn btn-info btn-sm">Voltar</a>

                </span>
                <div class="dropdown d-block d-md-none">
                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                        <a class="dropdown-item" href="usuario_listar.php">Listar</a>
                        <a class="dropdown-item" href="usuario_visualizar.php">Visualizar</a>
                        <a class="dropdown-item" href="usuario_pagar.php" data-toggle="modal"
                            data-target="#apagarRegistro">Apagar</a>
                    </div>
                </div>

            </div>
            </a>
        </div>
        <!------------------- Formulario de edição  --------------------------->
        <hr>
        <div>
            <form action="usuario_update.php" method="POST">
                <?php
                    $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
                    $retorno = mysqli_query($conn, $sql);

                    while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)){
                        +
                        $Id_usuario = $array['id_usuario']; 
                        $nome  = $array['nome'];
                        $email = $array['email'];
                        $senha = MD5($array['senha']);
                        $endereco = $array['rua'];
                        $numero = $array['numero'];
                        $complemento = $array['complemento'];
                        $estado = $array['estado'];
                        $cidade = $array['cidade'];
                        $cep = $array['cep'];
                        $login = $array['user'];
                        $situacao = $array['situacao'];

                ?>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label> Código</label>
                        <input name="codigo" type="number" class="form-control" id="codigo" autocomplete="off" disabled value="<?= $Id_usuario ?>">
                        <input type="hidden" id="codigo" name="codigo" value="<?= $Id_usuario ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label><span class="text-danger">*</span> Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome Completo"
                            autocomplete="off" value="<?= $nome ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Seu e-mail"
                            autocomplete="off" value="<?= $email ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Endereço</label>
                        <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Rua João..."
                            autocomplete="off" value="<?= $endereco ?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Número</label>
                        <input name="numero" type="number" class="form-control" id="numero" placeholder="123"
                            autocomplete="off" value="<?= $numero ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Complemento</label>
                        <input name="complemento" type="text" class="form-control" id="complemento"
                            placeholder="Sala, Apartamento" autocomplete="off" value="<?= $complemento ?>">
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
                            autocomplete="off" value="<?= $cep ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label><span class="text-danger">*</span> Login</label>
                        <input name="login" type="text" class="form-control" id="login" placeholder="Insira um login"
                            autocomplete="off" value="<?= $login ?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label><span class="text-danger">*</span> Nivel de Acesso</label>
                        <select name="tipo_acesso" id="tipo_acesso" class="form-control">

                            <option value="1">1-Usuario</option>
                            <option value="2">2-Administrador</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label><span class="text-danger">*</span> Senha</label>
                        <input name="senha" type="password" class="form-control" id="senha"
                            placeholder="A senha com mínimo de 6 caracteres" autocomplete="off" value="<?= $senha ?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label><span class="text-danger">*</span> Repita a Senha</label>
                        <input name="conf_senha" type="password" class="form-control" id="conf_senha"
                            placeholder="Confirmar a senha" autocomplete="off" value="<?= $senha ?>">
                    </div>
                    <div class="form-check col-md-1 p-5">
                        <input class="form-check-input" name="situacao" type="radio" value="<?= $situacao ?>" id="situacao">
                        <label class="form-check-label">Ativo</label>
                    </div>
                    <div class="form-check col-md-1 p-5">
                        <input class="form-check-input" name="situacao" type="radio" value="<?= $situacao ?>" id="situacao">
                        <label class="form-check-label">Inativo</label>
                    </div>
                </div>
                <p>
                    <span class="text-danger">*</span> Campo Obrigatório
                </p>
                <button type="submit" class="btn btn-warning">Atualizar</button>

                <?php } ?>
            </form>
        </div>

        <!------------------- Modal para confirmar a exclusão de um registo--------------------------->
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