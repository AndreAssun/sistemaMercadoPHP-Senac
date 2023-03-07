<?php include_once("config/conexao.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito´s Market - Cadastro de Clientes\</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <a href="index.php">Voltar</a>

    <form action="inserir-cliente.php" method="POST">
        <label for="">Nome cliente</label>
        <input type="text" name="nome" placeholder="nome cliente">
        <label for="">sobrenome cliente</label>
        <input type="text" name="sobrenome" placeholder="sobrenome">
        <label for="">Data Nascimento</label>
        <input type="date" name="data_nasc" placeholder="data nascimento">
        <label for="">Genero</label>
        
        <select name="id_genero" id="">
        <?php
        $query = "SELECT * FROM tbl_generos";
        $consulta_genero = mysqli_query($conexao, $query);
        $result = mysqli_fetch_all($consulta_genero, MYSQLI_ASSOC);
        

        foreach ($result as $genero) {
        ?>

        <option value="<?=$genero["id"]?>">
               <?=$genero["genero"]?>
    
        </option>

    <?php
        }
    ?>

    </select>
    
        
        <label for="">Receber nossas promoções ?</label>
        <input type="checkbox" name="newslatter" placeholder="newslatter"> 
        
        <button>Gravar</button>

    </form>
    
</body>
</html>