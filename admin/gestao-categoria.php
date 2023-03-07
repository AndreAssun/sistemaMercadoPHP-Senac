<?php
include_once("../config/conexao.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito´s Market - Cadastro de Categoria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <a href="index.php">Voltar</a>
        <h4>gestão categoria</h4>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Visibilidade</th>
                    <th>Situação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
        <?php
        $queryConsultaCat = "SELECT * FROM tbl_categorias";
        $consulta = mysqli_query($conexao, $queryConsultaCat);
        $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
        foreach($resultado as $categoria) {
            echo"<tr>
              <td>".$categoria["nome"]."</td>
              <td>".$categoria["visibilidade"]."</td>
              <td>".$categoria["id_situacao"]."</td>
              <td>
              <a href='?acao=editar&id=".$categoria["id"]."'>Editar</a>
              <a href='deletar-categoria.php?id=".$categoria["id"]."'>Deletar
        
              </td>
            </tr>";
        
        }
        
        ?>
        </tbody>
        </table>

        <?php
        //Verifica se na url existe o parametro msg
        if (isset($_GET["msg"])){
            //verifica se a msg é de qual tipo
            if($_GET["msg"]== "sucessocad") {
                echo"Categoria cadastrada com sucesso";
            }
            if($_GET["msg"]== "errocad") {
                echo"Erro ao cadastrar categoria";
        }
    }

        
        ?>

        <?php
        if(isset($_GET["acao"])){
            if($_GET["acao"] == "editar") {
                $queryConsultarCategoria = "SELECT * FROM tbl_categorias
                                              WHERE id = ".$_GET["id"];

                $consultarCategoria = mysqli_query($conexao, $queryConsultarCategoria);
                $resultado =  mysqli_fetch_all($consultarCategoria, MYSQLI_ASSOC);
                foreach($resultado as $categoria){ 
                    echo'
                    <div>
                        <form action="editar-categoria.php" method="POST">
                        <h4>Editar categoria</h4>
                            <input type="hidden" name="id" value="'.$categoria["id"].'"
                            <label for="">Nome Categoria</label>
                            <input type="text" name="nome-categoria" value="'.$categoria["nome"].'">
                            <label for="">IMG Categoria</label>
                            <input type="img" name="img" value="'.$categoria["img"].'">
                            <label for="">Slug Categoria</label>
                            <input type="text" name="slug" value="'.$categoria["slug"].'">
                            <button>Salvar</button>
                        </form>
                    </div>';



                }
            }
        } else{
            echo'
            
            <div>
                <form action="inserir-categoria.php" method="POST">
                <h4>Cadastro categoria</h4>
                    <label for="">Nome Categoria</label>
                    <input type="text" name="nome-categoria">
                    <label for="">IMG Categoria</label>
                    <input type="img" name="img">
                    <label for="">Slug Categoria</label>
                    <input type="text" name="slug">
                    <button>Salvar</button>
                </form>
            </div>';
        }
        
        ?>
        
    </main>
    
</body>
</html>




