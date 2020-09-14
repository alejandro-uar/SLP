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
     include('header.php');
     include('conexion.php');

     $sql="SELECT * FROM productos";
     $query=mysqli_query($conexion,$sql);
     echo "<br/><hr/>";
     echo "<div class='row container-fluid'>";
     echo "<div class='col-md-3'>";
     echo "<button class='btn btn-success col-md-12' data-toggle='modal' data-target='#add'>
     <i class='fas fa-plus-square' style='font-size:30px;'></i></button><hr/> ";
     echo "<button class='btn btn-info col-md-12' data-toggle='modal' data-target='#edit'>
     <i class='fas fa-pen-square  mr-sm-1' style='font-size:30px'></i></button><hr/> ";
     echo "<button class='btn btn-danger col-md-12' data-toggle='modal' data-target='#delete'>
     <i class='fas fa-trash  mr-sm-1' style='font-size:30px'></i></button><hr/> ";
     echo "</div>";
          echo"<div class='table-responsive col-md-9'>
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

     mysqli_close($conexion);
     ?>
     <div class="modal fade" id="add" tabindex="-1">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h2 class="text-center">Agregar nuevo producto</h2>
                         <button type="button" class="close" data-dismiss='modal'>&times;</button>
                    </div>
                    <div class="modal-body">
                         <form action="aud.php" onsubmit="return validar()" method="post">
                              <div class="form-group">
                                   <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre...">
                              </div>
                              <div class="form-group">
                                   <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripcion..."></textarea>
                              </div>
                              <div class="form-group">
                                   <input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="Cantidad Inicial...">
                              </div>
                              <div class="form-group">
                                   <input type="text" name="vencimiento" id="vencimiento" class="form-control" placeholder="Vencimiento...">
                              </div>
                              <div class="form-group">
                                   <input type="number" name="entrada" id="entrada" class="form-control" placeholder="Entrada...">
                              </div>
                              <div class="form-group">
                                   <input type="number" name="salida" id="salida" class="form-control" placeholder="Salida...">
                              </div>
                              <div class="form-group">
                                   <input type="number" name="stock" id="stock" class="form-control" placeholder="Stock...">
                              </div>
                              <div class="form-group">
                                   <input type="number" name="cdStock" id="cdStock" class="form-control" placeholder="1.Lacteos 2.Bebidas 3.Golosinas 4.Limpieza 5.Comestibles">
                              </div>
                              <div class="form-group">
                                   <button type="submit" class="btn btn-primary form-control" name="agregar"><strong>Cargar</strong></button>
                              </div>
                              <div id="info"></div>
                         </form>
                    </div>
               </div>
          </div>
     </div>

     <!-- Delete -->

     <div class="modal fade" id="delete" tabindex="-1">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h2 class="text-center">Borrar un producto</h2>
                         <button type="button" class="close" data-dismiss='modal'>&times;</button>
                    </div>
                    <div class="modal-body">
                         <form action="aud.php" onsubmit="return validarId()" method="post">
                              <div class="form-group">
                                   <input type="number" name="id" id="id" class="form-control" placeholder="Codigo de producto">
                              </div>
                              <div class="form-group">
                                   <button name="eliminar" type="submit" class="btn btn-danger form-control"><strong>Eliminar</strong></button>
                              </div>
                         </form>
                         <div id="infoId"></div>
                    </div>
               </div>
          </div>
     </div>

     <!-- Edit -->

     <div class="modal fade" id="edit" tabindex="-1">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h2 class="text-center">Editar producto</h2>
                         <button type="button" class="close" data-dismiss='modal'>&times;</button>
                    </div>
                    <div class="modal-body">
                         <form action="aud.php" onsubmit="return validarEdit()" method="POST">
                              <div class="form-group">
                                   <input type="number" name="ide" id="ide" class="form-control" placeholder="Codigo de producto...">
                              </div>
                              <div class="form-group">
                                   <input type="text" name="n" id="n" class="form-control" placeholder="Nombre...">
                              </div>
                              <div class="form-group">
                                   <textarea name="d" id="d" placeholder="Descripcion..." class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                   <input type="number" name="cI" id="cI" class="form-control" placeholder="Cantidad Inicial...">
                              </div>
                              <div class="form-group">
                                   <input type="text" name="v" id="v" class="form-control" placeholder="Vencimiento...">
                              </div>
                              <div class="form-group">
                                   <input type="number" name="e" id="e" class="form-control" placeholder="Entrada...">
                              </div>
                              <div class="form-group">
                                   <input type="number" name="s" id="s" class="form-control" placeholder="Salida...">
                              </div>
                              <div class="form-group">
                                   <input type="number" name="st" id="st" class="form-control" placeholder="Stock...">
                              </div>
                              <div class="form-group">
                                   <input type="number" name="cs" id="cs" class="form-control" placeholder="1.Lacteos 2.Bebidas 3.Golosinas 4.Limpieza 5.Comestibles">
                              </div>
                              <div class="form-group">
                                   <button name="actualizar" type="submit" class="btn btn-info form-control"><strong>Actualizar</strong></button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
     <script src="../librerias/validaciones.js"></script>
</body>
</html>