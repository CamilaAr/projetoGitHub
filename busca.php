<?php
include_once("sessaopglogada.php");

$usuario = mysqli_real_escape_string($conn,$_POST['usuario']);
$_SESSION['UsuarioGit'] = mysqli_real_escape_string($conn,$_POST['usuario']);

?>

<?php
if (!$usuario){
    echo "erro";
	$_SESSION['erroUsuario'] = "Usuário vazio, digite novamente";

			header("Location: administrativo.php");
}

$usuarioGit =  $_SESSION['UsuarioGit'];

$result_usuario = "SELECT * FROM usuariogit WHERE usuarioGit = '$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

        if(isset($resultado)){
            
            ?>
            <h2>Usuário encontrado: <?php echo $usuarioGit; ?></h2>

            <legend class="uk-legend">Deseja deletar o usuário?</legend>

            <a class="btn btn-lg btn-danger btn-block" type="submit" href="./opcoes.php">CONFIRMAR</a>

          

            

        <?php }

        else{

            ?>
            <h2>Usuário não encontrado: <?php echo $usuarioGit; ?></h2>

            <legend class="uk-legend">Deseja adicionar o usuário?</legend>

            <a class="btn btn-lg btn-danger btn-block" type="submit" href="./opcoes2.php">CONFIRMAR</a>

          

            

        <?php }

?>







<?php
include_once("footerPgLogada.php");
?>
