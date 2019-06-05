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

    include_once "../PDO/Update.php";
    $update = new Update();
    $tabela = "usuario";
    $set = "nome = '$nome',endereco ='$endereco',cidade = '$cidade',telefone = '$telefone',celular = '$celular',email = '$email',data_nascimento = '$dataNascimento'";
    $clausula = "id = '$id'";

    foreach ($_POST as  $value) {
        if(empty($value)){
            $alert = "alert-warning";
            $texto = "TODOS OS CAMPOS DEVEM SER PREENCHIDOS!";
            header("location:../../layout/alocados.php");
            exit();
        }
    }
        
    if ($update->Update_DB($tabela,$set,$clausula)) {
        $alert = "alert-success";
        $texto = "atualizado";
        header("location:../../layout/alocados.php");
        exit();
    }else{
        $alert = "alert-danger";
        $texto = "ERRO AO CADASTRAR!";
        header("location:../../layout/alocados.php");
        exit();
    }
    //var_dump($_POST);
}else{
    $alert = "alert-secondary";
    $texto = "OUVE ALGUM ERRO COM OS DADOS";
    header("location:../../layout/alocados.php");
    
}

