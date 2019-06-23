<?php
include_once("ConnectsPDO.php");

/*

update cliente set nome = '".$nome."', email = '".$email."',telefone = '".$tel."'
            where idcliente = ".$id;

*/

class Update extends ConnectsPDO
{

    public function Update_DB($tabela, $set, $clausula)
    {
        $conn = $this->GetConnection();

        $sql = "UPDATE $tabela SET $set WHERE $clausula";
        //construcao da sql para db

        $stmt = $conn->prepare($sql);
        //variavel de preparo antes da acao sql

        //execultadno a acao
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }


    static function valid_user($pass):bool
    {
        include_once("Select.php");
        $sele = new Select();

        $tabela = "usuarios";
        $clasula = "nome = '$pass'";
        $res = $sele->Select_DB($tabela, $clasula, 1);
                //return 
        if (count($res) > 0) {
            return true;
        }else{
            return false;
        }
    }
}
