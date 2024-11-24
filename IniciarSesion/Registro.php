<?php
session_start();
$no_cuenta = $_SESSION['usermane'];

if (!isset($no_cuenta)) {
    header("location: ./index.php");
} else {
    // Header
    echo "
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        <!-- Materialize CSS -->
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <link type='text/css' rel='stylesheet' href='./materialize-v1.0.0/materialize/css/materialize.css' media='screen,projection'/>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
        <title>Registro de Usuarios</title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                margin: 0;
                background: linear-gradient(45deg, #ff5722, #ff9800); /* Fondo llamativo */
                color: white;
                font-family: 'Roboto', sans-serif;
            }
            main {
                flex: 1 0 auto;
                padding: 20px;
            }
            footer {
                background: linear-gradient(45deg, #004d40, #00796b); /* Footer vibrante */
                color: white;
                position: relative;
                bottom: 0;
                width: 100%;
                text-align: center;
            }
            .container {
                margin-top: 20px;
                max-width: 900px; /* Contenido centrado */
            }
            form input, form label {
                color: #ffcc80; /* Texto y etiquetas llamativas */
                font-size: 16px;
            }
            form input::placeholder {
                color: #ffd740; /* Placeholder brillante */
            }
            .btn-large {
                margin: 20px 0;
                background: linear-gradient(45deg, #d50000, #ff1744); /* Botones vibrantes */
                border-radius: 25px;
                font-weight: bold;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
                transition: transform 0.3s, box-shadow 0.3s;
            }
            .btn:hover {
                background: linear-gradient(45deg, #ff1744, #d50000); /* Hover en botones */
                transform: scale(1.05);
                box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.4);
            }
            .nav-extended {
                background: linear-gradient(45deg, #4a148c, #8e24aa); /* Barra de navegación llamativa */
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            }
            .nav-title {
                font-size: 1.5rem;
                color: #e1bee7; /* Título claro */
                text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            }
            a {
                color: #ffab40; /* Links brillantes */
                font-weight: bold;
            }
            a:hover {
                color: #ffd740; /* Hover en links */
                text-decoration: underline;
            }
            h3, h5 {
                color: #ffeb3b; /* Títulos destacados */
                font-weight: bold;
                text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            }
            hr {
                border: 1px solid #ffcc80; /* Línea divisora llamativa */
            }
        </style>
    </head>
    <body>
        <nav class='nav-extended'>
            <div class='nav-wrapper'>
                <a href='#' class='brand-logo'><img src='./media/favicon.png' width='60px' alt='icon'></a>
                <ul id='nav-mobile' class='right hide-on-med-and-down'>
                    <li><a class='waves-effect waves-light btn-small indigo darken-4' href='logica/salir.php'><i class='material-icons left'>backspace</i>SALIR</a></li>
                </ul>
            </div>
            <div class='nav-content'>
                <span class='nav-title'>¡Hola! Tú número de cuenta es $no_cuenta</span>
            </div>
        </nav>
        <main>
            <div class='container'>
                <h3 class='center-align'>Registro de Nuevo Usuario</h3>
                <form action='./logica/enviarRegistro.php' method='post'>
                    <div class='input-field'>
                        <input type='text' name='nombre_usuario' required maxlength='100' minlength='2' placeholder='Nombre del Usuario'>
                        <label for='nombre_usuario'>Nombre del Usuario</label>
                    </div>
                    <div class='input-field'>
                        <input type='text' name='carrera' required maxlength='100' minlength='3' placeholder='Carrera'>
                        <label for='carrera'>Carrera</label>
                    </div>
                    <div class='input-field'>
                        <input type='text' name='no_cuenta' required maxlength='10' minlength='7' placeholder='Número de Cuenta'>
                        <label for='no_cuenta'>Número de Cuenta</label>
                    </div>
                    <div class='input-field'>
                        <input type='text' name='direccion' required maxlength='100' minlength='2' placeholder='Dirección Particular'>
                        <label for='direccion'>Dirección Particular</label>
                    </div>
                    <div class='input-field'>
                        <input type='text' name='telefono' required maxlength='10' minlength='10' placeholder='Teléfono'>
                        <label for='telefono'>Teléfono</label>
                    </div>
                    <div class='input-field'>
                        <input type='email' name='email' required maxlength='100' placeholder='Correo Electrónico'>
                        <label for='email'>Correo Electrónico</label>
                    </div>
                    <div class='input-field'>
                        <input type='password' name='password' required maxlength='8' minlength='8' placeholder='Contraseña'>
                        <label for='password'>Contraseña</label>
                    </div>
                    <button class='btn waves-effect waves-light btn-large' type='submit' name='action'>
                        Enviar Registro <i class='material-icons right'>send</i>
                    </button>
                </form>
                <div class='row'>
                    <a class='col s6 waves-effect waves-light btn-large deep-purple lighten-1' href='EliminarUsuario.php'>
                        <i class='material-icons left'>delete_forever</i>Eliminar Usuario
                    </a>
                    <a class='col s6 waves-effect waves-light btn-large teal lighten-1' href='Principal.php'>
                        <i class='material-icons left'>format_list_bulleted</i>Registros
                    </a>
                </div>
            </div>
        </main>
        <footer class='page-footer'>
            <div class='container'>
                <div class='row'>
                    <div class='col l6 s12'>
                        <h5 class='white-text'>Proyecto Final</h5>
                        <p class='grey-text text-lighten-4'>Proyecto Final para Programación Web 2025-1</p>
                    </div>
                    <div class='col l3 s12'>
                        <h5 class='white-text'>GitHub</h5>
                        <ul>
                            <li><a class='amber-text' href='https://github.com/IsaacRamirezC11'>GitHub</a></li>
                        </ul>
                    </div>
                    <div class='col l3 s12'>
                        <h5 class='white-text'>Social Media</h5>
                        <ul>
                            <li><a class='amber-text' href='https://www.youtube.com/@jmv_Isaac'>YouTube</a></li>
                            <li><a class='amber-text' href='https://x.com/jmv_Isaac0411'>X</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='footer-copyright'>
                <div class='container'>
                    Made by <a class='orange-text text-lighten-3'>Saúl Isaac Ramírez Cortés</a>
                </div>
            </div>
        </footer>
    </body>";
}
?>
