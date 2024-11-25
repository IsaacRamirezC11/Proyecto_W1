<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$nombreUser=$_POST['nombre_usuario'];

$buscarusuario="SELECT * FROM  persona WHERE nombre_usuario ='$nombreUser'";

$resultado = $conexion -> query($buscarusuario);
$count = mysqli_num_rows($resultado);

if($count == 1) {
    echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <!--Import Google Icon Font-->
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <!--Import materialize.css-->
    <link type='text/css' rel='stylesheet' href='../materialize-v1.0.0/materialize/css/materialize.css'  media='screen,projection'/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Usuario Registrado</title>
    <nav>
        <div class='nav-wrapper teal darken-3'>
            <a class='brand-logo center'><img src='../media/favicon.png' width=60px alt='icon'></a>
        </div>
    </nav>
</head>

<body class='grey lighten-4'>
    <div class='container'>
        <div class='row center-align'>
            <div class='col s12'>
                <br><br>
                <h3 class='red-text text-darken-2'>El usuario ya está registrado</h3>
                <br>
                <a class='waves-effect waves-light btn-large teal darken-3' href='../Registro.php'>
                    <i class='material-icons left'>group_add</i>Generar Nuevo Registro
                </a>
                <a class='waves-effect waves-light btn-large teal darken-3' href='../Principal.php'>
                    <i class='material-icons left'>format_list_bulleted</i>Ver Registros
                </a>
            </div>
        </div>
    </div>

    <footer class='page-footer teal darken-3'>
        <div class='container'>
            <div class='row'>
                <div class='col l6 s12'>
                    <h5 class='white-text'>Proyecto Final</h5>
                    <p class='grey-text text-lighten-4'>Proyecto Final para Programación Web 1 2025-1</p>
                </div>
                <div class='col l3 s12'>
                    <h5 class='white-text'>GitHub</h5>
                    <ul>
                        <li><a class='amber-text text-lighten-3' href='https://github.com/IsaacRamirezC11'>GitHub</a></li>
                    </ul>
                </div>
                <div class='col l3 s12'>
                    <h5 class='white-text'>Redes</h5>
                    <ul>
                        <li><a class='amber-text text-lighten-3' href='https://www.youtube.com/@jmv_Isaac'>YouTube</a></li>
                        <li><a class='amber-text text-lighten-3' href='https://x.com/jmv_Isaac0411'>X</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='footer-copyright'>
            <div class='container center-align'>
                Made by <a class='orange-text text-lighten-3'>Roberto Jimenez</a>
            </div>
        </div>
    </footer>
</body>

</html>";
} else {
    mysqli_query($conexion, "INSERT INTO persona(
        nombre_usuario, carrera, no_cuenta, direccion, telefono, email, password)
        VALUES(
            '$_POST[nombre_usuario]',
            '$_POST[carrera]',
            '$_POST[no_cuenta]',
            '$_POST[direccion]',
            '$_POST[telefono]',
            '$_POST[email]',
            '$_POST[password]'
        )");

    echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <!--Import Google Icon Font-->
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <!--Import materialize.css-->
    <link type='text/css' rel='stylesheet' href='../materialize-v1.0.0/materialize/css/materialize.css'  media='screen,projection'/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Usuario Creado</title>
    <nav>
        <div class='nav-wrapper teal darken-3'>
            <a class='brand-logo center'><img src='../media/favicon.png' width=60px alt='icon'></a>
        </div>
    </nav>
</head>

<body class='grey lighten-4'>
    <div class='container'>
        <div class='row center-align'>
            <div class='col s12'>
                <br><br>
                <h3 class='teal-text text-darken-2'>Usuario Creado con Éxito</h3>
                <br>
                <a class='waves-effect waves-light btn-large teal darken-3' href='../Registro.php'>
                    <i class='material-icons left'>group_add</i>Generar Nuevo Registro
                </a>
                <a class='waves-effect waves-light btn-large teal darken-3' href='../Principal.php'>
                    <i class='material-icons left'>format_list_bulleted</i>Ver Registros
                </a>
            </div>
        </div>
    </div>

    <footer class='page-footer teal darken-3'>
        <div class='container'>
            <div class='row'>
                <div class='col l6 s12'>
                    <h5 class='white-text'>Proyecto Final</h5>
                    <p class='grey-text text-lighten-4'>Proyecto Final para Programación Web 1 2025-1</p>
                </div>
                <div class='col l3 s12'>
                    <h5 class='white-text'>GitHub</h5>
                    <ul>
                        <li><a class='amber-text text-lighten-3' href='https://github.com/IsaacRamirezC11'>GitHub</a></li>
                    </ul>
                </div>
                <div class='col l3 s12'>
                    <h5 class='white-text'>Redes</h5>
                    <ul>
                        <li><a class='amber-text text-lighten-3' href='https://www.youtube.com/@jmv_Isaac'>YouTube</a></li>
                        <li><a class='amber-text text-lighten-3' href='https://x.com/jmv_Isaac0411'>X</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='footer-copyright'>
            <div class='container center-align'>
                Made by <a class='orange-text text-lighten-3'>Saúl Isaac Ramírez Cortés</a>
            </div>
        </div>
    </footer>
</body>

</html>";
}
?>
