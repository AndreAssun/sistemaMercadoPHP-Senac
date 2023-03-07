<?php

include_once("../config/conexao.php");


$nome_categoria = $_POST ["nome-categoria"];
$img_categoria = $_POST ["img-categoria"];
$slug_categoria = $_POST ["slug-categoria"];

//PROCESSO DE QUERY: Trata-se de uma ação para buscar dados e trazê-los para a memória, a fim de executar procedimentos com eles. A query é uma base e um primeiro passo antes de qualquer outra operação em bancos de dados.
//Pode ser vista também como uma filtragem, como a definição de critérios para exibir apenas as informações relevantes em um dado momento. 



$query = "INSERT INTO tbl_categorias(nome, img, slug, id_situacao)
          VALUES ('$nome_categoria', '$img_categoria', '$slug_categoria', 1)";

        
$inserir_categoria = mysqli_query ($conexao, $query);

if($inserir_categoria){
    header ("Location: gestao-categoria.php?msg=sucessocad");
    

} else {
    header ("Location:gestao-categoria.php?msg=errocad");
}