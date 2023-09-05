document.addEventListener("DOMContentLoaded", function() {
    const forgotPasswordButton = document.getElementById("forgotPasswordButton");
    const noAccountButton = document.getElementById("noAccountButton");

    forgotPasswordButton.addEventListener("click", function() {
        alert("Um e-mail foi enviado para recuperar sua senha.");
    });

    noAccountButton.addEventListener("click", function() {
        alert("Redirecionando para a tela de cadastro.");
    });
});
