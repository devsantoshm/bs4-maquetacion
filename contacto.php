<!doctype html>
<html lang="en">
<head>
 <title>Contacto - NETWORK | Soluciones Móbiles para empresas</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/all.min.css">
 <!-- Carga de Galeria de imágenes -->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/animate.min.css">
 <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body class="paginas-internas">
  <section class="bienvenidos">
    <header class="encabezado navbar fixed-top" role="banner" id="encabezado">
     <div class="container">
      <a href="index.php" class="logo">
       <img src="images/logo.svg" alt="Logo del sitio">
     </a>

     <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
       <i class="fa fa-search"></i>
     </button>
     <!-- hidden-md-up = d-md-none -->
     <button type="button" class="boton-menu d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
       <i class="fa fa-bars" aria-hidden="true"></i>
     </button>

     <form action="#" id="bloque-buscar" class="collapse">
       <div class="contenedor-bloque-buscar">
        <input type="text" placeholder="Buscar...">
        <input type="submit" value="Buscar">
      </div>
    </form>

    <nav id="menu-principal" class="collapse">
     <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="nosotros.php">Nosotros</a></li>
      <li><a href="servicios.php">Servicios</a></li>
      <li class="active"><a href="contacto.php">Contacto</a></li>
    </ul>
  </nav>
</div>
</header>

<div class="texto-encabezado text-center">
 <div class="container">
  <h1 class="display-4 wow bounceIn">
  Contacto</h1>
  <p class="wow bounceIn" data-wow-delay=".3s">Estamos listos para ayudarte</p>   
</div>
</div>

</section>

<section class="ruta py-3">
  <div class="container">
    <div class="row">
      <div class="col-12 text-right">
        <a href="index.php">Inicio</a> » Contacto
      </div>
    </div>
  </div>
</section>

<main class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2 class="mb-3">Formulario de contacto</h2>
        <form action="#">
          <div class="form-group row">
            <label for="nombre" class="col-md-4 col-form-label">Nombre</label>
            <div class="col-md-8">
              <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label">Email</label>
            <div class="col-md-8">
              <input class="form-control" type="text" id="email" name="email" placeholder="Ingrese su email" data-toggle="tooltip" data-placement="top" title="Ingrese su email">
            </div>
          </div>
          <div class="form-group row">
            <label for="mensaje" class="col-md-4 col-form-label">Mensaje</label>
            <div class="col-md-8">
              <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Ingrese su mensaje" data-toggle="tooltip" data-placement="top" title="Ingrese un mensaje"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-8 offset-md-4">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="reset" class="btn btn-secondary">Limpiar</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <h3>Detalles de contacto</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque laborum commodi suscipit vitae eius perferendis consequuntur? Modi nihil aliquam, quas deserunt vitae atque suscipit ratione rerum eveniet. Qui, adipisci ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque laborum commodi suscipit vitae eius perferendis consequuntur? Modi nihil aliquam, quas deserunt vitae atque suscipit ratione rerum eveniet. Qui, adipisci ad.</p>
      </div>
    </div>
  </div>
</main>

<footer class="piedepagina py-3" role="contentinfo">
  <div class="container">
   <p>2016 © NETWORK Todos los derechos reservados</p>
   <ul class="redes-sociales">
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
  </ul>
</div>
</footer>

<a data-scroll class="ir-arriba" href="#encabezado"><i class="fas fa-arrow-circle-up"></i></a>

<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="js/popper.min.js"></script>
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/sitio.js"></script>
</body>
</html>