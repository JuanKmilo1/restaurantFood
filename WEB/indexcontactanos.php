<?php 
  //Conectandonos con la base de datos para que se autocomplete cada que se llene un formulario

  $conectar = mysqli_connect('localhost', 'root', '','restaurante',3306);

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $comando = "INSERT INTO contactwhitus (Name, Email, Text) VALUES ('$name', '$email', '$text')";

    $enviar = mysqli_query($conectar, $comando);
    
    if ($enviar) { echo "
      <div class='alert alert-warning alert-dismissible fade show' style='background: white; border:1px solid rgb(37, 20, 190)' role='alert'>
        Datos insertados correctamente.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>"; } 
    else { echo "Error al insertar datos: " . mysqli_error($conectar); }

    mysqli_close($conectar);



  }


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
        <!-- inicio del menu -->
      <nav id="Navcontainer" class="navbar navbar-expand-lg bg-body-transparent">
      
      </nav>
      <!-- Fin del menu -->
          
      <!--Inicio Formulario-->
        <form class="row g-3" style="width: 90%; margin: 0 auto;" method="post" action="indexcontactanos.php">
          <div class="col-12">
            <label for="inputAddress" class="form-label">Nombre</label>
            <input type="text"
             class="form-control" 
            id="inputAddress" 
            name = "name"
            placeholder=" Jhon doe">
          </div>

          <div class="col-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" 
            class="form-control"
            name="email"
             id="inputEmail4" 
            placeholder="example@example.com">
          </div>
        
         
       
          <div class="col-12">
            <label for="inputZip" class="form-label">Cuentanos</label>
            <textarea type="text" 
            name="text"
            class="form-control"  
            col="40" rows="5"> </textarea>
          </div>
      
          <div class="col-12">
            <button type="submit" class="submit-btn btn" >Enviar</button>
          </div>
        </form>
          </div>
        </div>
          
        <!--Fin Formulario-->
          
        <footer class="bg-dark text-white text-center py-3" id="footer-section">

          </footer>
      <script src="restaurante/static/js/main.js"></script>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     
    </body>
    
</html>
