<?php
include_once("config/conexao.php");


if ($_POST) {
    //VARIAVEIS


    $razao_social = $_POST["razao_social"];
    $nome_fantasia = $_POST["nome_fantasia"];
    $ie = $_POST["ie"];
    $im = $_POST["im"];
    
    //CRIAÇÃO DA HASH -> DATA + NOME + SOBRENOME

    $token_parceiros = sha1(md5(date('d/m/Y').$ie.$im));

    $query = "INSERT INTO tbl_parceiros(razao_social, nome_fantasia, ie, im, id_situacao, `hash`)
    VALUES ('$razao_social', '$nome_fantasia', '$ie' , '$im' , '$assina_boletim' , '$token_parceiros' )";

    $inserir = mysqli_query ($conexao, $query); //INSERCAO DADOS

    if ($inserir) {
        
        header('Location: completar-cadastro-parceiros.php?client='.$token_cliente);

    } else {
        //header('Location: cadastro.php);
    }
} else {
    //header('Location: cadastra-clientes.php');
}