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

    public function EditarCliente($id,$nombre,$vacuna,$anio)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update clientes set nombreProyecto ="."'".$nombre."',nombreAsignado ="."'".$vacuna."',nombreCliente ="."'".$anio."',prioridad ="."'".$prioridad ."'"." where idcliente = $id");
    }


    public function EliminarCliente($id,$proyecto,$asignado,$cliente,$prioridad)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("delete from clientes where idcliente=$id");      
    }

}
