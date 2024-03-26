<?php
    class Conexao {
        private $host="localhost:3306";
        private $db_name = "cadastro";
        private $username = "root";
        private $password = "";
        public $conn;

        public function fazConexao() {
            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOExcepiton $e) {
                echo "erro de conexao: {$e}";
            }

            return $this->conn;
        }
    }
?>