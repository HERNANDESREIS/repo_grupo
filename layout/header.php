
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
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #061203">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">AGENDA</a>

    <div class="collapse navbar-collapse ml-3" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
            <li class="nav-item ">
                <a class="nav-link  rounded" href="?page=home">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link  rounded" href="../_class/_controler/listagem.php">Lista</a>
            </li>
            <li class="nav-item ">
                <div class="dropdown">
                    <a class="nav-link  dropdown-toggle rounded" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mais
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="?page=cadastroserv">Cadastrar</a>
                        <a class="dropdown-item" href="?sendMail">Enviar email</a>
                        <a class="dropdown-item" href="?page=album">Album</a>
                    </div>

                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- fim barrade navegação -->