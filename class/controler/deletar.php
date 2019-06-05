<?php
include_once("../PDO/Delete.php");
include_once("../PDO/Select.php");
$id = base64_decode($_GET['id']);

if (!isset($_GET['id'])) {
    header("location:../../layout/alocados.php");
}

if (isset($_POST['button'])) {
    deletar($_POST['button']);
    unset($_POST['button']);
    unset($_GET['id']);
    header("location:../../layout/alocados.php");
}

function deletar($id)
{
    $tabela = "usuario";
    $clasula = "id = '$id'";
    $del = new Delete();
    $del->Delete_DB($tabela, $clasula);
}

function listar($id)
{
    $sele = new Select();
    $tabela = "usuario";
    $clasula = "id = '$id'";
    $res = $sele->Select_DB($tabela, $clasula, 1);
    return $res[0]['nome'];
}
?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- formulario -->
    <div class="alert  alert-danger" role="alert">
        <form method="POST" action="#">
            <?php echo "
    <p class='h1 text-secondary'> 
    você deseja deletar <strong class=''>" . listar($id) . "</strong></p>" ?>
            <button name="button" class="btn btn-danger"
             value="<?php echo $id; ?>">Deletar</button>
        </form>
    </div>