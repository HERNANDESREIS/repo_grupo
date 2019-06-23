<?php
include_once("ConnectsPDO.php");
/*

*/

class Delete extends ConnectsPDO
{
    public function Delete_DB($tabela, $clausula)
    {
        $conn = $this->GetConnection();
        //DELETE FROM minhaTabela WHERE id = :id'
        //echo "DELETE FROM $tabela WHERE $clausula";
        $sql = "DELETE FROM $tabela WHERE $clausula";
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
}
