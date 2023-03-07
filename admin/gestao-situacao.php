<?php
include_once("../config/conexao.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito´s Market - Situação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">Voltar</a>

    <form action="inserir-categoria.php" method="POST">

        <label for="">ID usuario contato</label>
        <input type="text" name="id-usuario-contato">

        <label for="">Doc situação</label>
        <input type="text" name="doc-situacao">
    
        <button>Gravar</button>

    </form>
    
</body>
</html>