<?php include_once("config/conexao.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito´s Market - Cadastro de Parceiros</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <a href="index.php">Voltar</a>

    <form action="inserir-parceiros.php" method="POST">
        <label for="">Razão social</label>
        <input type="text" name="razao_social" placeholder="Razão social">
        <label for="">Nome fantasia</label>
        <input type="text" name="nome_fantasia" placeholder="Nome fantasia">
        <label for="">Inscrição estadual</label>
        <input type="number" name="ie" placeholder="Inscrição estadual">
        <label for="">Inscrição Municipal</label>
        <input type="number" name="im" placeholder="Inscrição municipal">
        
        <button>Gravar</button>

    </form>
    
</body>
</html>