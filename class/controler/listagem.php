<?php
session_start();
include_once ("../PDO/Select.php");

$select = new Select();
$tabela = "usuario";

if(isset($_POST['pesquisa'])){
    $clasula = "nome LIKE '".$_POST['pesquisa']."%'";
    $_SESSION['busca'] = $select->Select_DB($tabela,$clasula,20);

}else{
    $clasula = "1";
    $_SESSION['busca'] = $select->Select_DB($tabela,$clasula,20);
}
unset($select);
header("location:../../layout/alocados.php");
