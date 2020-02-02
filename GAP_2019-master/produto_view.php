<?php
                include_once 'conexao.php';
                $sql = "SELECT id_produto, dat_cadastro, nome, descricao, preco, tipo, categoria, situacao, uni_medida, cod_ean FROM `produto`";
                $retorno = mysqli_query($conn, $sql);

                while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
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
                <tr>
                    <th><?= $id_produto ?></th>
                    <td class="d-none d-sm-table-cell"><?= $dat_cadastro ?></td>
                    <td class="d-none d-lg-table-cell"><?= $nome ?></td>
                    <td class="d-none d-lg-table-cell"><?= $descricao ?></td>
                    <td class="d-none d-lg-table-cell"><?= $preco ?></td>
                    <td class="text-center">                                
                        <span class="d-none d-md-block">
                            <a href="produto_visualizar.php?id=<?=$id_produto?>" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                    data-target="#visualizarRegistro">Visualizar</a>

                            <a href="produto_editar.php?id=<?=$id_produto?>"
                                class="btn btn-outline-warning btn-sm">Editar</a>

                            <a href="produto_apagar.php?id=<?=$id_produto?>" 
                            class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target=" #apagarRegistro">Apagar</a>
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <a class="dropdown-item" href="visualizar.php?id=<?=$id_produto?>" data-toggle="modal"
                                    data-target="#visualizarRegistro">Visualizar</a>
                                <a class="dropdown-item" href="produto_editar.html">Editar</a>
                                <a class="dropdown-item" href="produto_apagar.html" data-toggle="modal"
                                    data-target="#apagarRegistro">Apagar</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php } ?>


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
                


            