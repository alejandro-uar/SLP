<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('header.php')?>
</head>
<body>
    <header style="background: #2c3e50;color:#fff;padding:10px;">
        <a href="SystemSLP.php" class="container h1" style="text-decoration: none; color:#fff;" title="Volver">Sectores</a>
    </header>
    <br>
    <ul class="nav justify-content-center nav-tabs nav-justified">
        <li class="nav-item">
          <a class="nav-link active btn btn-dark" style="border-radius: 0%;" href="#lacteos" role="tab" data-toggle="tab" aria-controls="lacteos">Lacteos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-dark" style="border-radius: 0%;" href="#bebidas" role="tab" data-toggle="tab" aria-controls="bebidas">Bebidas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-dark" style="border-radius: 0%;" href="#golosinas" role="tab" data-toggle="tab" aria-controls="golosinas">Golosinas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-dark" style="border-radius: 0%;" href="#limpieza" role="tab" data-toggle="tab" aria-controls="limpieza">Limpieza</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-dark" style="border-radius: 0%;" href="#comestible" role="tab" data-toggle="tab" aria-controls="comestible">Comestibles</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="lacteos">
            <?php
            include('conexion.php');
            $sql="SELECT * FROM productos WHERE cd_stock = 1";
            $query=mysqli_query($conexion,$sql);
            echo "<br><div class='container-fluid'>";
            echo"<div class='table-responsive col-md-12'>
            <table class='table table-bordered text-center table-hover'>
            <tr>
            <thead class='table-dark bg-dark'>
            <th>ID_Producto</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Vencimiento</th>
            <th>Cantidad_Inicíal</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Stock</th>
            <th>Grupos</th>
            </thead>
       </tr>";
  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
  {
       echo "   
            <tr>
                 <td>$row[cd_producto]</td>
                 <td>$row[nombre]</td>
                 <td>$row[descripción]</td>
                 <td>$row[vencimiento]</td>
                 <td>$row[cantidad_inicial]</td>
                 <td>$row[entrada]</td>
                 <td>$row[salida]</td>
                 <td>$row[stock_total]</td>
                 <td>$row[cd_stock]</td>
            </tr>";
            
  }   
            echo"</table>
            </div>";
            echo "</div>";
            ?>
        </div>

        <!--bebidads----------------------------------------------------------------------------------------------->
        <div class="tab-pane" id="bebidas">
            <?php
            include('conexion.php');
            $sql="SELECT * FROM productos WHERE cd_stock = 2";
            $query=mysqli_query($conexion,$sql);
            echo "<br><div class='container-fluid'>";
            echo"<div class='table-responsive col-md-12'>
            <table class='table table-bordered text-center table-hover'>
            <tr>
            <thead class='table-dark bg-dark'>
            <th>ID_Producto</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Vencimiento</th>
            <th>Cantidad_Inicíal</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Stock</th>
            <th>Grupos</th>
            </thead>
       </tr>";
  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
  {
       echo "   
            <tr>
                 <td>$row[cd_producto]</td>
                 <td>$row[nombre]</td>
                 <td>$row[descripción]</td>
                 <td>$row[vencimiento]</td>
                 <td>$row[cantidad_inicial]</td>
                 <td>$row[entrada]</td>
                 <td>$row[salida]</td>
                 <td>$row[stock_total]</td>
                 <td>$row[cd_stock]</td>
            </tr>";
            
  }   
            echo"</table>
            </div>";
            echo "</div>";
            ?>
        </div>
        
        <!--Golosinas----------------------------------------------------------------------------------->
        <div class="tab-pane" id="golosinas">
            <?php
            include('conexion.php');
            $sql="SELECT * FROM productos WHERE cd_stock = 3";
            $query=mysqli_query($conexion,$sql);
            echo "<br><div class='container-fluid'>";
            echo"<div class='table-responsive col-md-12'>
            <table class='table table-bordered text-center table-hover'>
            <tr>
            <thead class='table-dark bg-dark'>
            <th>ID_Producto</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Vencimiento</th>
            <th>Cantidad_Inicíal</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Stock</th>
            <th>Grupos</th>
            </thead>
       </tr>";
  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
  {
       echo "   
            <tr>
                 <td>$row[cd_producto]</td>
                 <td>$row[nombre]</td>
                 <td>$row[descripción]</td>
                 <td>$row[vencimiento]</td>
                 <td>$row[cantidad_inicial]</td>
                 <td>$row[entrada]</td>
                 <td>$row[salida]</td>
                 <td>$row[stock_total]</td>
                 <td>$row[cd_stock]</td>
            </tr>";
            
  }   
            echo"</table>
            </div>";
            echo "</div>";
            ?>
        </div>

        <!--Limpieza-------------------------------------------------------------->
        <div class="tab-pane" id="limpieza">
            <?php
            include('conexion.php');
            $sql="SELECT * FROM productos WHERE cd_stock = 4";
            $query=mysqli_query($conexion,$sql);
            echo "<br><div class='container-fluid'>";
            echo"<div class='table-responsive col-md-12'>
            <table class='table table-bordered text-center table-hover'>
            <tr>
            <thead class='table-dark bg-dark'>
            <th>ID_Producto</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Vencimiento</th>
            <th>Cantidad_Inicíal</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Stock</th>
            <th>Grupos</th>
            </thead>
       </tr>";
  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
  {
       echo "   
            <tr>
                 <td>$row[cd_producto]</td>
                 <td>$row[nombre]</td>
                 <td>$row[descripción]</td>
                 <td>$row[vencimiento]</td>
                 <td>$row[cantidad_inicial]</td>
                 <td>$row[entrada]</td>
                 <td>$row[salida]</td>
                 <td>$row[stock_total]</td>
                 <td>$row[cd_stock]</td>
            </tr>";
            
  }   
            echo"</table>
            </div>";
            echo "</div>";
            ?>
        </div>

        <!--Comestibles-------------------------------------------------------------------------->
        <div class="tab-pane" id="comestible">
            <?php
            include('conexion.php');
            $sql="SELECT * FROM productos WHERE cd_stock = 5";
            $query=mysqli_query($conexion,$sql);
            echo "<br><div class='container-fluid'>";
            echo"<div class='table-responsive col-md-12'>
            <table class='table table-bordered text-center table-hover'>
            <tr>
            <thead class='table-dark bg-dark'>
            <th>ID_Producto</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Vencimiento</th>
            <th>Cantidad_Inicíal</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Stock</th>
            <th>Grupos</th>
            </thead>
       </tr>";
  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
  {
       echo "   
            <tr>
                 <td>$row[cd_producto]</td>
                 <td>$row[nombre]</td>
                 <td>$row[descripción]</td>
                 <td>$row[vencimiento]</td>
                 <td>$row[cantidad_inicial]</td>
                 <td>$row[entrada]</td>
                 <td>$row[salida]</td>
                 <td>$row[stock_total]</td>
                 <td>$row[cd_stock]</td>
            </tr>";
            
  }   
            echo"</table>
            </div>";
            echo "</div>";
            ?>
        </div>
    </div>
</body>
</html>