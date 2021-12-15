<?php
include_once("sessaopglogada.php");
?>
<br>

<form method="POST" action="busca.php">
    <fieldset class="uk-fieldset"  >

        <legend class="uk-legend">Busca de Usuário</legend>

		<div class="uk-margin">
            <input class="uk-input" type="text" name="usuario" placeholder="Escreva o nome do usuário desejado:">
        </div>

		<button class="btn btn-lg btn-danger btn-block" type="submit">Buscar</button>


	</fieldset>
</form>	

<p class="text-center text-danger">
			<?php if(isset($_SESSION['erroUsuario'])){
				echo $_SESSION['erroUsuario'];
				unset($_SESSION['erroUsuario']);
			}?>
		</p>

<?php
include_once("footerPgLogada.php");
?>