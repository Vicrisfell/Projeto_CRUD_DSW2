<?php 
class Conexao {
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "portaria";
    protected $conn;
    
   

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }

    public function __destruct() {
        $this->fechar_conexao();
        print "DESTRUÍDO: Objeto {$this->conn}\n";
    }

    protected function fechar_conexao() {
        $this->conn = null;
    }
    public function getConexao() {
        return $this->conn;
}
}
  
?>