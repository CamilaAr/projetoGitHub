<?php
include_once("sessaopglogada.php");
?>

<?php
$usuario = mysqli_real_escape_string($conn,$_POST['info']);
if (!$usuario){
    echo "erro";
	$_SESSION['erroBusca'] = "Usuário vazio, selecione corretamente";
    
			header("Location: administrativo.php");
}

?>
<br>
<legend class="uk-legend">Detalhes do Usuário: <?php echo $usuario; ?></legend>
<?php
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/users/". $usuario,
    CURLOPT_HTTPHEADER => [
        "Accept: application/vnd.github.v3+json",
        "Content-Type: text/plain",
        "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 YaBrowser/16.3.0.7146 Yowser/2.5 Safari/537.36"
    ],
    CURLOPT_RETURNTRANSFER => true,
   
]);
$response = curl_exec($ch);

$decoded = json_decode($response, true);


foreach ($decoded as $index => $value){
     
    echo "<br>$index: $value <br>";
   
  
    
}


//var_dump($decoded);


//echo $decoded['login'];


curl_close($ch);

//print($response);

?>


<?php
include_once("footerPgLogada.php");
?>