<?php

class ConnectsPDO
{

    public function GetConnection()
    {
    
        //dados do drive de conexao:
        //nome host /nome do db / 
        $servidor = "localhost";
        $nomeDb = "alocamento";
        $usuario = "root";
        $pass = "";
        $dsn = "mysql:host=$servidor;dbname=$nomeDb;charset=utf8";
        /*
O PDO_MYSQL Data Source Name (DSN) é composto dos seguintes elementos:
DSN prefix
O prefixo DSN é mysql:.
host
O hostname no qual o servidor do banco de dados está.
port
O número da porta onde o servidor do banco de dados está escutando.
dbname
O nome do banco de dados.
    */

        try {
            // tentarar criar uma conexão como db e se der tudo certo ..
            $pdo = new PDO($dsn, $usuario, $pass);
            return $pdo;
            // retornando um objeto do tipo pdo
        } catch (PDOException $ex) {
            // retornando um tipo de erro capturado!!
            echo "erro " . $ex->getMessage();
            // nesse exemplo e tipo getmessage que retornna a mensagem de erro
            // use um var_dump();para tratar outros
            return $ex;
        }
    }


    // funcao de limpar caracteres especiais evitando a entrada de tags e scripts
    function limparTags($campo_form, $listaNegados = null)
    {
        //alguns caracteres basicos para filtro
        $jaListados = array("<", ">", "!", ".", "=", "/", "-", "?", "\'", "\"", ";", "\\", "(", ")", ":");

        //verifica se recebeu um array e se verdadeiro margeia os dois em um so array
        if ($listaNegados != null) {
            $jaListados = array_merge($jaListados, $listaNegados);
        }
        //corre a lista de simbolos para filtrar a string
        foreach ($jaListados as $simbolo) {
            $campo_form = str_replace($simbolo, "", $campo_form);
        }
        //retorna a string filtrada
        return  $campo_form;
    }
}
//fim class 

