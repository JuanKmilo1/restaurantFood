<?php 
  //Conectandonos con la base de datos
  $conectar = mysqli_connect('localhost', 'root', '','restaurante',3306);

  $comando = "SELECT * FROM platillos";    //Consulta que se desea hacer

  $enviar = mysqli_query($conectar, $comando);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juan Camilo Uparela Castro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="restaurante/static/css/index_style.css">

  </head>
  <body>
    <nav id="Navcontainer" class="navbar navbar-expand-lg bg-body-transparent">
    </nav>
      <br>
      <div class="containertbale">
      <h2 class="bold">Platillos</h2>
      <!-- Inicio platillo -->
        <div class="row">
          <div class="col">
              <table class="table table-warning table-bordered table-striped table-hover" id="table1">

                <thead class="table table-dark">
                  <tr>
                    <th scope="col"><center>Id</center></th>
                    <th scope="col"><center>Nombre del platillo</center></th>
                    <th scope="col"><center>Precio</center></th>
                    <th scope="col"><center>Disponible</center></th>
                    <th scope="col"><center>Categoria</center></th>
                  </tr>
                </thead>
                <!-- Con esto invocamos la base de datos --> 
                <tbody>
                  <?php while ($fila=mysqli_fetch_array($enviar)) {
                  ?>
                  <tr>
                    <td> <center><?php echo $fila['id']; ?> </center></td>
                    <td> <?php echo $fila['nombre']; ?> </td>
                    <td> <center><?php echo $fila['precio']; ?> </center></td>
                    <td> <center><?php echo $fila['disponible']; ?> </center></td>
                    <td> <center><?php echo $fila['categoriaId']; ?> </center></td>
                  </tr>
                  <?php } mysqli_close($conectar); ?>
                </tbody>
              </table>
          </div>
        </div>
        </div>
      <!-- Fin platillo -->
      <footer class="bg-dark text-white text-center py-3" id="footer-section">

      </footer>
      
      <!-- Inicio del datatable -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
       $(document).ready(function() {
         $('#table1').DataTable({ 
          paging: true, 
          searching: true, 
          ordering: true, 
          columnDefs: [ { targets: '_all', className: 'dt-center' }  ], 
            language: { url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'  }
           });
           });

            </script>
      <!-- Fin del datatable -->

      <script src="restaurante/static/js/main.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
  </html>