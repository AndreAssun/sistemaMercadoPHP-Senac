<?php
    include_once("../config/conexao.php");
    
    if($_POST){
        $id = $_POST["id"];
        $tipo_doc = $_POST["tipo_doc"];
        

        $query ="UPDATE tbl_tipo_docs SET tipo_doc = '$tipo_doc' WHERE id = $id";
        $gravar = mysqli_query($conexao, $query);

        if($gravar){
            header("Location: gestao_tipo_docs.php");

        }else{
            //senao do gravar

        }


    }else{
        //senao do post
        header("Location: gestao_tipo_docs.php");
    }


?>