<?php

include_once("../config/conexao.php");


$tipo_doc = $_POST ["tipo_doc"];


//PROCESSO DE QUERY: Trata-se de uma ação para buscar dados e trazê-los para a memória, a fim de executar procedimentos com eles. A query é uma base e um primeiro passo antes de qualquer outra operação em bancos de dados.
//Pode ser vista também como uma filtragem, como a definição de critérios para exibir apenas as informações relevantes em um dado momento. 



$query = "INSERT INTO tbl_tipo_docs(tipo_doc)
          VALUES ('$tipo_doc', 1)";

        
$inserir_tipo_docs = mysqli_query ($conexao, $query);

if($inserir_tipo_docs){
    header ("Location: gestao-tipo-docs.php?msg=sucessocad");
    

} else {
    header ("Location:gestao-tipo-docs.php?msg=errocad");
}