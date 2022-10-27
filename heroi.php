<?php

include_once('banco.php');

class Heroi
{
    private $connection;
    private $heroi;
    private $poder;

    public function __construct() {
        $this->connection = new Database();
    }

    public function selectHerois() {
        $sql = "SELECT esq.*, us.usuario FROM esquadrao esq LEFT JOIN usuarios us ON us.id_usuario = esq.id_usuario;";
        $result = $this->connection->connect()->query($sql);

        if ($result->num_rows <= 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br>" . "0 results";
            }
        } else {
            while($row = $result->fetch_assoc()) {
                echo "<b>ID: </b>" . $row["id_heroi"] . " | <b>Herói: </b>" . $row["heroi"] . " | <b> Poderes: </b>" . $row["poder"] . " | <b>Quem cadastrou: </b>" . $row["usuario"] . "<br>";
            }
        }
      mysqli_close($this->connection->connect());
    }

    public function insert($dados) {
        $this->heroi = $dados['heroi'];
        $this->poder = $dados['poder'];
        $this->idUser = $dados['id_usuario'];
        $hero = $this->heroi;
        $power = $this->poder;
        $UserId = $this->idUser;

        $conn = $this->connection->connect();

        if($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }

        $sql = "INSERT INTO esquadrao(heroi, poder, id_usuario) VALUES('$hero', '$power', $UserId);";

        $conn->query($sql);

        $conn->close();
    }
}

?>