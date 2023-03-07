<?php

include_once("config/conexao.php");

if ($_POST) {

    //capturar as informações do POST
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    //Consultar o usuário

    $queryUsuario = "SELECT * FROM tbl_acessos WHERE usuario = '$usuario'";

    $consultaUsuario = mysqli_query($conexao, $queryUsuario); //aqui é se deu certo a consulta
    $resultadoConsulta = mysqli_fetch_all ($consultaUsuario, MYSQLI_ASSOC);

    if($resultadoConsulta){
    //Verificar a senha do usuário

    $salt = md5($usuario.$senha);
    $custo = "06";
    $senhaHash = crypt($senha, '$2b$' . $custo . '$' . $salt . '$'); 

    $compararSenha = hash_equals($resultadoConsulta[0]["senha"], $senhaHash);

    if($compararSenha){
        echo"Usuario autenticado"
    } else {
        echo"Usuario ou senha invalidos"
    }

    }


}