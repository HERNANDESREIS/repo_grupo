<?php
//namespace controler;
//include_once ("..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."config.php");
class Foto_controler{

    private $id;
    private $nome;
    private $usuario_id;
    private $data;
    private $arquivo;

 //#################

    //#### -GETS  & -SETS

    //GETS
    public function getId(){ return $this->id; }
    public function getNome(){ return $this->nome; }
    public function getUsuario_id(){ return $this->usuario_id; }
    public function getData_up(){ return $this->data; }
    public function getArquivo(){ return $this->arquivo; }

     //SETS
     public function setId($value){ $this->id = $value; }
     public function setNome($value){ $this->nome = $value; }
     public function setUsuario_id($value){ $this->usuario_id = $value; }
     public function setData_up($value){ $this->data = $value; }
     public function setArquivo($value){$this->arquivo = $value; }

     //#### -GETS  & -SETS //...



    private function setData($values){
        $this->setId($values['id']);
        $this->setNome($values['nome']);
        $this->setUsuario_id($values['usuario_id']);
        $this->setData_up($values['data']);
        $this->setArquivo($values['arquivo']);
        
    }

    private function getData(){
        return array(
            ":ID" => $this->getId(),
            ":NOME" => $this->getNome(),
            ":USUARIO_ID" => $this->getUsuario_id(),
            ":DATA" => $this->getData_up(),
            ":ARQUIVO" => $this->getArquivo(), 
        );
    }

    public function __toString()
    {
        return json_encode($this->getData());
    }

    //fim  obj

    public function formCADASTRAR(){

    } 

    public function formUPDATE(){

    }

    public function formDELETE(){

    }

}

//$a = new Foto();
//$a->setArquivo("asdfg");
//echo $a;