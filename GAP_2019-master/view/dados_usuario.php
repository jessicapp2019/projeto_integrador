                <?php
                include_once 'conexao.php';
                $sql = "SELECT id_usuario, nome, email, data_cadastro FROM `usuario`";
                $retorno = mysqli_query($conn, $sql);

                while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
                    $id_usuario = $array['id_usuario'];
                    $nome = $array['nome'];
                    $email = $array['email'];
                    $data_cadastro = $array['data_cadastro'];                    
                    ?>
                <dl class="row">
                    <dt class="col-sm-3">ID</dt>
                    <dd class="col-sm-9"><?= $id_usuario ?></dd>

                    <dt class="col-sm-3">Nome</dt>
                    <dd class="col-sm-9"><?= $nome ?></dd>

                    <dt class="col-sm-3">E-mail</dt>
                    <dd class="col-sm-9"><?= $email ?></dd>

                    <dt class="col-sm-3 text-truncate">Data do Cadastro</dt>
                    <dd class="col-sm-9"><?= $data_cadastro ?> </dd>
                </dl>