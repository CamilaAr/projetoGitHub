<?PHP


#esse arquivo é apenas para fins de conferencia e cola

/*base do curl
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.amazon.com');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($curl);
*/

/* decode curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$response = curl_exec($ch);

if(curl_errno($ch)) echo curl_errno($ch);
else $decoded = json_decode($response, true);
var_dump($decoded);
curl_close($ch);
*/

/*
$ch = curl_init();

$array =[
    'name' => 'maria',
    'job' => 'programadora'
];

$data = http_build_query($array);

curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users');
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$response = curl_exec($ch);

if(curl_errno($ch)) echo curl_errno($ch);
else $decoded = json_decode($response, true);

foreach ($decoded as $index => $value){
    echo "$index: $value <br>";
}


curl_close($ch);
*/


/*

$url = "https://reqres.in/api/users";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

$resultado = json_decode (curl_exec($ch));

//var_dump($resultado);

foreach($resultado->data as $pessoa){
    //var_dump($pessoa);
    echo " Nome: $pessoa->first_name <br>";
}

*/


$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/users/". "CamilaAr",
    CURLOPT_HTTPHEADER => [
        "Accept: application/vnd.github.v3+json",
        "Content-Type: text/plain",
        "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 YaBrowser/16.3.0.7146 Yowser/2.5 Safari/537.36"
    ],
    CURLOPT_RETURNTRANSFER => true,
   
]);
$response = curl_exec($ch);
//var_dump($response);
$decoded = json_decode($response, true);

foreach ($decoded as $index => $value){
  
    echo "$index: $value <br>";
}

curl_close($ch);

print($response);
 




























































?>