<?php
include_once("ConnectsPDO.php");

class Select extends ConnectsPDO
{
  public function Select_DB($tabela, $clasula = NULL, $LIMIT)
  {
    //pega a conexao do banco
    $conn = $this->GetConnection();
    //monta a sql que de busca
    //echo "SELECT * FROM $tabela WHERE $clasula LIMIT $LIMIT";
    $stmt = $conn->query("SELECT * FROM $tabela WHERE $clasula LIMIT $LIMIT");
    //retona um array de objetos vindo do banco
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}