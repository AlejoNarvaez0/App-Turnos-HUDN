<?php

include("conexion.php");
include("funciones.php");


if ($_POST["operacion"] == "Asignar") {

   
    
    $stmt = $conexion->prepare("INSERT INTO asignacion
    (tipoHorarioDia, tipoHorarioTarde, tipoHorarioNoche, tipoHorarioAdicional)VALUES(:tipoHorarioDia, :tipoHorarioTarde , :tipoHorarioNoche,
    :tipoHorarioAdicional)");  
            

          $resultado = $stmt->execute(
        
                array(
                    ':tipoHorarioDia'=> $_POST["tipoHorarioDia"],
                    ':tipoHorarioTarde' => $_POST["tipoHorarioTarde"],
                    'tipoHorarioNoche' => $_POST ["tipoHorarioNoche"],
                    'tipoHorarioAdicional'=> $_POST["tipoHorarioAdicional"]
                    


                    
                    )
            );       
    
   

     
            
        
    
    if (!empty($resultado)) {
        echo 'Turno Creado';
    }
    }




