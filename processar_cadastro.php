<?php
// Configurações do banco de dados
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "londrisaude";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação dos dados (exemplo para e-mail e CPF)
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $senha = $_POST["senha"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email inválido.";
    } elseif (!preg_match("/^\d{3}\.\d{3}\.\d{3}-\d{2}$/", $cpf)) {
        echo "CPF inválido.";
    } else {
        // Verifique se o e-mail já existe no banco de dados
        $stmt = $conexao->prepare("SELECT idPaciente FROM Paciente WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "Este email já está em uso.";
        } else {
            // Use declarações preparadas para evitar injeção de SQL
            $stmt = $conexao->prepare("INSERT INTO Paciente (nome, cpf, email, telefone, senha) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nome, $cpf, $email, $telefone, $senha_hash);

            // Hash da senha (substitua pela lógica apropriada)
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

            if ($stmt->execute()) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro: " . $stmt->error;
            }

            $stmt->close();
        }
    }
}

$conexao->close();
?>
