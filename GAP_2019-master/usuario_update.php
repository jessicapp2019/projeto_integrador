<?php
include_once 'conexao.php';

$id             = $_POST["codigo"];
$nome           = $_POST["nome"]; 
$email          = $_POST["email"];
$tipo_acesso    = $_POST["tipo_acesso"];
$situacao       = $_POST["situacao"];    
$senha          = MD5($_POST["senha"]);
$endereco       = $_POST["endereco"];
$numero         = $_POST["numero"];
$complemento    = $_POST["complemento"];
$estado         = $_POST["estado"];
$cidade         = $_POST["cidade"];
$cep            = $_POST["cep"];
$login          = $_POST["login"];
 

$sql = "UPDATE usuario SET nome = '$nome', email = '$email', tipo_acesso = $tipo_acesso, situacao = '$situacao', senha = '$senha', rua = '$endereco', numero = $numero, complemento = '$complemento', estado = '$estado',cidade = '$cidade', cep = $cep, user = '$login'" .
       " WHERE id_usuario = $id";

       $update = mysqli_query($conn,$sql);
       echo $sql;
if($update)
    header("Location: usuario_listar.php?atualizado=".$id)

?>

