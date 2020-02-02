<?php
include_once 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM usuario WHERE id_usuario = $id";
$update = mysqli_query($conn,$sql);

if($update){
    header("Location: usuario_listar.php?excluido=".$id); 
}
?>
