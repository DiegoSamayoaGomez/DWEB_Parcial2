<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Mascota</title>    
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="menu">
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="index.html">Home</a></li>
                <li  class="sel"><a href="vistaMascotas.php">Agregar Mascota</a></li>
                <li><a href="listaMascotas.php">Listar Mascota</a></li>
            </ul>
        </nav>
    </div>

    <h2>Ingreso de Nombre</h2>
    <p>Diego Samayoa - Prueba PARCIAL II</p>


<form action="ClienteController.php" method="post">

<label> Mascota: <input type="text" name="nomMascota" required></label>
<input type="submit" value="Guardar mascota" name="btnGuardar">


</form>

</body>
</html>