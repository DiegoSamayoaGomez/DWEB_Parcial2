<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bsaykhb0gabbnhqhpb81-mysql.services.clever-cloud.com",
          "uov6r3htnadydqpd",
          "5u1JBUW2HHbUI3TLmegR",
          "bsaykhb0gabbnhqhpb81");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }
?>