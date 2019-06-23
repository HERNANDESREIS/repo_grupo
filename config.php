<?php

define('DS', DIRECTORY_SEPARATOR);
define('RAIZ',dirname(__FILE__));

///echo dirname(__FILE__);

// colocar as classes dentro da mesma pasta para fazer o auto caregamento

//fazer a leitura das classes automaticamente
spl_autoload_register(function ($class_name) {
  
    //echo $class =  RAIZ.DS.str_replace('\\',DS,$class_name).".php ";
    //busca na pasta class
    if(file_exists("_class".DS."_controler".DS."$class_name".".php")){
        //busca na pasta /controler
        require_once("_class".DS."_controler".DS."$class_name".".php");
        //echo  "1";
    }elseif(file_exists("_class".DS."PDO".DS."$class_name".".php")){
        //busca na pasta /PDO
        require_once("_class".DS."PDO".DS."$class_name".".php");
        //busca na pasta PDO
        //echo "2";
    }elseif(file_exists("_class".DS."_model".DS."$class_name".".php")){
        //busca na pasta /PDO
        require_once("_class".DS."_model".DS."$class_name".".php");
        //busca na pasta PDO
        //echo "3";
    }elseif(file_exists($class_name.".php")){
        //busca na pasta /model
        require_once($class_name.".php");
        //echo  "4";
    }else{
       throw new Exception("ERROR CLASSE NÃO ENCONTRADA - "." [ $class_name.php ]  ");
    }
});
//


//$obj1 = new Select();
//$obj2 = new Update();
//$obj3 = new Insert();
//$obj4 = new Delete();


//$teste = new Db();
//use model\Foto;
//$model_fot = new model\Foto();

//echo $model_fot;
//echo "_class".DS."_controler".DS."";
//use controler\Foto;
//$fot = new Foto();

//echo $fot;
function homeDiretore(){
    
}