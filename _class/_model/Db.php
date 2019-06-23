<?php


class Db extends PDO{
    private $conn;

    function __construct()
    {
        $DB_user = "root";
        $DB_pass = "";
        $DB_host = "localhost";
        $DB_name = "alocamento";
        $dsn = "mysql:host=$DB_host;dbname=$DB_name;charset=utf8";

        $this->conn = new PDO($dsn,$DB_user,$DB_pass);

    }
    
    private function setParams($statement, $parameters = array()){
        foreach ($parameters as $key => $value) {
            $this->setParam($statement,$key, $value);
         }
    }

    private function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }
  
    public function query($rawQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt,$params);
 
        $stmt->execute();
        return $stmt;
        
    }

    //CRUD - C "R" UD
    public function ACTION($rawQuery,$params = array()):array{
        $stmt = $this->query($rawQuery,$params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}