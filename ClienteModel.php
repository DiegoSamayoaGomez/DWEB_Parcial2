<?php
include_once "conexion.php";


class Cliente
{
    private $mascota;

    public function GuardarCliente($mascota)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();

          
       $ComandoConexion->query("insert into mascotas (nombremascota) values ("."'".$_POST['nomMascota']."')");

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       /*echo "Registro agregado exitosamente";*/
       header("Location: listaMascotas.php");
    }

    
    public function ListarClientes()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascotas");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de clientes...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarCliente($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascotas where idmascota=$id");
      return $resultado;
    }

    public function VacunarCliente($id,$vacuna,$anio)
    {
      $nuevaConexion = new conexion();
      $ComandoConexion = $nuevaConexion->Conectar();

      $idVacuna = $ComandoConexion -> real_escape_string($_POST["idClient"]);
      $nomVacuna = $ComandoConexion -> real_escape_string($_POST["nomVacuna"]);
      $anioVacuna = $ComandoConexion -> real_escape_string($_POST["anioVacuna"]);

      $ComandoConexion = $nuevaConexion->Conectar();          
      $ComandoConexion->query("insert into vacunas (nombrevacuna, aniovacuna, idmascota ) 
      values ('$nomVacuna', '$anioVacuna', '$idVacuna')");
      



    }


    public function ActualizarCliente($id,$mascota)
    {
      $nuevaConexion = new conexion();
      $ComandoConexion = $nuevaConexion->Conectar();
      $idMascota = $ComandoConexion -> real_escape_string($_POST["idClient"]);
      $nomMascota = $ComandoConexion -> real_escape_string($_POST["nomMascota"]);

      $ComandoConexion->query("update mascotas set nombremascota ='$nomMascota' where idmascota = $idMascota");      
    }

}
