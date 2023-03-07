<?php
include_once("config/conexao.php");


if ($_POST) {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    
    
    //cryptografar a senha *
    //crypto (senha, options) *

        
    $salt = md5($usuario.$senha);
    $custo = "06";
    $senhaHash = crypt($senha, '2b$' . $custo . '$' . $salt . '$');

    $query="INSERT INTO tbl_acessos(usuario, senha)
            VALUES ('$usuario', '$senhaHash')";

            if ($inserir) {
                echo "Usuario cadastrado com sucesso";
            } else {
                echo"Não foi possivel cadastrar o usuário";




            }
        }
        ?>



