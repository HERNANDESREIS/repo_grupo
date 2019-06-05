<?php
include_once("ConnectsPDO.php");

class Insert extends ConnectsPDO
{
    public function INSERT_DB($tabela, $campos, $dados)
    {
        // echo "/".$tabela."/".$campos."/".$dados;
        //pegando conecxao do php via pdo
        $conn = $this->GetConnection();

        //string sql 
        $sql = "INSERT INTO $tabela ($campos) VALUES ($dados)";

        // montada com os valores passados para a funcao

        //prepare statiment
        $stmt = $conn->prepare($sql);
        //variavel de preparo antes da acao sql

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
