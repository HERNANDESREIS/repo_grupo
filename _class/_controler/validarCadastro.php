<?php
session_start();

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
    $tabela = "usuarios";
    $campos = "nome,endereco,cidade,telefone,celular,email,data_nascimento";
    $dados ="'$nome','$endereco','$cidade','$telefone','$celular','$email','$dataNascimento'";
    
    foreach ($_POST as  $value) {
        if(empty($value)){
            $_SESSION['alert'] = "alert-warning";
            $_SESSION['texto'] = "TODOS OS CAMPOS DEVEM SER PREENCHIDOS!";
            header("location:../../layout/r_index.php?page=cadastroserv");
            exit();
        }
    }
        
    if ($insert->INSERT_DB($tabela,$campos,$dados)) {
        $_SESSION['alert'] = "alert-success";
        $_SESSION['texto'] = "success";
        header("location:../../layout/r_index.php?page=cadastroserv");
        exit();
    }else{
        $_SESSION['alert'] = "alert-danger";
        $_SESSION['texto'] = "ERRO AO CADASTRAR!";
        header("location:../../layout/r_index.php?page=cadastroserv");
        exit();
    }
    //var_dump($_POST);
}else{
    $_SESSION['alert'] = "alert-secondary";
    $_SESSION['texto'] = "OUVE ALGUM ERRO COM OS DADOS";
    header("location:../../layout/r_index.php?page=cadastroserv");
    
}

