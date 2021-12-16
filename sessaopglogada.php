<?php
include_once("header.php");
include_once("conexaoUsuario.php");	
?>
<body>
<?php
	session_start();
	if (isset($_SESSION['login'])){
		?> <div class="uk-container"> <?php
	echo "Usuário logado: ". $_SESSION['login'];
	}	else {
		$_SESSION['loginErro'] = "Logue para acessar";
			header("Location: index.php");
	}

 
    
?>