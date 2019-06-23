<?php
//namespace model;
//include_once ("..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."config.php");
class Foto_model{

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


    public function insert(){
        $sql = new Db();
        $tabela = "usuario_img";

        $rawQuery = "INSERT INTO $tabela (nome ,usuario_id ,data ,arquivo) VALUES (:NOME, :USUARIO_ID, :DATA, :ARQUIVO)";

        $params = $this->getData();
        $sql->ACTION($rawQuery,$params);

        //pegando o umtimo registro
        $rawQuery = "SELECT * FROM $tabela  WHERE id = LAST_INSERT_ID()";

        $res = $sql->ACTION($rawQuery,$params);

        if(count($res) > 0){
            $this->setData($res[0]);
        }
        unset($Sql);
    }

    public function delete(){
        $sql = new Db();
        $tabela = "usuario_img";

        $rawQuery = "DELETE FROM $tabela WHERE id = :ID";
        $params = array(
            ":ID" => $this->getId(),
        );
       $sql->ACTION($rawQuery,$params);

        $this->setId(0);
        $this->setNome("");
        $this->setArquivo("");
        $this->setData_up("");
        $this->setUsuario_id(0);
        unset($Sql);
    }


    public function update($values){
        $this->setData($values);
        

        $sql = new Db();
        $tabela = "usuario_img";
        $rawQuery = "UPDATE $tabela SET id = :ID , nome = :NOME , usuario_id = :USUARIO_ID , data = :DATA , arquivo = :ARQUIVO WHERE id = :ID";
        
        $params = $this->getData();

        $sql->ACTION($rawQuery,$params);
        unset($Sql);
    }


    static function getList(){
        $sql = new Db();
        $tabela = "usuario_img";
        $rawQuery = "SELECT * FROM $tabela ORDER BY id";
        return $sql->ACTION($rawQuery);
        unset($Sql);
    }

    static function search($usuario_id){
        $sql = new Db();
        $tabela = "usuario_img";
        $rawQuery = "SELECT * FROM $tabela WHERE usuario_id = :SEARCH ORDER BY id";
        $params = array(
            ":SEARCH" => $usuario_id
        );
        return $sql->ACTION($rawQuery,$params);
        unset($Sql);
    }



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
}

//use model\Foto;
//$foto = new Foto();
//$foto->setArquivo("kk3a.jpg");
//$dates = new DateTime();

//$foto->setData_up($dates->format('d-m-Y H:i:s'));
//$foto->setNome("barel");
//$foto->setUsuario_id(26);

//$foto->insert();
//var_dump(Foto::search(26));

//$value['id'] = 7;
//$value['nome'] = "pizaipziapizapi";
//$value['data'] = "1234-11-11";
//$value['usuario_id'] = 26;
//$value['arquivo'] = "00000000000.png";

//$foto->update($value);



//$foto->delete();
//var_dump(Foto::getList());
//echo $foto->getArquivo();
//echo $foto->getData_up();
//echo $foto->getNome();
//echo $foto->getUsuario_id();

//echo $foto;
