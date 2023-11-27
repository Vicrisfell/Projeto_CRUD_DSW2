<?php
require_once('Conexao.php');
class DBConnect extends Conexao {
     
    // Função para inserir registro
    public function inserir_registro($data_hora, $id, $veiculos_id) {
        try {
            $sql = "INSERT INTO registro (data_hora, id, veiculos_id) VALUES (:data_hora, :id, :veiculos_id)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':data_hora', $data_hora);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':veiculos_id', $veiculos_id);
            $stmt->execute();
            
            echo "Registro inserido com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao inserir registro: " . $e->getMessage();
        }
    }
    // Função para deletar registro
    public function deletar_registro($id) {
        try {
            $sql = "DELETE FROM registro WHERE id = $id";
            $this->conn->exec($sql);
            return true;
        } catch (PDOException $e) {
            echo "Erro ao deletar registro: " . $e->getMessage();
            return false;
        }
    }

    // Função para relatório de cadastros
    public function relatorioCadastros() {
        $sql = "SELECT * FROM registro";
        $result = $this->conn->query($sql);

        if ($result->rowCount() > 0) {
            echo "<table><tr><th>ID</th><th>Data/Hora</th><</th><th>Veículo ID</th></tr>";
            while ($row = $result->fetch()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["data_hora"] . "</td><td>" .  "</td><td>" . $row["veiculos_id"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
    public function atualiza($veiculos_id, $id_atualizar){
        try {
            $sql = "UPDATE sua_tabela SET data_hora = datahora, veiculos_id = veiculo_id WHERE id = :id";
            $this->conn->exec($sql);
            echo "Registro atualizado com sucesso!";
        } catch(PDOException $e) {
            echo "Erro ao atualizar registro: " . $e->getMessage();
        }
    }

    // ... (Outras funções da classe, se necessário) ...
}

?>


