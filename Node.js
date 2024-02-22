const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public'));

app.post('/login', (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    // Aquí implementa la validación del lado del servidor, por ejemplo, verificar en la base de datos

    if (email && password) {
        // Lógica de autenticación del servidor
        // Puedes verificar los datos en la base de datos y responder en consecuencia
        res.json({ success: true, message: 'Inicio de sesión exitoso' });
    } else {
        res.status(400).json({ success: false, message: 'Datos de inicio de sesión incorrectos' });
    }
});

app.listen(port, () => {
    console.log(`Servidor iniciado en http://localhost:${port}`);
});
