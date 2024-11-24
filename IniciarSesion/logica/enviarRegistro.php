<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$nombreUser=$_POST['nombre_usuario'];

$buscarusuario="SELECT * FROM  persona WHERE nombre_usuario ='$nombreUser'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){
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
            <title>Eliminar Usuario</title>
            <nav  >
        <div class='nav-wrapper deep-purple darken-4'>
        <a class='brand-logo'><img src='../media/favicon.png' width=60px alt='icon'></a>
        <ul id='nav-mobile' class='right hide-on-med-and-down' >
        <li><a class='waves-effect waves-light btn-small indigo darken-' href='../logica/salir.php' ><i class='material-icons left'>backspace</i>SALIR</a></li>
        </ul>
        </div>
    </nav>
        </head>
        
        <body class= 'black'>
            <div class='row'>
                <div>
                    <div>   
                    <br>
            <h3 class='center-align red-text' >El usuario ya esta registrado</h3>
            <br>
            <a class=' waves-effect waves-light btn-large deep-purple darken-4' href='../Registro.php'><i class='material-icons left'>group_add</i>Puedes generar un Nuevo registro</a>
            <a class=' waves-effect waves-light btn-large deep-purple darken-4' href='../Principal.php'><i class='material-icons left'>format_list_bulleted</i>Ver Registros</a>

                    </div>  
                </div>
            </div>
        

    
        </body>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        </html>";
        // Footer
echo "
<footer class='page-footer deep-purple darken-4'>
<div class='container'>
  <div class='row'>
    <div class='col l6 s12'>
      <h5 class='white-text'>Proyecto Final</h5>
      <p class='grey-text text-lighten-4'>Proyecto Final para Programacion Web 1 2025-1 </p>


    </div>
    <div class='col l3 s12'>
      <h5 class='white-text'>Github</h5>
      <ul>
        <li><a class='amber-text' href='https://github.com/RobertoJimenez25'>github</a></li>
      </ul>
    </div>
    <div class='col l3 s12'>
      <h5 class='white-text'>Redes</h5>
      <ul>
        <li><a class='amber-text' href='https://www.instagram.com/robert.jimenezc/'>Instagram</a></li>
        <li><a class='amber-text' href='https://open.spotify.com/user/motrorix?si=a477af4f3c904fe6'>Spotify</a></li>
      </ul>
    </div>
  </div>
</div>
<div class='footer-copyright'>
  <div class='container'>
  Made by <a class='orange-text text-lighten-3' >Roberto Jimenez</a>
  </div>
</div>
</footer>";

}else{

    mysqli_query($conexion,"INSERT INTO persona(
        nombre_usuario,carrera,no_cuenta,direccion,telefono,email,password)
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
            <title>Eliminar Usuario</title>
            <nav  >
        <div class='nav-wrapper deep-purple darken-4'>
        <a class='brand-logo'><img src='../media/iconologo.png' width=60px alt='icon'></a>
        <ul id='nav-mobile' class='right hide-on-med-and-down' >
        <li><a class='waves-effect waves-light btn-small indigo darken-' href='../logica/salir.php' ><i class='material-icons left'>backspace</i>SALIR</a></li>
        </ul>
        </div>
    </nav>
        </head>
        
        <body class= 'black'>
            <div class='row'>
                <div>
                    <div>   
            <h3 class='center-align white-text' >Usuario Creado con Exito</h3>
            <br>
            <a class=' waves-effect waves-light btn-large deep-purple darken-4' href='../Registro.php'><i class='material-icons left'>group_add</i>Puedes generar un Nuevo registro</a>
            <a class=' waves-effect waves-light btn-large deep-purple darken-4' href='../Principal.php'><i class='material-icons left'>format_list_bulleted</i>Ver Registros</a>

                    </div>  
                </div>
            </div>
        

    
        </body>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        </html>";
        // Footer
echo "
<footer class='page-footer deep-purple darken-4'>
<div class='container'>
  <div class='row'>
    <div class='col l6 s12'>
      <h5 class='white-text'>Proyecto Final</h5>
      <p class='grey-text text-lighten-4'>Proyecto Final para Programacion Web 1 2025-1 </p>


    </div>
    <div class='col l3 s12'>
      <h5 class='white-text'>Github</h5>
      <ul>
        <li><a class='amber-text' href='https://github.com/RobertoJimenez25'>github</a></li>
      </ul>
    </div>
    <div class='col l3 s12'>
      <h5 class='white-text'>Redes</h5>
      <ul>
        <li><a class='amber-text' href='https://www.instagram.com/robert.jimenezc/'>Instagram</a></li>
        <li><a class='amber-text' href='https://open.spotify.com/user/motrorix?si=a477af4f3c904fe6'>Spotify</a></li>
      </ul>
    </div>
  </div>
</div>
<div class='footer-copyright'>
  <div class='container'>
  Made by <a class='orange-text text-lighten-3' >Roberto Jimenez</a>
  </div>
</div>
</footer>";
}
 

?>