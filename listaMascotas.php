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
                <li><a href="vistaMascotas.php">Agregar Mascota</a></li>
                <li class="sel"><a href="listaMascotas.php">Listar Mascota</a></li>
            </ul>
        </nav>
    </div>

    <h2>Lista de Mascotas</h2>
    <p>Diego Samayoa - Prueba PARCIAL II</p>
    <h2>TABLAS EN MYSQL (Online)</h2>

    <table class="table table-striped w-50 pb-3">
    
        <th>ID</th>
        <th>Mascota</th>
        <th colspan="2">Acciones</th>
        
    <?php
        include_once "ClienteModel.php";
        $Cliente = new Cliente();
        $ListaClientes = $Cliente->ListarClientes();
        while($Clientes = mysqli_fetch_assoc($ListaClientes))
        {?>
          <tr>
                
                <td>  <?php echo $Clientes['idmascota'] ?> </td>
                <td>  <?php echo $Clientes['nombremascota'] ?> </td>

                <td><a href="VistaVacunarCliente.php?idClie=<?php echo $Clientes['idmascota'];?>"><img alt="Editar" src="icons8_add_32.png"></a></td>             
                <td><a href="VistaEditarCliente.php?idClie=<?php echo $Clientes['idmascota'];?>"><img alt="Vacunar" src="icons8_edit_32.png"></a></td>


          </tr>
          
       <?php } ?>
    
    </table>

</body>

</html>