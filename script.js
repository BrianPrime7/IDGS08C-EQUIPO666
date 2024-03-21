function openTab(tabName) {
    var tabs = document.getElementsByClassName("tab-content");
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].style.display = "none";
    }

    document.getElementById(tabName).style.display = "block";
}

function registerUser(event) {
    event.preventDefault();

    var form = document.getElementById("registerForm");
    var formData = new FormData(form);

    fetch('register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        
        if (data.message === 'Registro exitoso') {
            // Limpiar el formulario después de un registro exitoso
            form.reset();
        }
    })
    .catch(error => console.error('Error al registrar:', error));
}

function loginUser(event) {
    event.preventDefault();

    var form = document.getElementById("loginForm");
    var formData = new FormData(form);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.message === 'Inicio de sesión exitoso') {
            window.location.href = 'dispets.php';
            alert('Inicio de sesión exitoso');
        } else {
            // Mostrar un mensaje de error específico
            alert('Error al iniciar sesión: ' + data.message);
        }
    })
    .catch(error => console.error('Error al iniciar sesión:', error));
}


