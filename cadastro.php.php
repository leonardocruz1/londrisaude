<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "LondriSaude";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $senha = $_POST["senha"];

    // Inserção dos dados na tabela Paciente
    $sql = "INSERT INTO Paciente (nome, cpf, email, telefone) VALUES ('$nome', '$cpf', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
