<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito´s Market - Cadastra Contatos Email</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">Voltar</a>

    <form action="inserir-categoria.php" method="POST">

        <label for="">ID cliente</label>
        <input type="text" name="id-cliente">

        <label for="">ID usuario contato</label>
        <input type="text" name="id-usuario-contato">

        <label for="">Email</label>
        <input type="email" name="email">

        <label for="">ID situação usuario</label>
        <input type="text" name="id-situacao-usuario">
        
        <button>Gravar</button>

    </form>
    
</body>
</html>