<?php
session_start();
if(isset($_SESSION['alert'])){
$msg['alert'] = $_SESSION['alert'];
$msg['texto'] = $_SESSION['texto'];

unset($_SESSION['alert']);
unset($_SESSION['texto']); 
}

  
?>

    <!-- formulario -->
    <div class="alert <?= @$msg['alert']?>" role="alert">
  <?= @$msg['texto']?>
</div>
    <form method="POST" action="../_class/_controler/validarCadastro.php">
        <div class="form-group justify-content-md-center mt-5 row mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Nome</label>
                <input name="nome" class="form-control" id="ex1" type="text">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Endereço</label>
                <input name="endereco" class="form-control" id="ex1" type="text">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Cidade</label>
                <input name="cidade" class="form-control" id="ex1" type="text">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Telefone</label>
                <input name="telefone" class="form-control" id="ex1" type="text">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mb-4 mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Celular</label>
                <input name="celular" class="form-control" id="ex1" type="text">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mb-4 mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Email</label>
                <input name="email" class="form-control" id="ex1" type="email">
            </div>
        </div>
        <div class="form-group justify-content-md-center row mb-4 mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <label for="ex1">Data de Nascimento</label>
                <input  name="dataNascimento" class="form-control" id="ex1" type="date">
            </div>
        </div>
        <div class="form-group justify-content-center row mr-1">
            <button name="clicado" value="click" id="" class="btn btn-success btn-lg ml-4"  role="button">Cadastrar</button>
        </div>
        </div>
    </form>
    
    <!-- fim formulario -->
