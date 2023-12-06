<?php
require_once('Conexao.php');
class DBConnectVeiculos extends Conexao{
   
    // Função para inserir veículo
    public function inserir_veiculo($aluno, $placa) {
        try {
            $sql = "INSERT INTO veiculos (aluno, placa) VALUES (:aluno, :placa)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':aluno', $aluno);
            $stmt->bindParam(':placa', $placa);
            $stmt->execute();

            echo "Veículo inserido com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao inserir veículo: " . $e->getMessage();
        }
    }

    // Função para deletar veículo
    public function deletar_veiculo($id) {
        try {
            $sql = "DELETE FROM veiculos WHERE id = $id";
            $this->conn->exec($sql);
            echo "Veículo deletado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao deletar veículo: " . $e->getMessage();
        }
    }

    // Função para relatório de veículos
    public function relatorioVeiculos() {
        $sql = "SELECT * FROM veiculos";
        $result = $this->conn->query($sql);

        if ($result->rowCount() > 0) {
            echo "<table><tr><th>ID</th><th>Aluno</th><th>Placa</th></tr>";
            while ($row = $result->fetch()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["aluno"] . "</td><td>" . $row["placa"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }

    public function atualiza($aluno_atualizar, $id_atualizar) {
        try {
            $sql = "UPDATE veiculos SET aluno=:aluno_atualizar WHERE id=:id_atualizar";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':aluno_atualizar', $aluno_atualizar);
            $stmt->bindParam(':id_atualizar', $id_atualizar);
            $stmt->execute();

            echo "Registro de veículo atualizado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao atualizar registro de veículo: " . $e->getMessage();
        }
    }

    // ... (Outras funções da classe, se necessário) ...
}

?>


