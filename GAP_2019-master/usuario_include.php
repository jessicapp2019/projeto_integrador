<?php
include_once("conexao.php");

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
     

    $consulta = mysqli_query($conn,"select user from usuario where user = '$login'");
    $linha = mysqli_num_rows($consulta);
    
	if($linha != 0) {                
        echo "<script type=\"text/javascript\">alert('Usuário ja cadastrado!!');</script>";
        echo "<script type=\"text/javascript\">window.location='usuario_cadastrar.php';</script>";
       
    }
    
    else{
    $result_usuario = "INSERT INTO usuario (nome,email,tipo_acesso,situacao,rua,numero,complemento,estado,cidade,cep,senha,user)
        VALUES ('$nome','$email','$tipo_acesso ','$situacao','$endereco','$numero','$complemento','$estado','$cidade','$cep','$senha','$login')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    }
    echo "<script type=\"text/javascript\">alert('Usuário cadastrado com Sucesso!!');s</script>";    
    echo "<script type=\"text/javascript\">window.location='usuario_cadastrar.php';</script>"


?>
