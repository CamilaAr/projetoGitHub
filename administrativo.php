<?php
include_once("sessaopglogada.php");
?>
<br>

<div class="uk-child-width-1-3 " uk-grid>

	<div>
		<form method="POST" action="busca.php">
			<fieldset class="uk-fieldset"  >

				<legend class="uk-legend">Busca de Usuário</legend>
				
				<div class="uk-margin">
					<input class="uk-input" type="text" name="usuario" placeholder="Escreva o nome do usuário desejado:">
				</div>

				<button class="btn btn-lg btn-danger btn-block" type="submit">Buscar</button>


			</fieldset>
		</form>	
		<p>Caso o usuário seja encontrado terá a opção de deletá-lo<br>
				Caso o usuário não seja encontrado terá a opção de adiciona-lo </p>

		<p class="text-center text-danger">
					<?php if(isset($_SESSION['erroUsuario'])){
						echo $_SESSION['erroUsuario'];
						unset($_SESSION['erroUsuario']);
					}?>
		</p>
	</div>
		
	<div>
		<legend class="uk-legend">Lista de Usuários salvos</legend>
		<?php
		#pesquisa e listagem dos usuarios git que tem como chave estrangeira a chave do usuario ativo
		$idUsuario = $_SESSION['id'];
		$result_usuario = "SELECT * FROM usuariogit WHERE idUsuario = '$idUsuario'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		
		$resultado = mysqli_fetch_all($resultado_usuario, MYSQLI_ASSOC);

		

		//while($resultado = mysql_fetch_assoc($resultado_usuario)){
		//	$vetorResultado[] = $resultado;
	   //}

		foreach ($resultado as $value){ ?>
		<p> Usuário GitHub: <?php	echo $value['usuarioGit']; ?> </p>
		<p> Id do Usuário GitHub: <?php echo $value['id']; ?> </p>
		<p> Id do Usuário: <?php echo $value['idUsuario']; ?> </p>	
		<?php
		}
		?>

	
	</div>
	<div>
	<form method="POST" action="mostrardados.php">
			<fieldset class="uk-fieldset"  >

				<legend class="uk-legend">Detalhes do Usuário</legend>

				<div class="uk-margin">
                        <select name="info" class="uk-select">
							<?php
							#pesquisa e envio do usuário desejado para mostrar os dados
							$result_usuario = "SELECT * FROM usuariogit WHERE idUsuario = '$idUsuario'";
							$resultado_usuario = mysqli_query($conn, $result_usuario);
							$resultado = mysqli_fetch_all($resultado_usuario, MYSQLI_ASSOC);
							foreach ($resultado as $value){ ?>
                            <option value="<?php echo $value['usuarioGit']; ?>"><?php echo $value['usuarioGit']; ?></option>
                           <?php } ?>
                        </select>
                    </div>

				<button class="btn btn-lg btn-danger btn-block" type="submit">Buscar</button>


			</fieldset>
		</form>
		<p class="text-center text-danger">
			<!--mensagem de erro caso acesse a pagina incorretamente -->
					<?php if(isset($_SESSION['erroBusca'])){
						echo $_SESSION['erroBusca'];
						unset($_SESSION['erroBusca']);
					}?>
		</p>
	</div>

</div>
<?php
include_once("footerPgLogada.php");
?>