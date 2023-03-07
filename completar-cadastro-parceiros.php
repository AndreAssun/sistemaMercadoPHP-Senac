<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Completar cadastro parceiro</title>
</head>
<body>
    <?php
    if (isset($_GET["msg"])) {
        if ($_GET["msg"] == "email") {
            echo "Email está em uso";
        }
       
    }
    
    
    
    ?>
        

    
    <form action="inserir-parceiros-dado.php" method="POST">
        <input type="hidden" name="token_parceiro" value="<?=$_GET["client"]?>">
        <input type="text" name="endereco" placeholder="endereco">
        <input type="number" name="cep" placeholder="cep">
        <input type="text" name="bairro  " placeholder="bairro">
        <input type="number" name="numero" placeholder="numero">
        <input type="text" name="cidade" placeholder="cidade">
        <input type="number" name="uf" placeholder="uf">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="senha" placeholder="senha">
        <button>Gravar</button>

    



    </form>
    
    
</body>
</html>

