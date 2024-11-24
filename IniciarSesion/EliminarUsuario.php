<?php
session_start();
$no_cuenta = $_SESSION['usermane'];

if (!isset($no_cuenta)) {
    header("location: ./index.php");
} else {
    echo "
    <head>
        <!-- Import Google Icon Font -->
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <!-- Import materialize.css -->
        <link type='text/css' rel='stylesheet' href='./materialize-v1.0.0/materialize/css/materialize.css' media='screen,projection'/>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        <title>Eliminar Usuario</title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                margin: 0;
                background: linear-gradient(135deg, #ff5722, #ff9800); /* Fondo llamativo */
                color: white;
                overflow-y: auto; /* Permite el desplazamiento */
                font-family: 'Roboto', sans-serif;
            }
            main {
                flex: 1 0 auto;
                padding: 20px;
            }
            footer {
                background: linear-gradient(45deg, #00796b, #004d40); /* Footer vibrante */
                color: white;
                text-align: center;
            }
            .container {
                margin: 0 auto;
                max-width: 800px; /* Contenido centrado */
            }
            h3, h5, label {
                color: #ffeb3b; /* Títulos destacados */
                font-weight: bold;
                text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            }
            input, form {
                color: #ffffff;
                font-size: 16px;
            }
            input::placeholder {
                color: #ffcc80;
            }
            .btn {
                background: linear-gradient(45deg, #d50000, #ff1744); /* Botones brillantes */
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
            nav {
                background: linear-gradient(45deg, #673ab7, #512da8); /* Navbar llamativa */
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            }
            a {
                color: #ffab40;
                font-weight: bold;
                transition: color 0.3s;
            }
            a:hover {
                color: #ffd740;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <nav class='nav-extended'>
            <div class='nav-wrapper'>
                <a class='brand-logo'><img src='./media/favicon.png' width='60px' alt='icon'></a>
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
                <h3 class='center-align'>Eliminar Usuario</h3>
                <form action='./logica/deleteUsuario.php' method='post'>
                    <label><h5>Ingresa el Número de Cuenta del Usuario a eliminar</h5></label>
                    <hr>
                    <input type='text' name='no_cuenta' required maxlength='10' minlength='7' placeholder='Número de Cuenta'>
                    <br><br>
                    <button class='btn waves-effect waves-light' type='submit' name='action'>
                        Eliminar Usuario <i class='material-icons right'>delete_forever</i>
                    </button>
                </form>
                <div class='row'>
                    <a class='col s12 m6 waves-effect waves-light btn-large deep-purple darken-4' href='Principal.php'>
                        <i class='material-icons left'>format_list_bulleted</i>Registros
                    </a>
                    <a class='col s12 m6 waves-effect waves-light btn-large teal lighten-1' href='Registro.php'>
                        <i class='material-icons left'>group_add</i>Nuevo Registro
                    </a>
                </div>
            </div>
        </main>
        <footer class='page-footer'>
            <div class='container'>
                <div class='row'>
                    <div class='col l6 s12'>
                        <h5>Proyecto Final</h5>
                        <p>Proyecto Final para Programación Web 2025-1</p>
                    </div>
                    <div class='col l3 s12'>
                        <h5>GitHub</h5>
                        <ul>
                            <li><a href='https://github.com/IsaacRamirezC11'>GitHub</a></li>
                        </ul>
                    </div>
                    <div class='col l3 s12'>
                        <h5>Social Media</h5>
                        <ul>
                            <li><a href='https://www.youtube.com/@jmv_Isaac'>YouTube</a></li>
                            <li><a href='https://x.com/jmv_Isaac0411'>X</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='footer-copyright'>
                <div class='container'>
                    Made by <a>Saúl Isaac Ramírez Cortés</a>
                </div>
            </div>
        </footer>
    </body>
    ";
}
?>
