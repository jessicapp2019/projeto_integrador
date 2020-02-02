<?php
include_once 'conexao.php';
$page = 'listar_produto';
require('header.php');
$id = $_GET['id'];
?>
<!-- Title do formulário  -->
<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Editar Produto</h2>
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
                        <a class="dropdown-item" href="produto_listar.php">Listar</a>
                        <a class="dropdown-item" href="produto_visualizar.php">Visualizar</a>
                        <a class="dropdown-item" href="produto_apagar.php" data-toggle="modal"
                            data-target="#apagarRegistro">Apagar</a>
                    </div>
                </div>

            </div>
            </a>
        </div>
        <!-- Formulario de edição  -->
        <hr>
        <div>
            <form action="produto_update.php" method="POST">
                <?php
                    $sql = "SELECT * FROM produto WHERE id_produto = $id";
                    $retorno = mysqli_query($conn, $sql);

                    while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)){
                        +
                    $id_produto = $array['id_produto'];
                    $dat_cadastro = $array['dat_cadastro'];
                    $nome = $array['nome'];
                    $descricao = $array['descricao'];
                    $preco = $array['preco'];
                    $tipo = $array['tipo'];
                    $categoria = $array['categoria'];
                    $situacao = $array['situacao'];
                    $uni_medida = $array['uni_medida'];
                    $cod_ean = $array['cod_ean'];

                ?>
                
                <div class="form-row">
                       
                         <div class="form-group col-md-4">
                            <label>
                                <span class="text-danger">*</span> ID</label>
                            <input name="id" type="text" class="form-control" id="id" placeholder="" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>
                                <span class="text-danger">*</span> Data de Cadastro</label>
                            <input name="dat_cadastro" type="text" class="form-control" id="dat_cadastro" placeholder="" required>
                        </div>

                            <div class="form-group col-md-4">
                                <label>
                                    <span class="text-danger">*</span>Nome</label>
                                <input name="nome" type="text" class="form-control" id="nome" placeholder="" required>
                            </div>
                            </div>

                    <div class="form-row">                            
                            <div class="form-group col-md-4">
                            <label>
                                    <span class="text-danger">*</span>Descrição</label>
                                <input name="descricao" type="text" class="form-control" id="descricao" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4">
                            <label>
                                    <span class="text-danger">*</span>Preço</label>
                                <input name="preco" type="text" class="form-control" id="preco" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4">
                            <label>
                                    <span class="text-danger">*</span>Tipo</label>
                                <input name="tipo" type="text" class="form-control" id="tipo" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Categoria</label>
                                <select name="categoria" id="categoria" class="form-control">
                                    <option selected>Selecione</option>
                                    <option value="1">Categoria 1</option>
                                    <option value="2">Categoria 2</option>
                                    <option value="2">Categoria 3</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Situação</label>
                                <select name="sistuacao" id="situacao" class="form-control">
                                    <option selected>Selecione</option>
                                    <option value="1">ativo </option>
                                    <option value="2">inativo</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-row">                            
                            <div class="form-group col-md-6">
                            <label>
                                    <span class="text-danger">*</span>Unidade de Medida</label>
                                <input name="uni_medida" type="text" class="form-control" id="uni_medida" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                            <label>
                                    <span class="text-danger">*</span>Código EAN</label>
                                <input name="cod_ean" type="text" class="form-control" id="cod_eanS" placeholder="" required>
                            </div>                    
                        </div>
                <p>
                    <span class="text-danger">*</span> Campo Obrigatório
                </p>
                <button type="submit" class="btn btn-warning">Atualizar</button>

                <?php } ?>
            </form>
        </div>

        <!-Modal para confirmar a exclusão de um registo-->
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