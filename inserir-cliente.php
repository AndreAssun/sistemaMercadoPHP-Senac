<?php
include_once("config/conexao.php");


if ($_POST) {
    //VARIAVEIS


    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $data_nasc = $_POST["data_nasc"];
    $genero = $_POST["id_genero"];
    $newslatter = $_POST["newslatter"];
    $assina_boletim = 0;

    if ($newlatter) {
        $assina_boletim = 1;
    
    }

    //CRIAÇÃO DA HASH -> DATA + NOME + SOBRENOME

    $token_cliente = sha1(md5(date('d/m/Y').$nome.$sobrenome));

    $query = "INSERT INTO tbl_clientes(nome, sobrenome, data_nasc, id_genero, newslatter, id_situacao, `hash`)
    VALUES ('$nome', '$sobrenome', '$data_nasc' , '$genero' , '$assina_boletim' , 1, '$token_cliente' )";

    $inserir = mysqli_query ($conexao, $query); //INSERCAO DADOS

    if ($inserir) {
        
        header('Location: completar-cadastro.php?client='.$token_cliente);

    } else {
        //header('Location: cadastro.php);
    }
} else {
    //header('Location: cadastra-clientes.php');
}