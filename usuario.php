<?php

include_once('banco.php');

class Usuario
{
    private $connection;
    private $idUsuario;
    private $usuario;
    private $senha;

    public function __construct() {
        $this->connection = new Database();
    }

    public function selectUsuario($dado) {
        $this->idUsuario;
        $this->usuario = $dado['usuario'];
        $this->senha;

        $user = $this->usuario;

        $sql = "SELECT * FROM usuarios WHERE usuario = '$user';";
        $result = $this->connection->connect()->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id_usuario"];
                echo " User: " . $row["usuario"];
            }
        } else {
        echo "<br>" . "0 results";
      }
      mysqli_close($this->connection->connect());
    }

    public function insert($dados) {
        $this->usuario = $dados['usuario'];
        $this->senha = $dados['senha'];
        $user = $this->usuario;
        $passwd = $this->senha;

        $conn = $this->connection->connect();

        if($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }

        $sql = "INSERT INTO usuarios(usuario, senha) VALUES('$user', '$passwd');";

        $conn->query($sql);

        $conn->close();
    }

    public function login($dado) {
        session_start();

        $this->idUsuario;
        $this->usuario = $dado['usuario'];
        $this->senha = $dado['senha'];
        $user = $this->usuario;
        $pass = $this->senha;

        //$SESSION['id_usuario'] = $id;
        //$SESSION['usuario'] = $user;
        //$SESSION['senha'] = $pass;


        $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pass';";
        
        $result = $this->connection->connect()->query($sql);

        if ($result->num_rows <= 0) {
            echo "<br>" . "Usuário ou senha incorretos!";
        } else {
            while($row = $result->fetch_assoc()) {
                $_SESSION['id_usuario'] = $row['id_usuario'];
                $_SESSION['usuario'] = $dado['usuario'];
                $_SESSION['senha'] = $dado['senha'];
            }
            header('Location: bemvindo.php');
      }
      mysqli_close($this->connection->connect());
    }
}

?>