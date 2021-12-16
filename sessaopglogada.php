<?php
include_once("header.php");
include_once("conexaoUsuario.php");	
#arquivo para sessoes logadas que precisam da conexao e verificacao
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