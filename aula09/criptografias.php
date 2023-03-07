<?php

/*

CRIPTOGRAFIA DE DADOS

MD5 ** utilize com outro protocolo junto

CRYPT()

password hash()

SHA1()

BASE64() - textos ou arquivos


*/

$texto = "Senha";
echo $texto. "<br>";
echo sha1($texto);

echo "--------------<br>";
echo "     CRYPT<br>";
echo "--------------<br>";

$palavraChave ="trt@9900"; //exemplo;
$senha ="1234";

echo crypt($senha, $palavraChave);

echo "--------------<br>";
echo "     password_hash<br>";
echo "--------------<br>";


$senha ="1234";
$options = [
    'cost' =>12,
];

echo password_hash($senha, PASSWORD_BCRYPT, options);

echo "--------------<br>";
echo "     BASE64<br>";
echo "--------------<br>";

$texto ="Textos";

echo $texto. "<br>";
echo base64_encode($texto);



?>