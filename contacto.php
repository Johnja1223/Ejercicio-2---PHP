<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <center><h1>Formulario de Contacto</h1></center>
    <div class="container-fluid text-center">
    <form class="row g-3" method="post" action="guardar.php">
        <div class="px-2 col-12">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        </div>
        
        <div class="px-2 col-12">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        </div>
        
        <div class="px-2 col-12">
        <label for="telefono">Telefono:</label>
        <input type="telefono" name="telefono" required><br><br>
        </div>
        
        <div class="px-2 col-12">
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" required></textarea><br><br>
        </div>

        <div class="px-2 col-12">
        <input type="submit" class="btn btn-primary" value="Enviar">
        </div>
        
    </form>
    </div>
    
    <!--Scripts-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
</body>
</html>