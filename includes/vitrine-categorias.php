<?php include_once("../config/conexao.php");?>

<html>
    
<style>
    img{
        max-width:80px;
    }
</style>

</html>

<?php

$query = "SELECT nome, slug, img FROM tbl_categorias";
$query2 = "SELECT id, nome, descricao, preco, id_categoria FROM tbl_lista_produtos";
$resultado = mysqli_query($conexao, $query);
$resultado2 = mysqli_query($conexao, $query2);
$dados_categorias = mysqli_fetch_all($resultado, MYSQLI_ASSOC);


foreach ($dados_categorias as $categoria) {
$txt = "<h2>Seja bem vindo<?h2><br>".$categoria["nome"];
$lista_produtos = produto["nome"]."-Preço R$".produto["preco"];
$myFile = fopen($categoria["slug"] . ".html" , "w");
fwrite ($myFile, $txt);
fclose ($myFile);


echo"<h4>". $categoria["nome"]. "</h4>";
echo"<img src='". $categoria["img"]. "'>";

}




?>
