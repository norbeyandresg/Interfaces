<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Todo Revistas | tienda online </title>

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css" >

    <!-- Backend -->
    <?php 
      include("backend/conexion_bd.php");
    ?>

  </head>
  <body class="no-space">

    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light mynav no-space">
      <a class="navbar-brand no-space" href="#">
        <img src="img/logo.png" class="brand-image">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mycollapsenav" aria-controls="mycollapsenav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mycollapsenav">

          <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link text-white mx-5" href="#">Inicio</a>
            <a class="nav-item nav-link text-white mx-5" href="#">Temáticas</a>
            <a class="nav-item nav-link text-white mx-5" href="#">Contacto</a>
          </div>
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="#"><img src="img/icon_ubicacion_b.png" class="nav-image"></a>
            <a class="nav-item nav-link" href="#"><img src="img/icon_facebook_b.png" class="nav-image"></a>
            <a class="nav-item nav-link" href="#"><img src="img/icon_linkeid_b.png" class="nav-image"></a>
          </div>
        </div>
    </nav>


    <!-- jumbotron -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-lg-6 my-auto">
          <p class="big-text bold"> Suscríbete a tus revistas favoritas por tan solo $29.000 al mes </p>
          <p class="normal-text"> Para que no te pierdas ningún detalle de los mejores contenidos. </p>
        </div>
        <div class="col-6 col-lg-6">
          <img src="img/social_media.png" class="social-image">
        </div>
      </div>
    </div>

    <!-- red banner -->
    <div class="banner">
      <p class="normal-text bold banner-text"> Podrás leer tus revistas desde cualquier lugar, cualquier dispositivo </p>
    </div>

    <!-- forms -->
    <div class="row">
      <!-- left col -->
      <div class="col-6 col-lg-6 text-center left-col">
        <div class="mar-bot">
          <p class="input-title bold"> Conoce si te encuentras registrado en nuestro sistema </p>

          <form method="GET" onsubmit="searchTuple(); return false;">
            <div class="input-group mx-5">
              <img src="img/icon_buscar.png" class="input-image">
              <input type="number" class="custom-input" placeholder="Número de identificación" name="search" id="search">
            </div>
            <button type="button" class="btn btn-danger"> Buscar </button>
          </form>
        </div>

        <form method="POST" onsubmit="suscribeUser(); return false;">
          <p class="input-title bold"> Suscribirme a una revista </p>
          <div class="input-group mx-5">
            <img src="img/icon_identificacion.png" class="input-image">
            <input type="number" class="custom-input" placeholder="Número de identificación" id="identification_subs">
          </div>
          <div class="input-group mx-5">
            <img src="img/icon_revista.png" class="input-image">
            <select class="custom-input" id="magazine">
              <option value="#">Seleccione una revista</option>
                <?php 
                  while($valores = mysqli_fetch_array($queryRevista))
                  {
                    echo '<option value="'.$valores['id_revista'].'">'.$valores['nombre_revista'].'</option>';
                  }
                ?>
            </select>
          </div>
          <button type="button" class="btn btn-danger"> Buscar </button>
        </form>
      </div>

      <!-- right col -->
      <div class="col-6 col-lg-6 text-center right-col">
        <img src="img/bombillo.png">
        <p class="input-title bold">¿No te encuentras registrado? ¿No puedes realizar la suscripción? Completa el formulario de registro para continuar </p>
        <hr>
        <div class="padding-x">
          <p class="input-title bold"> Registrate en nuestro sistema </p>
          <p class="medium-text"> Aplica para usuarios que no se encuentras registrados previamente </p>
        </div>

        <div class="row">
          <div class="col-6 col-lg-6">
            <form method="POST" onsubmit="insertUser(); return false;">
              <input type="number" class="custom-input" placeholder="Número de identificación" id="identification">
              <input type="text" class="custom-input" placeholder="Apellido" id="last_name">
              <input type="number" min="18" class="custom-input" placeholder="Edad" id="age">
            </form>
          </div>

          <div class="col-6 col-lg-6">
            <form method="POST" onsubmit="insertUser(); return false;">
              <input type="text" class="custom-input" placeholder="Nombre" id="first_name">
              <input type="email" class="custom-input" placeholder="Correo electronico" id="email">
              <select class="custom-input" id="city">
                <option value="#">Seleccione una ciudad</option>
                <?php
                  while($valores = mysqli_fetch_array($queryCiudad))
                  {
                    echo '<option value="'.$valores['cod_ciudad'].'">'.$valores['nombre_ciudad'].'</option>';
                  }
                ?>
              </select>
            </form>
          </div>
        </div>
        <p class="small-text mt-4"> Al hacer click en "Registrarme" estoy aceptando los términos y condiciones, políticas de datos y cookies </p>
        <button type="button" class="btn btn-danger">Registrarme</button>
      </div>
    </div>
    <!-- footer -->
    <div class="row">
      <div class="col-6 col-lg-6">
        <div id="rounded">
          <p class="footer-text bold"> TodoRevistas, tienda online &#169; </p>
          <p class="footer-small-text"> todos los derechos reservados </p>
        </div>
      </div>

      <div class="col-6 right-col">
        <div class="row">
          <div class="col-2 col-lg-2">
            <p class="small-text pt-2"> Aliados</p>
          </div>
          <div class="col-2 col-lg-2 text-center">
            <img src="img/cromos.png" class="footer-image">
          </div>
          <div class="col-2 col-lg-2">
            <img src="img/fucsia.png" class="footer-image">
          </div>
          <div class="col-2 col-lg-2">
            <img src="img/jetset.png" class="footer-image">
          </div>
          <div class="col-2 col-lg-2">
            <img src="img/dinero.png" class="footer-image">
          </div>
          <div class="col-2 col-lg-2">
            <img src="img/semana.png" class="footer-image">
          </div>
        </div>
      </div>
    </div>

    <!-- base JS -->
    <script src="backend/subject_base.js"></script>


    <!-- JS  Core -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
