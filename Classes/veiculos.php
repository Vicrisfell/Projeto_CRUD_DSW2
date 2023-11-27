<?php
require_once('Conexao.php');

class veiculos
{
    private $aluno, $placa ;
    private $connect;

    function __construct($servername, $username, $password,$dbname){
        $this->connect = new Conexao($servername, $username, $password, $dbname);
    }

    public function insert($aluno, $placa ){
        // Seleciona os placas do banco de dados e compara com o placa$placa que o candidato quer inserir

        $sql = "SELECT placa FROM veiculos
         WHERE placa$ = '$placa'";
        $result = mysqli_query($this->connect->getConnection(), $sql);
        // Verifica se o placa$placa já foi cadastrado
        if($result !== FALSE && $result->num_rows > 0) {
            echo "Placa já cadastrada";
        }
    }
    
    

    public function read(){
        $sql = "SELECT aluno, placa,  FROM veiculos";
        $result = $this->connect->getConnection()->query($sql);
    
       
    }
    public function update($aluno, $placa ){
        $sql = "SELECT placa FROM veiculos
         WHERE placa = '$placa' ";
        $result = $this->connect->getConnection()->query($sql);
       
        if($result->num_rows > 0){
            $update_nome = "UPDATE veiculos
             SET aluno = '$aluno' WHERE placa = '$placa'";
                      

            }else{
                echo "placa não cadastrado!!";
            }
    }
    public function delete($placa){
        $sql = "SELECT placa FROM veiculos
         WHERE placa = '$placa' ";

        $result = $this->connect->getConnection()->query($sql);

        if($result->num_rows > 0){
            $delete = "DELETE FROM veiculos
             WHERE placa = '$placa'";
            if($this->connect->getConnection()->query($delete) === TRUE){
                echo "Dados Deletados com Sucesso";

            }else
            echo "Placa não encontrada!";
        }
    }
    
    function __destruct(){
        $this->connect->closeConnection();
    }
}



?>
