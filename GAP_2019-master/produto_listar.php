<?php
$page = 'listar_produto';
require('header.php');
?>

 <!-- Listar produtos -->
        <div class="content p-1">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <h2 class="display-4 titulo">Listar Produto</h2>
                    </div>
                </div>
               <!-- <div class="alert alert-success" role="alert">
                    Produto apagado com Sucesso!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>-->
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered ">
                        <thead>
                            <tr>
                            <th>ID</th>
                                <th>Data do Produto</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th class="text-center">Ações</th>
                                
                               
                            </tr>
                        </thead>    
                        <tbody>

                            <?php
                                include_once 'produto_view.php';?>                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal param exibição de um registo-->
    <div class="modal fade" id="visualizarRegistro" tabindex="-1" role="dialog" aria-labelledby="visualizarRegistro"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Dados do Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php
                        include_once 'conexao.php';
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM `produto` WHERE id_produto = $id";
                        $retorno = mysqli_query($conn, $sql);

                        while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
                            $id_produto = $array['id_produto'];
                            $dat_cadastro = $array['dat_cadastro'];
                            $nome = $array['nome'];
                            $descricao = $array['descricao'];
                            $preco = $array['preco'];
                                                
                    ?>
                    <tr>
                    <th>ID</th>
                                <th>Data do Produto</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th class="text-center">Ações</th>
                            <span class="d-none d-md-block">
                                <a href="produto_visualizar.php?id=<?=$id_produto?>"
                                    class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                    data-target="#visualizarRegistro">Visualizar</a>

                                <a href="produto_editar.php?id=<?=$id_produto?>"
                                    class="btn btn-outline-warning btn-sm">Editar</a>

                                <a href="produto_apagar.php?id=<?=$id_produto?>" class="btn btn-outline-danger btn-sm"
                                    data-toggle="modal" data-target=" #apagarRegistro">Apagar</a>
                            </span> 
                            <div class="dropdown d-block d-md-none">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ações
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                    <a class="dropdown-item" href="visualizar.php?id=<?=$id_produto?>"
                                        data-toggle="modal" data-target="#visualizarRegistro">Visualizar</a>
                                    <a class="dropdown-item" href="produto_editar.php?id=<?=$id_produto?>">Editar</a>
                                    <a class="dropdown-item" href="produto_apagar.php" data-toggle="modal"
                                        data-target="#apagarRegistro">Apagar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
            <?php
        if (isset($_GET['atualizado'])) {
            echo '<div id="alerta" class="alert alert-success" role="alert">
            Produto <b>' . $_GET['atualizado'] . '</b> atualizado com sucesso!.
             </div>';
        }
        if (isset($_GET['excluido'])) {
            echo '<div id="alerta" class="alert alert-danger" role="alert">
            Produto <b>' . $_GET['excluido'] . '</b> excluido com sucesso!.
            </div>';
        }
        if (isset($_GET['cadastrado'])) {
            echo '<div id="alerta" class="alert alert-success" role="alert">
            Produto cadastrado com sucesso!.
            </div>';
            
        }
     ?>
        </div>
    </div>
</div>
                           
               

    <!-- Modal para confirmar a exclusão de um registro-->
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
                <button type="button" class="btn btn-success" data-dismiss="modal">Não</button>
                <a href="produto_apagar.php?id=<?=$id_produto?>"><button type="button"  class="btn btn-danger">Sim</button></a>
            </div>
        </div>
    </div>
</div>
    <?php
    require('footer.php');
?>