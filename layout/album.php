
    <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top"  src="../upload_imgs/i (3).jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">NOME DESCRIÇÂO .</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">data 00/00/0000</small>
                  </div>
                </div>
              </div>
            </div>
 
          </div>
        </div>
      </div>

    


    <!-- formulario -->
    <div class="alert <?php echo @$msg['alert'] ?>" role="alert">
        <?php echo @$msg['texto'] ?>
    </div>
    <form method="POST" enctype="multipart/form-data" action="../class/controler/validarCadastro.php">
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
                <input name="dataNascimento" class="form-control" id="ex1" type="date">
            </div>
        </div>


        <div class="form-group justify-content-md-center row mb-4 mr-1">
            <div class="col-lg-4 ml-3 mr-1">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Escolher arquivo</label>
            </div>
        </div>



        <div class="form-group justify-content-center row mr-1">
            <button name="clicado" value="click" id="" class="btn btn-success btn-lg ml-4" role="button">Cadastrar</button>
        </div>
        </div>
    </form>
    <!-- fim formulario -->
