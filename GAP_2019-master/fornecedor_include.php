<?php
include_once("conexao.php");

    $idFornecedor       = $_GET["IdFornecedor"]; 
    $nome               = $_GET["nome"];
    $cnpj               =$_GET["CnpjFornecedor"];
    
     

    $consulta = mysqli_query($conn,"select user from fornecedor where id_fornecedor = '$idFornecedor'");
    $linha = mysqli_num_rows($consulta);
    
	if($linha != 0) {        
        echo $linha;
        echo "<script type=\"text/javascript\">alert('Fornecedor ja cadastrado!!');</script>";
        //echo "<script type=\"text/javascript\">window.location='fornecedor_cadatrar.php';</script>";
    }
    
    else{
    $result_fornecedor = "INSERT INTO `fornecedor` (`id_fornecedor`,'nome',`CnpjFornecedor`)
        VALUES (NULL,CURRENT_TIMESTAMP,'$idFornecedor','$nome','$cnpj')";
    $resultado_fornecedor = mysqli_query($conn, $result_fornecedor);
    }
    echo "<script type=\"text/javascript\">alert('fornecedor cadastrado com Sucesso!!');</script>";
    echo "<script type=\"text/javascript\">window.location='fornecedor_cadatrar.php';</script>"


?>