<?php
session_start();
include_once("../_class/PDO/Update.php");
if(!isset($_SESSION['dadosForm'])){
    header("location:alocados.php");
    exit();
}else if(!Update::valid_user($_SESSION['valid'])){
    header("location:alocados.php");
    exit();
}else{

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- barrade navegação -->
    <?php include("header.php") ?>
    <!-- fim barrade navegação -->

    <!-- formulario -->
    <form method="POST" action="../_class/_controler/valid_update.php">

    <input name="id" value="<?php echo $_SESSION['dadosForm']['id'];?>" class="form-control" id="ex1" type="hidden">

        <div class="form-group justify-content-md-center mt-5 row mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Nome</label>
                <input name="nome" value="<?php echo $_SESSION['dadosForm']['nome'];?>" class="form-control" id="ex1" type="text">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Endereço</label>
                <input name="endereco" value="<?php echo $_SESSION['dadosForm']['endereco'];?>" class="form-control" id="ex1" type="text">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Cidade</label>
                <input name="cidade" value="<?php echo $_SESSION['dadosForm']['cidade'];?>" class="form-control" id="ex1" type="text">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Telefone</label>
                <input name="telefone" value="<?php echo $_SESSION['dadosForm']['telefone'];?>" class="form-control" id="ex1" type="text">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mb-4 mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Celular</label>
                <input name="celular" value="<?php echo $_SESSION['dadosForm']['celular'];?>" class="form-control" id="ex1" type="text">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mb-4 mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Email</label>
                <input name="email" value="<?php echo $_SESSION['dadosForm']['email'];?>" class="form-control" id="ex1" type="email">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mb-4 mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Data de Nascimento</label>
                <input  name="dataNascimento" value="<?php echo $_SESSION['dadosForm']['data_nascimento'];?>" class="form-control" id="ex1" type="date">
            </div>
        </div>
        <div class="form-group justify-content-center row mr-1">
            <button name="clicado" value="click" id="" class="btn btn-success btn-lg ml-4"  role="button">Cadastrar</button>
        <?php unset($_SESSION['dadosForm']); ?>
        </div>
        </div>
    </form>
    <!-- fim formulario -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

<?php

}
