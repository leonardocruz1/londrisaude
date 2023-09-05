document.addEventListener("DOMContentLoaded", function() {
    const cadastroForm = document.getElementById("cadastroForm");
    const submitBtn = document.getElementById("submitBtn");

    cadastroForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Evita o envio padrão do formulário

        const nome = document.getElementById("nome").value;
        const email = document.getElementById("email").value;
        const cpf = document.getElementById("cpf").value;
        const telefone = document.getElementById("telefone").value;
        const cns = document.getElementById("cns").value;
        const senha = document.getElementById("senha").value;

        // Aqui você poderia processar e gravar os dados, por exemplo, enviando para um servidor
        // Neste exemplo, apenas exibiremos os dados no console
        console.log("Nome:", nome);
        console.log("E-mail:", email);
        console.log("CPF:", cpf);
        console.log("Telefone:", telefone);
        console.log("CNS:", cns);
        console.log("Senha:", senha);
    });
});
