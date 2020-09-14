<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>  
</head>
<body>
    <header>
    <!--Barra de navegacion horizontal-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="SystemSLP.php" title="Volver"><i class="fas fa-file-signature" style="font-size: 40px; color:green;"></i>  Control de Productos</a> 
            <button class="navbar-toggler" data-toggle="collapse" data-target="#menu1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu1">
                <ul class="navbar-nav mr-auto"></ul>
                <form class="form-inline" action="" method="POST">
                    <a href="#modal1" class="btn btn-success" data-toggle="modal"><i class="fas fa-search"></i></a>
                </form>
            </div>
        </nav>
    </header>

    <!-- MODAL -->

    <div class="modal fade" tabindex="-1" id="modal1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Buscador</h1>
                    <button class="close" type="button" data-dismiss='modal'>&times;</button>
                </div>
                <div class="modal-body">
                    <form action="busqueda.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Codigo de producto">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary form-control" type="submit" name="busca"><strong>Buscar</strong></button>
                        </div>
                    </form>
                    <hr/>
                </div>
            </div>
        </div>
    </div>


    <!--Tabla de los productos-->
    <section>
        <br><br>   
    <?php include('select.php')?>
    </section>

    <section>
     <?php 

     //Formulario de busqueda-para saber el total de stock y sus caracteristicas
     //if(isset($_POST['search'])){
        
        //busqueda
       // include('busqueda.php');

     //}
     
     ?>   

    </section>


</body>
</html>

