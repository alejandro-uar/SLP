<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>  
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/carrosel.css">
    <link rel="icon" href="../img/bd.png">
    <title>SystemSLP</title>
</head>
<body>
    <header>
    <!--Barra de navegacion horizontal-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <!--Logo-->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#menu1">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a href="SystemSLP.php" title="Refrescar" class="navbar-brand">
              <i class="fas fa-database" style="color: aqua;"></i>   Sistema De Gestion
            </a>
            <!--Link-->
            <div class="collapse navbar-collapse" id="menu1">
                <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link" href="grupos.php">Sector</a>
                <a class="nav-item nav-link" href="../php/inventario.php">Productos</a>
                <a class="nav-item nav-link" href="ayuda.html">¡Ayuda!</a>
                </div>
            </div>
            <br>
            <br>
        </nav>
    </header>

    <section>

    <!--Carousel - Slider of Images -->

    <br>
    <br>
    <br>
    <br>

    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
          <img class="d-block w-100 uno" src="../img/p.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="../img/p.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="../img/p.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </section>
  

</body>
</html>