<?php
session_start();
if(!isset($_SESSION['busca'])){
    header("location: ../class/controler/listagem.php");
}
?>

<!DOCTYPE html>
<html lang="en">

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

    <!-- pesquisa -->
    <div class="mt-5 mr-3 ml-3 bg-light pt-2 pb-2 rounded-top">
        <form method="POST" action="../class/controler/listagem.php" class="form-inline justify-content-end mr-3 ml-3">
            <input name="pesquisa" class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Busca">
            <button class="btn btn-dark my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
    <!-- fim pesquisa -->

    <!-- tabela -->
    <div class="col md-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">endereço</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data nascimento</th>
                </tr>
            </thead>
            <tbody>
                <?php  foreach ($_SESSION['busca'] as  $value) {  ?>
                <tr>
                    <th scope="row"><?php echo $value['id'];?></th>
                    <td><?php echo $value['nome'];?></td>
                    <td><?php echo $value['endereco'];?></td>
                    <td><?php echo $value['cidade'];?></td>
                    <td><?php echo $value['celular'];?></td>
                    <td><?php echo $value['telefone'];?></td>
                    <td><?php echo $value['email'];?></td>
                    <td><?php echo $value['data_nascimento'];?></td>
                    <td><a href="../class/controler/deletar.php?id=<?php echo base64_encode($value['id']); ?>"  class="btn btn-danger" type="button" >Deletar</a></td>
                    <td><a href="../class/controler/update.php?id=<?php echo base64_encode($value['id']); ?>&pass=<?php echo base64_encode($value['nome']); ?>"  class="btn btn-dark" type="button" >Editar</a></td>
                </tr>
        <?php } 
        unset($_SESSION['busca']);
        //session_destroy();
        ?>
            </tbody>
        </table>
    </div>
    <!-- fim tabela -->

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>