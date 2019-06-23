<?php
session_start();
if(!isset($_SESSION['busca'])){
    header("location: ../_class/_controler/listagem.php");
}
?>

    <!-- pesquisa -->
    <div class="mt-5 mr-3 ml-3 bg-light pt-2 pb-2 rounded-top">
        <form method="POST" action="../_class/_controler/listagem.php" class="form-inline justify-content-end mr-3 ml-3">
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
                    <td><a href="../_class/_controler/deletar.php?id=<?php echo base64_encode($value['id']); ?>"  class="btn btn-danger" type="button" >Deletar</a></td>
                    <td><a href="../_class/_controler/_update.php?id=<?php echo base64_encode($value['id']); ?>&pass=<?php echo base64_encode($value['nome']); ?>"  class="btn btn-dark" type="button" >Editar</a></td>
                </tr>
        <?php } 
        unset($_SESSION['busca']);
        //session_destroy();
        ?>
            </tbody>
        </table>
    </div>
    <!-- fim tabela -->