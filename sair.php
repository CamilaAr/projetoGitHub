<?php
	session_start();
	
	unset(
		$_SESSION['login'],
		$_SESSION['senha'],
		$_SESSION['UsuarioGit']
	);
	
	$_SESSION['deslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
	header("Location: index.php");
?>