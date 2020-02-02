<?php
include_once 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM produto WHERE id_produto = $id";
$update = mysqli_query($conexao,$sql);

if($update){
    header("Location: produto_listar.php?excluido=".$id); 
}
?>