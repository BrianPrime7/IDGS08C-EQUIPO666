function validateLoginForm() {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordRegex = /^(?=.*\d)(?=.*[a-zA-Z])[0-9a-zA-Z]{8,}$/;

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (!emailRegex.test(email)) {
        alert('Ingresa un correo electrónico válido.');
        return false;
    }

    if (!passwordRegex.test(password)) {
        alert('La contraseña debe contener al menos 8 caracteres, incluyendo al menos un número y una letra.');
        return false;
    }

    // Aquí puedes realizar una solicitud AJAX para enviar los datos al servidor si lo deseas

    alert('Inicio de sesión exitoso!');
    return true;
}
