<?php

if($_POST['clicado']){
    extract($_POST);
    $nome = filter_var($nome,FILTER_SANITIZE_SPECIAL_CHARS);
    $endereco = filter_var($endereco,FILTER_SANITIZE_SPECIAL_CHARS);
    $cidade = filter_var($cidade,FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_var($telefone,FILTER_SANITIZE_SPECIAL_CHARS);
    $celular = filter_var($celular,FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    $dataNascimento = filter_var($dataNascimento,FILTER_SANITIZE_SPECIAL_CHARS);

    include_once "../PDO/Insert.php";
    $insert = new Insert();
    $tabela = "usuario";
    $campos = "nome,endereco,cidade,telefone,celular,email,data_nascimento";
    $dados ="'$nome','$endereco','$cidade','$telefone','$celular','$email','$dataNascimento'";
    
    foreach ($_POST as  $value) {
        if(empty($value)){
            $alert = "alert-warning";
            $texto = "TODOS OS CAMPOS DEVEM SER PREENCHIDOS!";
            header("location:../../layout/cadastroserv.php?alert=$alert&texto=$texto");
            exit();
        }
    }
        
    if ($insert->INSERT_DB($tabela,$campos,$dados)) {
        $alert = "alert-success";
        $texto = "success";
        header("location:../../layout/cadastroserv.php?alert=$alert&texto=$texto");
        exit();
    }else{
        $alert = "alert-danger";
        $texto = "ERRO AO CADASTRAR!";
        header("location:../../layout/cadastroserv.php?alert=$alert&texto=$texto");
        exit();
    }
    //var_dump($_POST);
}else{
    $alert = "alert-secondary";
    $texto = "OUVE ALGUM ERRO COM OS DADOS";
    header("location:../../layout/cadastroserv.php?alert=$alert&texto=$texto");
    
}

