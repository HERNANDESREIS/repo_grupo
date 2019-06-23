<?php


//teste!!!!!
/*
include_once("Insert.php");

 $insert = new Insert();

 $tabela = "usuario";
 $campos = "nome,endereco,cidade,telefone,celular,email,data_nascimento";
 $dados = "'melghard','rua ...','pedras city','11 9 4002-8922','001-01','melgahd@gmail.com','24/04/2020'";

 if($insert->INSERT_DB($tabela, $campos,$dados)){
     echo  "inseriu!!!";
 }else{
    echo  "nao deu!!";
 }
 
*/

/*

include_once("Select.php");

$sele = new Select();
$tabela = "usuario";
$clausula = "nome = 'melghard'";

$resultado = $sele->Select_DB($tabela, $clausula, 10);

//foreach ($resultado as $value) {
  //echo "<br>    ".$value['nome'];
  
//}

foreach ($resultado as $key => $value) {
    print_r($value);
}
*/




///*
include_once("Update.php");

$up = new Update();
$tabela = "usuario";
$set = "nome = 'azuna',cidade ='as peda'";
$clausula = "id = 1";
//if($up->Update_DB($tabela,$set,$clausula)){
    //echo  " alteroy!!";
//}else{
   //echo  " nao deu!!";
//}
if(Update::valid_user("gelaudo")){
    echo "verdade";
}
//*/


/*

include_once("Delete.php");

$Del = new Delete();
$tabela = "usuario";
$cond = "id=6";
if($Del->Delete_DB($tabela,$cond)){
    echo  " Deletou!!";
}else{
   echo  " nao deu!!";
}

*/





//echo "auto carregar";
?>