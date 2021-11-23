<?php

$url = 'https://rickandmortyapi.com/api/character/265';

$curl = curl_init($url);

// Descomentar lo siguiente para realizar
// peticiones de tipo POST

//----DATOS POR POST -----
// $datosPost = array(
//     'api_key' => 'YOUR_API_KEY',
//     'username' => 'JoeCool3000',
// );
// $datosPostString = http_build_query($datosPost, '', '&');
//
//----PETICIÓN POR POST -----
// curl_setopt($curl, CURLOPT_POST, 1); 
// curl_setopt($curl, CURLOPT_POSTFIELDS, $datosPostString); 

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);
print_r($response);
