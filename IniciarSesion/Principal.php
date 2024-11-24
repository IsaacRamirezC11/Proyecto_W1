<?php 
session_start();
$no_cuenta = $_SESSION['usermane']; // Número de cuenta del usuario

if (!isset($no_cuenta)) {
    header("location: ./Proyecto/index.php");
} else {
    echo "
    <head>
      <title>Principal</title>
      <!--Import Google Icon Font-->
      <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
      <!--Import materialize.css-->
      <link type='text/css' rel='stylesheet' href='./materialize-v1.0.0/materialize/css/materialize.css' media='screen,projection'/>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
      
      <!-- Estilo adicional -->
      <style>
        body {
          background-color: #311b92; /* Color morado oscuro */
          color: white;
          margin: 0;
          display: flex;
          flex-direction: column;
          min-height: 100vh;
        }
        main {
          flex: 1 0 auto;
          padding-bottom: 50px;
        }
        table.striped thead {
          background-color: #1e88e5; /* Azul vivo */
        }
        table.striped tbody tr:hover {
          background-color: #ffeb3b; /* Amarillo vivo */
        }
        .btn-large {
          margin-top: 20px;
          border-radius: 10px;
        }
      </style>
      
      <nav class='nav-extended'>
        <div class='nav-wrapper blue darken-3'>
          <a href='#' class='brand-logo'><img src='./media/favicon.png' width=60px alt='icon'></a>
          <ul id='nav-mobile' class='right hide-on-med-and-down'>
            <li><a class='waves-effect waves-light btn-small red darken-1' href='logica/salir.php'><i class='material-icons left'>backspace</i>SALIR</a></li>
          </ul>
        </div>
        <div class='nav-content blue darken-3'>
          <span class='nav-title'>¡Hola! Tú número de cuenta es $no_cuenta</span>
        </div>
      </nav>
    </head>";

    require "./logica/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    $consulta_sql = "SELECT * FROM persona";
    $resultado = $conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado);

    echo "
    <body>
      <main>
        <div class='container'>
          <h4 class='center-align'>Usuarios Registrados</h4>
          <table class='striped centered responsive-table'>
            <thead>
              <tr>
                <th>Usuario</th>
                <th>No Cuenta</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo Electrónico</th>
                <th>Contraseña</th>
                <th>Fecha de Registro</th>
                <th>Permisos</th>
              </tr>
            </thead>
            <tbody>";
      
    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "
              <tr>
                <td>{$row['nombre_usuario']}</td>
                <td>{$row['no_cuenta']}</td>
                <td>{$row['direccion']}</td>
                <td>{$row['telefono']}</td>
                <td>{$row['email']}</td>
                <td>{$row['password']}</td>
                <td>{$row['fecha_registro']}</td>
                <td>{$row['permisos']}</td>
              </tr>";
        }
    } else {
        echo "<tr><td colspan='8' class='center-align red-text'>Sin registros disponibles</td></tr>";
    }

    echo "
            </tbody>
          </table>
          <div class='row center-align'>
            <a class='col s12 m4 offset-m2 waves-effect waves-light btn-large purple lighten-2' href='EliminarUsuario.php'>
              <i class='material-icons left'>delete_forever</i>Eliminar Usuario
            </a>
            <a class='col s12 m4 waves-effect waves-light btn-large green lighten-1' href='Registro.php'>
              <i class='material-icons left'>group_add</i>Nuevo Registro
            </a>
          </div>
        </div>
      </main>

      <footer class='page-footer purple darken-3'>
        <div class='container'>
          <div class='row'>
            <div class='col l6 s12'>
              <h5 class='white-text'>Proyecto Final</h5>
              <p class='grey-text text-lighten-4'>Proyecto Final Login con Registros</p>
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
                <li><a class='amber-text' href='https://www.youtube.com/@jmv_Isaac'>Youtube</a></li>
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

