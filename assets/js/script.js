document.addEventListener("DOMContentLoaded", () => {
    const registroForm = document.getElementById("registroForm");
    if (registroForm) {
        registroForm.addEventListener("submit", function(event) {
            const pass = document.getElementById("password").value;
            const confirmPass = document.getElementById("confirm_password").value;

            if (pass !== confirmPass) {
                alert("Las contraseñas no coinciden. Por favor, verifícalas.");
                event.preventDefault();
            }
        });
    }
});