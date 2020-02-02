  
    <?php
    session_start();
    include_once 'conexao.php';
    if ($_SESSION["usuario"] == "" || $_SESSION["usuario"] == null) {
        header("Location: index.php");
    }
    $usuarioLogado = $_SESSION["usuario"];
    $sql = "SELECT tipo_acesso FROM usuario WHERE id_usuario = $usuarioLogado  AND situacao = 'ativo'";
    $retorno = mysqli_query($conn, $sql);
    $array = mysqli_fetch_array($retorno);
    $nivel = $array['tipo_acesso'];
    $user = "SELECT nome FROM usuario WHERE id_usuario = $usuarioLogado  AND situacao = 'ativo'";
    ?> 