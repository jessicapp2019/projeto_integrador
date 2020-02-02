<?php
include_once("conexao.php");

    $id_produto    = $_GET["id_produto"];
    $dt_cadastro   = $_GET["dat_cadastro"]; 
    $nome          = $_GET["nome"];
    $descricao     = $_GET["descricao"];
    $preco         = $_GET["preco"];
    $tipo          = $_GET["tipo"];
    $categoria     =$_GET["categoria"];
    $situcao       =$_GET["situacao"];
    $unid_medida   = $_GET["unid_medida"];
    $cod_ean       = $_GET["cod_ean"];

     

    $consulta = mysqli_query($conn,"select user from produto where id_produto = '$id_produto'");
    $linha = mysqli_num_rows($consulta);
    
	if($linha != 0) {        
        echo $linha;
        echo "<script type=\"text/javascript\">alert('Produto ja cadastrado!!');</script>";
        echo "<script type=\"text/javascript\">window.location='produto_cadastrar.php';</script>";
    }
    
    else{
    $result_produto = "INSERT INTO `produto` (`id_produto`, 'dt_registro','dt_modificacao', 'nome',`descricao`,`preco`,`tipo,`categoria`,`situacao`,`uni_medida`,`cod_ean`)
        VALUES (NULL,CURRENT_TIMESTAMP,NULL,'$id_produto' ,'NULL','$dat_cadstro','$nome','$descricao','$preco','$tipo','$categoria','$situacao','$uni_medida''$cod_ean')";
    $resultado_produto = mysqli_query($conn, $result_produto);
    }
    echo "<script type=\"text/javascript\">alert('Produto cadastrado com Sucesso!!');</script>";
    echo "<script type=\"text/javascript\">window.location='produto_cadastrar.php';</script>"


?>