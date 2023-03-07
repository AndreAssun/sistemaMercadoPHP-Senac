<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Completar cadastro</title>
</head>
<body>
    <?php
    if (isset($_GET["msg"])) {
        if ($_GET["msg"] == "email") {
            echo "Email está em uso";
        }
       
    }
    
    
    
    ?>
        

    
    <form action="inserir-clientes-dado.php" method="POST">
        <input type="hidden" name="id_cliente" value="<?=$_GET["client"]?>">
        <input type="text" name="cpf" placeholder="CPF">
        <input type="text" name="rg" placeholder="RG">
        <input type="email" name="email" placeholder="E=mail">
        <input type="password" name="senha" placeholder="senha">
        <input type="text" name="numero" placeholder="Celular">
        <button>Gravar</button>


    </form>
    
    
</body>
</html>

