<?php

include("conexion.php");
include("funciones.php");

if (isset($_POST["id_usuario"])) {
    $salida = array();
    $stmt = $conexion->prepare("SELECT * FROM asignacion WHERE id = '".$_POST["id_usuario"]."' LIMIT 1");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach($resultado as $fila){

        $salida["tipoHorarioDia"] = $fila["tipoHorarioDia"];
        $salida["tipoHorarioTarde"] = $fila ["tipoHorarioTarde"];
        $salida["tipoHorarioNoche"] = $fila ["tipoHorarioNoche"];
        $salida["tipoHorarioAdicional"] =$fila ["tipoHorarioAdicional"];

       

        
        
        
    }

    echo json_encode($salida);
}