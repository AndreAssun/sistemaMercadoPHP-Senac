<?php
include_once("config/conexao.php");

if($_POST) {

    //variaveis
    $token_parceiro  =$_POST['id_parceiro'];
    $telefone          =$_POST['telefone'];
    $endereco          =$_POST['endereco'];
    $cep          =$_POST['cep'];
    $bairro         =$_POST['bairro'];
    $numero          =$_POST['numero'];
    $cidade          =$_POST['cidade'];
    $uf       =$_POST['uf'];
    $email       =$_POST['email'];
    $senha          =$_POST['senha'];

    
    //PALAVRA CHAVE - EMAIL E SENHA
    $salt = md5($email.$senha);
    $custo = "06";
    $senha_segura = crypt($senha, '$2b$' . $custo . '$' . $salt . '$');
    //$celular        =$_POST['numero'];

    //CONSULTA DE DADOS PARA BLOQUEIO DE DUPLICIDADE DE IE
    $queryConsultarCnpj = "SELECT * FROM tbl_parceiros
                                     WHERE usuario = '$ie'";

    $resultadoCnpj = mysqli_query($conexao, $queryConsultarCnpj);
    $dadosie = mysqli_fetch_all($resultadoCnpj, MYSQLI_ASSOC);

    if ($dadosie) {
        header("Location: completar-cadastro-parceiros.php?client=$token_parcei&msg=email");  
        exit;
    }



    $queryConsultaToken = "SELECT * FROM tbl_parceiros  WHERE `hash` = '$token_parceiro'";
    $resultado = mysqli_query($conexao, $queryConsultaToken);
    $dados_parceiro = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    $id = $dados_parceiro[0]["id_parceiro"];




    $queryDocs = "INSERT INTO tbl_docs(id_usuario, documento, id_tipo_documento)
                  VALUES ('$id', '$cpf', 1), ('$id', '$rg', 2)";


    $inserirDocs = mysqli_query($conexao, $queryDocs);
    if($inserirDocs){
        $queryEmail = "INSERT INTO tbl_contatos_emails(id_usuario, email)
                       VALUES('$id', '$email')";

                       
       $inserirEmail = mysqli_query($conexao, $queryEmail);

       if($inserirEmail){
           $queryTelefone= "INSERT INTO tbl_contatos(id_usuario, numero)
                            VALUES ('$id', '$celular')";                
           $inserirTelefone = mysqli_query($conexao, $queryTelefone);

           if($inserirTelefone) {
               $queryAcesso = "INSERT INTO tbl_acessos(id_usuario, usuario, senha, id_situacao)
                               VALUES ('$id', '$email', '$senha_segura', 1)";
            $inserirAcesso = mysqli_query($conexao, $queryAcesso);

            if ($inserirAcesso) {
                header("Location: index.php");
           } else {
               header("Location: completar-cadastro.php?client=".$token_cliente);
           }
        } else {
            header("Location: completar-cadastro.php?client=".$token_cliente);
       }
    
    } else {
        header("Location: completar-cadastro.php?client=".$token_cliente);
    }
} else{
    header("location:cadastro.php");
  }
}

?>