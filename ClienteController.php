
<?php

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
 $nuevoCliente->VacunarCliente($_POST['idclient'],$_POST['nomVacuna'],$_POST['anioVacuna']); 
 header('Location: listaMascotas.php'); 
}



if(isset($_POST['btnRenombrar']))
{
$nuevoCliente->ActualizarCliente($_POST['idclient'],$_POST['nomMascota']); 
 header('Location: listaMascotas.php');       
}

if(isset($_POST['btnCancelar']))
{ 
 header('Location: listaMascotas.php');        
}

?>


