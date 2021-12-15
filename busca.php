<?php
include_once("sessaopglogada.php");
include_once("conexaoUsuario.php");	
$usuario = mysqli_real_escape_string($conn,$_POST['usuario']);
$_SESSION['UsuarioGit'] = mysqli_real_escape_string($conn,$_POST['usuario']);

?>

<?php
if (!$usuario){
    echo "erro";
	$_SESSION['erroUsuario'] = "Usuário vazio, digite novamente";
    
			header("Location: administrativo.php");
}

$result_usuario = "SELECT * FROM usuariogit WHERE usuarioGit = '$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

        if(isset($resultado)){
            $usuarioGit =  $resultado['usuarioGit'];
            ?>
            <h2>Usuário encontrado: <?php echo $usuarioGit; ?></h2>


            <form method="POST" action="opcoes.php">
                <fieldset class="uk-fieldset"  >

                    <legend class="uk-legend">Escolha sua ação</legend>

                    <div class="uk-margin">
                        <select name="opcoesEncontrado" class="uk-select">
                            <option value="visualizar">Visualizar Dados:</option>
                            <option value="deletar">Deletar</option>
                        </select>
                    </div>


                    <button class="btn btn-lg btn-danger btn-block" type="submit">Enviar</button>


                </fieldset>
            </form>	

            

        <?php }

        else{

            $usuarioGit = $_POST['usuario'];
            $idSessao = $_SESSION['id'];
            mysqli_query($conn, "INSERT INTO usuariogit (idUsuario, usuarioGit) VALUES ('$idSessao', '$usuarioGit')");
           ?>
            <h2> Usuario <?php echo $usuario; ?> adicionado com sucesso! </h2>
            <?php
            }

?>







<?php
include_once("footerPgLogada.php");
?>
