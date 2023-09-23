<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Realizar Consulta</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Realizar Consulta Médica</h1>
    </header>
    
    <nav>
        <!-- Inclua aqui o mesmo menu de navegação que está na sua página principal do médico -->
    </nav>
    
    <main>
        <h2>Formulário de Consulta</h2>
        <form action="processar_consulta.php" method="post">
            <!-- Campos do formulário para a consulta médica -->
            <label for="paciente">Selecione o Paciente:</label>
            <select id="paciente" name="paciente">
                <!-- Preencha esta lista com os pacientes do banco de dados -->
                <option value="1">Paciente 1</option>
                <option value="2">Paciente 2</option>
                <!-- Outros pacientes... -->
            </select>
            
            <label for="data">Data da Consulta:</label>
            <input type="date" id="data" name="data" required>
            
            <label for="sintomas">Sintomas:</label>
            <textarea id="sintomas" name="sintomas" rows="4" required></textarea>
            
            <label for="diagnostico">Diagnóstico:</label>
            <textarea id="diagnostico" name="diagnostico" rows="4" required></textarea>
            
            <label for="receita">Receita:</label>
            <textarea id="receita" name="receita" rows="4"></textarea>
            
            <input type="submit" value="Salvar Consulta">
        </form>
    </main>
</body>
</html>
