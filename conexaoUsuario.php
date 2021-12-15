<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "root";
	$dbname = "projetogit";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	

	/* 
	codigo para teste
	$login = $_POST['email'];
	$senha = $_POST['senha'];

	$result_usuario = "SELECT * FROM usuario WHERE login = '$login' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

		if(isset($resultado)){
			$resultado['senha'] = 'camilasenha';
			$resultado['login'] = 'camila';

			echo "deu certo";
		}
		else{
			echo "deu errado";
		}
		*/
	
?>