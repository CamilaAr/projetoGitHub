<?php

include_once("sessaopglogada.php");
include_once("conexaoUsuario.php");	
$usuario = $_SESSION['UsuarioGit'];

   /* if($_POST['opcoesEncontrado'] == "visualizar"){ 
    $result_usuario = "SELECT * FROM usuariogit WHERE usuarioGit = '$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
        $id = $resultado['id'];
        ?>
        <h2> Dados do Usuario: </h2>
        <div>Identificador: <?php echo $id; ?> </div>
        <div>Usuário GitHub: <?php echo $usuario; ?> </div>

   <?php } */
    if (isset($_SESSION['UsuarioGit'])) 
    {
        $usuarioGit = $_SESSION['UsuarioGit'];
        $idSessao = $_SESSION['id'];
        mysqli_query($conn, "INSERT INTO usuariogit (idUsuario, usuarioGit) VALUES ('$idSessao', '$usuarioGit')");
       ?>
        <h2> Usuario <?php echo $usuario; ?> adicionado com sucesso! </h2>
        

   <?php }
    else {
       
        header("Location: busca.php");
    }



    ?>
    


    <?php
include_once("footerPgLogada.php");
?>