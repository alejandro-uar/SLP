<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        include("conexion.php");    
        if(isset($_POST["agregar"])){
            $n=$_POST['nombre'];
            $d=$_POST['descripcion'];
            $v=$_POST['vencimiento'];
            $ci=$_POST['cantidad'];
            $e=$_POST['entrada'];
            $s=$_POST['salida'];
            $st=$_POST['stock'];
            $cs=$_POST['cdStock'];
            $sql = "INSERT INTO productos (nombre,descripción,vencimiento,cantidad_inicial,entrada,salida,stock_total,cd_stock) VALUES ('$n','$d','$v',$ci,$e,$s,$st,$cs)";
            $query=mysqli_query($conexion,$sql);
            
            if($query == false){
                echo"error";
            }else{
                include("inventario.php");
                echo "<script>
                    alert('Consulta Cargada...!')
                    </script>";
            }

        }else if(isset($_POST["eliminar"])){

            $ide = $_POST["id"];

            $sql = "DELETE FROM productos WHERE cd_producto = $ide";

            $query = mysqli_query($conexion,$sql);

            if($query == false){
                echo"error";
            }else{
                if(mysqli_affected_rows($conexion)==0){
                    include("inventario.php");
                    echo "<script>
                        alert('No hay datos que eliminar')
                        </script>";
                }else{
                    include("inventario.php");
                    echo "<script>
                        alert('Datos Eliminados...!')
                        </script>";
                }
            }

        }else if(isset($_POST["actualizar"])){

            $id=$_POST["ide"];
            $n=$_POST['n'];
            $d=$_POST['d'];
            $v=$_POST['v'];
            $ci=$_POST['cI'];
            $e=$_POST['e'];
            $s=$_POST['s'];
            $st=$_POST['st'];
            $cs=$_POST['cs'];

            $sql = "UPDATE productos SET nombre = '$n', descripción = '$d', vencimiento = '$v',
             cantidad_inicial = $ci, entrada = $e, salida = $s, stock_total = $st, cd_stock = $cs 
             WHERE cd_producto = $id";

             $query = mysqli_query($conexion,$sql);

             if($query == false){
                include("inventario.php");
                echo "<script>
                    alert('error,Asegurate de completar todos los campos!')
                    </script>";
            }else{
                include("inventario.php");
                echo "<script>
                    alert('Datos Actualizados...!')
                    </script>";
            }

        }

    
    ?>
</body>
</html>