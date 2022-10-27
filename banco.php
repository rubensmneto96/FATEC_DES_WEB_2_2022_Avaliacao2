<?php

class Database
{
    private $host;
    private $user; 
    private $password; 
    private $database;

    public function __construct() {
        $this->host = "localhost:3306";
        $this->user = "root";
        $this->password = "root";
        $this->database = "avaliacao2";
    }

    public function connect() {
        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if(!$connection) {
            echo "Erro ao conectar.";
        } else {
            return $connection;
            echo "Conexão bem sucedida.";
        }
    }
}

?>