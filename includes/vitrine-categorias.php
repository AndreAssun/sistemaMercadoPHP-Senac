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
$resultado = mysqli_query($conexao, $query);
$dados_categorias = mysqli_fetch_all($resultado, MYSQLI_ASSOC);


foreach ($dados_categorias as $categoria) {
$txt = "<h2>Seja bem vindo<?h2><br>".$categoria["nome"];
$lista_produtos = ""
$myFile = fopen($categoria["slug"] . ".html" , "w");
fwrite ($myFile, $txt);
fclose ($myFile);


echo"<h4>". $categoria["nome"]. "</h4>";
echo"<img src='". $categoria["img"]. "'>";

}




?>
