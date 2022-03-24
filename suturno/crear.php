<?php

include("conexion.php");
include("funciones.php");

if ($_POST["operacion"] == "Crear") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }
    $stmt = $conexion->prepare("INSERT INTO usuarios(cedula,nombre, apellidos, imagen, telefono, email, tipoContrato)VALUES(:cedula,:nombre, :apellidos, :imagen, :telefono, :email, :tipoContrato)");

    $resultado = $stmt->execute(
        array(
            'cedula'   => $_POST["cedula"],
            ':nombre'    => $_POST["nombre"],
            ':apellidos'    => $_POST["apellidos"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],

            ':tipoContrato' => $_POST["tipoContrato"],
            
            ':imagen'    => $imagen

        )
    );

    if (!empty($resultado)) {
        echo 'Registro creado';
    }
}


if ($_POST["operacion"] == "Editar") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }else{
        $imagen = $_POST["imagen_usuario_oculta"];
    }


    $stmt = $conexion->prepare("UPDATE usuarios SET cedula=:cedula, nombre=:nombre, apellidos=:apellidos, imagen=:imagen, telefono=:telefono, email=:email,tipoContrato =:tipoContrato WHERE id = :id");

    $resultado = $stmt->execute(
        array(
            ':cedula'    => $_POST ["cedula"],
            ':nombre'    => $_POST["nombre"],
            ':apellidos'    => $_POST["apellidos"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],

            ':tipoContrato' => $_POST["tipoContrato"],
            
            ':imagen'    => $imagen,
            ':id'    => $_POST["id_usuario"]
        )
    );

    if (!empty($resultado)) {
        echo 'Registro actualizado';
    }
}