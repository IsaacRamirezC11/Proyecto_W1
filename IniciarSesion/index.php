<!-- Header -->
<head>
  <title>Login</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="./materialize-v1.0.0/materialize/css/materialize.css" media="screen,projection" />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- Navigation Bar -->
  <nav>
    <div class="nav-wrapper teal darken-4">
      <a href="#" class="brand-logo center"><img src="./media/favicon.png" width="50px" alt="icon"></a>
    </div>
  </nav>
</head>

<!-- Body -->
<body class="teal lighten-5">

  <!-- Login Form Container -->
  <div class="container">
    <div class="row">
      <div class="col s12 m8 l6 offset-m2 offset-l3">
        <div class="card hoverable">
          <div class="card-content teal darken-4 white-text">
            <span class="card-title center-align">Iniciar Sesión</span>
            <p class="center-align">Por favor, ingresa tus datos correctamente para acceder al sistema.</p>
          </div>
          <div class="card-content">
            <form method="POST" action="logica/loguear.php">
              <div class="input-field">
                <input id="no_cuenta" type="text" name="no_cuenta" class="validate" required>
                <label for="no_cuenta">Número de Cuenta</label>
              </div>
              <div class="input-field">
                <input id="clave" type="password" name="clave" class="validate" required>
                <label for="clave">Contraseña</label>
              </div>
              <div class="center-align">
                <button class="btn waves-effect waves-light teal darken-4" type="submit" name="action">
                  Iniciar Sesión <i class="material-icons right">login</i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="page-footer teal darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Proyecto Final</h5>
          <p class="grey-text text-lighten-4">Proyecto Final para Programación Web 2025-1</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">GitHub</h5>
          <ul>
            <li><a class="amber-text text-lighten-3" href="https://github.com/IsaacRamirezC11">GitHub</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Social Media</h5>
          <ul>
            <li><a class="amber-text text-lighten-3" href="https://www.youtube.com/@jmv_Isaac">Youtbue</a></li>
            <li><a class="amber-text text-lighten-3" href="https://x.com/jmv_Isaac0411">X</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <span>Made by <a class="orange-text text-lighten-3" href="#">Saúl Isaac Ramírez Cortés</a></span>
      </div>
    </div>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="./materialize-v1.0.0/materialize/js/materialize.js"></script>
</body>

