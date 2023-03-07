<?php

include_once("../config/conexao.php");


$situacao = $_POST ["situacao"];


//PROCESSO DE QUERY: Trata-se de uma ação para buscar dados e trazê-los para a memória, a fim de executar procedimentos com eles. A query é uma base e um primeiro passo antes de qualquer outra operação em bancos de dados.
//Pode ser vista também como uma filtragem, como a definição de critérios para exibir apenas as informações relevantes em um dado momento. 



$query = "INSERT INTO tbl_situcao(situacao)
          VALUES ('$situacao', 1)";

        
$inserir_situacao = mysqli_query ($conexao, $query);

if($inserir_situacao){
    header ("Location: gestao-situacao.php?msg=sucessocad");
    

} else {
    header ("Location:gestao-situacao.php?msg=errocad");
}