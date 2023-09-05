document.addEventListener("DOMContentLoaded", function() {
    const filtroForm = document.getElementById("filtroForm");
    const relatorioResultado = document.getElementById("relatorioResultado");
    
    filtroForm.addEventListener("submit", function(event) {
        event.preventDefault();
        
        const medicoId = document.getElementById("medicoId").value;
        const dataInicio = document.getElementById("dataInicio").value;
        const dataFim = document.getElementById("dataFim").value;
        
        // Aqui você pode chamar uma função para gerar o relatório
        const relatorio = gerarRelatorio(medicoId, dataInicio, dataFim);
        
        // Exibe o relatório na página
        relatorioResultado.innerHTML = relatorio;
    });
    
    function gerarRelatorio(medicoId, dataInicio, dataFim) {
        // Simulação de dados do relatório
        const dadosRelatorio = [
            { idPaciente: 1, nomePaciente: "Thor, filho de Odin", dataAtendimento: "2023-08-15", tempoAtendimento: "30 minutos" },
            { idPaciente: 2, nomePaciente: "Bruce Bener", dataAtendimento: "2023-08-16", tempoAtendimento: "45 minutos" },
            // Adicione mais dados do relatório conforme necessário
        ];
        
        // Gera a tabela HTML com os dados do relatório
        const relatorioHtml = `
            <h2>Relatório de Atendimentos</h2>
            <p>ID do Médico: ${medicoId}</p>
            <p>Data de Início: ${dataInicio}</p>
            <p>Data de Fim: ${dataFim}</p>
            <table>
                <tr>
                    <th>ID do Paciente</th>
                    <th>Nome do Paciente</th>
                    <th>Data de Atendimento</th>
                    <th>Tempo de Atendimento</th>
                </tr>
                ${dadosRelatorio.map(dado => `
                <tr>
                    <td>${dado.idPaciente}</td>
                    <td>${dado.nomePaciente}</td>
                    <td>${dado.dataAtendimento}</td>
                    <td>${dado.tempoAtendimento}</td>
                </tr>`).join("")}
            </table>
        `;
        
        return relatorioHtml;
    }
});
