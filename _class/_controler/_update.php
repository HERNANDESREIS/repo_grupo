<?php
//namespace class\controler\;
session_start();

include_once("../PDO/Select.php");
$id =   base64_decode($_GET['id']);
$pass =   base64_decode($_GET['pass']);

if (empty($_GET['id'])) {
    header("location:../../layout/alocados.php");
    exit();
}else{
    
    $sele = new Select();
    $tabela = "usuarios";
    $clasula = "id = '$id' and nome = '$pass'";
    $res = $sele->Select_DB($tabela, $clasula, 1);

    if(count($res) > 0){
    
    $_SESSION['dadosForm'] = $res[0];
    $_SESSION['valid'] = $res[0]['nome'];
    header("location:../../layout/upDate.php");
    echo "tem dados: id $id e nome: $pass<br>";
    
    }else{
        header("location:../../layout/alocados.php");
        echo "sem dados".$id;
    }
    
}

