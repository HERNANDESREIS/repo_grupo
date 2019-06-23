<?php
//use _class\controler\;

include_once ("..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."config.php");

class Usuario{
    
    private $id;
    private $nome;
    private $endereco;
    private $cidade;
    private $celular;
    private $telefone;
    private $email;
    private $data_nascimento;
    private $login;
    private $senha;
    //#################

    //#### -GETS  & -SETS

    //GETS
    public function getId(){ return $this->id;}
    public function getNome(){ return $this->nome; }
    public function getEndereco(){ return $this->endereco; }
    public function getCidade(){ return $this->cidade; }
    public function getCelular(){ return $this->celular; }
    public function getTelefone(){ return $this->telefone; }
    public function getEmail(){ return $this->email; }
    public function getData_nascimento(){ return $this->data_nascimento; }
    public function getLogin(){ return $this->login; }
    public function getSenha(){ return $this->senha; }


    //SETS

    public function setId($value){  $this->id  = $value;}
    public function setNome($value){ $this->nome = $value;}
    public function setEndereco($value){ $this->endereco = $value;}
    public function setCidade($value){ $this->cidade = $value;}
    public function setCelular($value){ $this->celular = $value;}
    public function setTelefone($value){ $this->telefone = $value; }
    public function setEmail($value){ $this->email = $value; }
    public function setData_nascimento($value){ $this->data_nascimento = $value; }
    public function setLogin($value){ $this->login = $value; }
    public function setSenha($value){ $this->senha = $value; }

    //#### -GETS  & -SETS //...

    public function insert(){
        $sql = new Db();
        $tabela = "usuarios";

        $rawQuery = "INSERT INTO $tabela (nome, endereco, cidade, telefone, celular, email, data_nascimento ,login ,senha) VALUES (:NOME, :ENDERECO, :CIDADE, :CELULAR, :TELEFONE, :EMAIL, :DATA_NASCIMENTO, :LOGIN ,:SENHA)";

        $params = $this->getData();
        $results = $sql->ACTION($rawQuery,$params);

        if(count($this->login($this->getLogin(),$this->getSenha())) > 0){
            $this->setData($results[0]);
        }
        unset($Sql);
    }


    public function update($values){
        $this->setData($values);

        $sql = new Db();
        $tabela = "usuarios";
        $rawQuery = "UPDATE $tabela SET nome = :NOME , endereco = :ENDERECO ,cidade = :CIDADE ,celular = :CELULAR ,telefone = :TELEFONE ,email = :EMAIL , data_nascimento = :DATA_NASCIMENTO ,login = :LOGIN , senha = :PASSWORD WHERE id = :ID";
        $params = $this->getData();
        $sql->ACTION($rawQuery,$params);
        unset($Sql);
    }


    public function login($login,$password){
        $sql = new Db();
        $tabela = "usuarios";
        $rawQuery = "SELECT * FROM $tabela WHERE login = :LOGIN AND senha = :PASSWORD ";
        $params = array(
            ":LOGIN" => $login,
            ":PASSWORD" => $password,
        );
        $results = $sql->ACTION($rawQuery,$params);

        if(count($results) > 0){
            $this->setData($results[0]);
        }else{
            throw new Exception("LOGIN e/ou SENHA invalidos.");
        }
    }

    public function setData($values){
        $this->setId($values['id']);
        $this->setNome($values['nome']);
        $this->setEndereco($values['endereco']);
        $this->setCidade($values['cidade']);
        $this->setCelular($values['celular']);
        $this->setTelefone($values['telefone']);
        $this->setEmail($values['email']);
        $this->setData_nascimento($values['data_nascimento']);
        $this->setLogin($values['login']);
        $this->setSenha($values['senha']);
    }

    public function getData(){
        return array(
            ":NOME" => $this->getNome(),
            ":ENDERECO" => $this->getEndereco(),
            ":CIDADE" => $this->getCidade(),
            ":CELULAR" => $this->getCelular(), 
            ":TELEFONE" => $this->getTelefone(), 
            ":EMAIL" => $this->getEmail(),
            ":DATA_NASCIMENTO"=> $this->getData_nascimento(),
            ":LOGIN" => $this->getLogin(),
            ":SENHA"=> $this->getSenha(),
        );
    }

    public function delete(){
        $sql = new Db();
        $tabela = "usuarios";

        $rawQuery = "DELETE FROM $tabela WHERE id = :ID";
        $params = array(
            ":ID" => $this->getId(),
        );
       $sql->ACTION($rawQuery,$params);

        $this->setId(0);
        $this->setNome("");
        $this->setEndereco("");
        $this->setCidade("");
        $this->setCelular("");
        $this->setTelefone("");
        $this->setEmail("");
        $this->setData_nascimento("");
        $this->setLogin("");
        $this->setSenha("");
        unset($Sql);
    }

    static function getList(){
        $sql = new Db();
        $tabela = "usuarios";
        $rawQuery = "SELECT * FROM $tabela ORDER BY login";
        return $sql->ACTION($rawQuery);
        unset($Sql);
    }

    static function search($login){
        $sql = new Db();
        $tabela = "usuarios";
        $rawQuery = "SELECT * FROM $tabela WHERE login LIKE :SEARCH ORDER BY login";
        $params = array(
            ":SEARCH" => "%".$login."%"
        );
        return $sql->ACTION($rawQuery,$params);
        unset($Sql);
    }

    public function __toString()
    {
        return json_encode(array(
            "ID" => $this->getId(),
            "NOME" => $this->getNome(),
            "ENDERECO" => $this->getEndereco(),
            "CIDADE" => $this->getCidade(),
            "CELULAR" => $this->getCelular(),
            "TELEFONE" => $this->getTelefone(),
            "EMAIL" => $this->getEmail(),
            "DATA_NASCIMENTO" => $this->getData_nascimento(),
        ));   
    }
}

$a = new Usuario();
$a->setId(89);
$a->setNome("lolo");
$a->setEndereco("rua helena gomes");
$a->setCidade("bisão");
$a->setCelular("(86)9-9540-0851");
$a->setTelefone("614");
$a->setEmail("cajua@gmail.com");
$a->setData_nascimento("1996-01-16");
$a->setLogin("kkk");
$a->setSenha("1996");

///echo $a->getCidade();

//$a->insert();
$value['id'] = 89;
$value['nome'] = "ze";
$value['endereco'] = "ruas";
$value['cidade'] = "rege";
$value['celular'] = "6889";
$value['telefone'] = "6869089";
$value['email'] = "ze";

$value['data_nascimento'] = "9999-01-05";
$value['login'] = "ze";
$value['senha'] = "rege";


$a->update($value);
//$a->delete();
//var_dump(Usuario::search("abc"));