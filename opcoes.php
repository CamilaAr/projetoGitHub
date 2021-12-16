<?php

#codigo que recebe o nome do usuario digitado e deleta
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
        mysqli_query($conn, "DELETE FROM usuariogit WHERE usuarioGit = '$usuario'"); 
        ?>
        <h2> Usuario <?php echo $usuario; ?> deletado com sucesso! </h2>
        

   <?php }
    else {
       
        header("Location: busca.php");
    }



    ?>
    


    <?php
include_once("footerPgLogada.php");
?>

