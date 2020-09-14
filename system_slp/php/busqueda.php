<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
    <header style="background: #004B;color:#fff;padding:15px;">
        <a href="inventario.php" class="container h1" style="color: #fff;text-decoration: none;">Productos</a>
    </header>
    <div class="container-fluid">
    <?php    
    
    include('conexion.php');

        $codigo = $_POST["codigo"];

        $sql = "SELECT * FROM productos WHERE cd_producto = '$codigo' || nombre like '%$codigo%'";

        $query = mysqli_query($conexion,$sql);
            
         echo "<br><div class='container-fluid'>";
        echo"<div class='table-responsive col-md-12'>
        <table class='table table-bordered text-center table-hover'>
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
        </thead>";
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
</body>
</html>


