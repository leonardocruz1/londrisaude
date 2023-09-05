document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("loginForm");
    const loginEmailInput = document.getElementById("loginEmail");
    const loginSenhaInput = document.getElementById("loginSenha");

    loginForm.addEventListener("submit", function(event) {
        if (!validateEmail(loginEmailInput.value)) {
            alert("E-mail inválido.");
            event.preventDefault();
            return;
        }

        if (!validatePassword(loginSenhaInput.value)) {
            alert("Senha inválida. A senha deve conter no mínimo 8 caracteres.");
            event.preventDefault();
            return;
        }
    });

    function validateEmail(email) {
        // Implemente sua lógica de validação de e-mail aqui
        // Neste exemplo, estamos apenas verificando se o e-mail contém "@" e "."
        return email.includes("@") && email.includes(".");
    }

    function validatePassword(password) {
        // Implemente sua lógica de validação de senha aqui
        // Neste exemplo, estamos apenas verificando o comprimento mínimo da senha
        return password.length >= 8;
    }
});
