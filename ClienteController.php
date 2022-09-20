
<?php
/*
include "EstudianteModel.php";
$nuevoEstudiante = new Estudiante();
$nuevoEstudiante->GuardarEstudiante($_POST['apellidos'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);

<?php
*/



include "ClienteModel.php";
$nuevoCliente = new Cliente();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevoCliente->GuardarCliente($_POST['nomMascota']);
    header('Location: listaMascotas.php');
}


/*EDITAR*/
if(isset($_POST['btnVacunar']))
{
 $nuevoCliente->VacunarCliente($_POST['idclient'],$_POST['nomMascota'],$_POST['nomVacuna'],$_POST['anioVacuna']); 
 header('Location: listaMascotas.php'); 
}

if(isset($_POST['btnVacunar']))
{
 $nuevoCliente->EliminarCliente($_POST['idclient'],$_POST['txtnomProyecto'],$_POST['txtnomAsignado'],$_POST['txtnomCliente'],$_POST['multiSelect']); 
 header('Location: listaMascotas.php');
        
}

if(isset($_POST['btnCancelar']))
{ 
 header('Location: listaMascotas.php');        
}



