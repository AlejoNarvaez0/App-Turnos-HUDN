

<?php

    include("conexion.php");
    include("funciones.php");

    $query = "";
    $salida = array();
    $query = "SELECT * FROM asignacion "; 
    
   

    if (isset($_POST["order"])) {
        $query .= 'ORDER BY' . $_POST['order']['0']['column'] .' '.$_POST["order"][0]['dir'] . ' ';        
    }else{
        $query .= 'ORDER BY id DESC ';
    }

    if($_POST["length"] != -1){
        $query .= 'LIMIT ' . $_POST["start"] . ','. $_POST["length"];
    }

    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    $datos = array();
    $filtered_rows = $stmt->rowCount();
    foreach($resultado as $fila){     

        $sub_array = array();
        
        $sub_array[] = $fila["tipoHorarioDia"];
        $sub_array[] = $fila ["tipoHorarioTarde"];
        $sub_array[] = $fila ["tipoHorarioNoche"];
        $sub_array[] = $fila ["tipoHorarioAdicional"];
       
        
        $datos[] = $sub_array;

    }



    $salida = array(
        "draw"               => intval($_POST["draw"]),
        "recordsTotal"       => $filtered_rows,
        "recordsFiltered"    => obtener_todos_turnos(),
        "data"               => $datos
    );

    echo json_encode($salida);


  /*  Como usuario, quiero asignar un tipo de contrato entre
planta permanente
planta temporal
 OPS
Para ordenar estos datos en la base de datos

Çomo usuario, quiero notificar que un tipo de contrato
Planta permanente
NO pueda ingresar turnos nocturnos */