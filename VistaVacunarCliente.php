<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaEditarEstudiante</title>
    <link rel="stylesheet" href="styles.css">


</head>
<body>
<form action="ClienteController.php" method="POST">
                        <?php
                            include_once "ClienteModel.php";
                            $nuevoCliente = new Cliente();                          
                            /*FILTRAR AL ESTUDIANTE SEGUN ID ENVIADO*/
                            $resultado = $nuevoCliente->FiltrarCliente($_GET['idClie']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
                                <p>
                                <label> Mascota: <input type="text" name="nomMascota"  value="<?php echo $resultadoFiltrado['nombremascota']?>" required readonly = "readonly"></label>
                                </p>

                                <p>
                                <label>Tipo de Vacuna: <input type="text"name="nomVacuna" required></label>
                                </p>

                                <p>
                                <label>Año de vacunación: <input type="text"name="anioVacuna" required></label>
                                </p>

                                 <p>
                                    <input type="hidden" name="idClient" 
                                    value="<?php echo $resultadoFiltrado['idmascota']?>" required>
                                 </p>   
                            <?php
                            }
                            ?>
                        
                <input type="submit" value="Agregar Vacunas" name="btnVacunar">            
    </form>
</body>
</html>