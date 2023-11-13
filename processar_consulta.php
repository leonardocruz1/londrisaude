<?php
// Configurações do banco de dados
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "londrisaude";

// Conexão com o banco de dados
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paciente = $_POST["paciente"];
    $data = $_POST["data"];
    $sintomas = $_POST["sintomas"];
    $diagnostico = $_POST["diagnostico"];
    $receita = $_POST["receita"];

    // Use declarações preparadas para evitar injeção de SQL
    $stmt = $conexao->prepare("INSERT INTO ConsultaMedica (idPaciente, dataConsulta, sintomas, diagnostico, receita) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $paciente, $data, $sintomas, $diagnostico, $receita);

    if ($stmt->execute()) {
        echo "Consulta médica registrada com sucesso!";
    } else {
        echo "Erro ao registrar consulta médica: " . $stmt->error;
    }

    $stmt->close();
}

$conexao->close();
?>
