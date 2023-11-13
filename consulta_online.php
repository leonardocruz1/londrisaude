<?php
// Verifique se a sessão já foi iniciada ou restaure-a.
session_start();

// Verifique se o ID do paciente foi passado como parâmetro.
if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
    $idPaciente = $_GET['idPaciente'];

    // Verifique se a fila já existe ou crie uma nova.
    if (!isset($_SESSION['fila_consulta']) || !is_array($_SESSION['fila_consulta'])) {
        $_SESSION['fila_consulta'] = array();
    }

    // Verifique se o paciente já está na fila.
    if (in_array($idPaciente, $_SESSION['fila_consulta'])) {
        echo "Você já está na fila de atendimento.";
    } else {
        // Adicione o paciente à fila.
        $_SESSION['fila_consulta'][] = $idPaciente;
        echo "Você foi adicionado à fila de atendimento.";
    }

    // Conte o número de pacientes na fila.
    $numPacientesNaFila = count($_SESSION['fila_consulta']);
} else {
    echo "ID do paciente inválido.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consulta Online</title>
    <!-- Inclua aqui quaisquer estilos ou scripts necessários para a página -->
</head>
<body>
    <h1>Consulta Online</h1>
    <p><?php echo "Pacientes na fila: $numPacientesNaFila"; ?></p>
    <!-- Coloque aqui o código para a consulta online, como a chamada por vídeo, se necessário -->
</body>
</html>
