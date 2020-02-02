<?php
require('header.php');
$page = 'home';
?>
<!-- Pagina Home  -->
<?php
    include_once 'conexao.php';
    $sql = mysqli_query($conn, "SELECT COUNT(*) AS gap FROM usuario");
    $row= mysqli_fetch_array($sql);
    $saldo=$row['0'];
    include_once 'conexao.php';
    $sql = mysqli_query($conn, "SELECT COUNT(*) AS gap FROM produto");
    $row= mysqli_fetch_array($sql);
    $saldo=$row['0'];
      
                            
?>
<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Dashboard</h2>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3 col-sm-6">
                <a href="./usuario_listar.php" style="text-decoration:none">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x"></i>
                            <h6 class="card-title">Usuários</h6>
                            <h2 class="lead"><?php echo  $saldo ?></h2>
                        </div>
                    </div>
                    </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="./produto_listar.php" style="text-decoration:none">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <i class="fas fa-list-ul fa-3x"></i>
                            <h6 class="card-title ">Produtos</h6>
                            <h2 class="lead"><?php echo  $saldo ?></h2>
                        </div>
                    </div>
                    </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <i class="fas fa-truck fa-3x"></i>
                        <h6 class="card-title">Fornecedores</h6>
                        <h2 class="lead">648</h2>
                    </div>
                    </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <i class="fas fa-shopping-bag fa-3x"></i>
                        <h6 class="card-title">Clientes</h6>
                        <h2 class="lead">17</h2>
                    </div>
                </div>
            </div>
        </div>   
        </div>
    </div>
</div>
 
 
<?php
    require('footer.php');
?>