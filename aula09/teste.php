<?php
include_once("config/conexao.php");

if($_POST){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];    

    //Criptografar a senha. Qual das formas vamos utilizar?    
    //crypt(senha, options)  
      
    $salt = md5($usuario.$senha);    
    $custo = "06";    
    $senhaHash = crypt($senha, '$2b$' . $custo . '$' . $salt . '$');   
    $query = "INSERT INTO tbl_acessos(usuario,senha)    
            VALUES ('$usuario','$senhaHash')";  
            $inserir = mysqli_query($conexao, $query);    

            if($inserir){        
                echo "Usuario cadastrado com sucesso";    
            }
        }else { 
            echo "Não foi possível cadastrar o usuário"; 
        }
