<?php
include_once 'conexion.php';
$objeto = new $conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$stock = (isset($_POST['pais'])) ? $_POST['pais'] : '';
$precio = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$imagen = (isset($_POST['imagen'])) ? $_POST['imagen'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO productos (NombreProducto, Stock, Precio, Foto) VALUES('$nombre', '$stock', '$precio','$imagen') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT idProductos, NombreProducto, Stock, Precio, Foto FROM productos ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE productos SET NombreProducto='$nombre', Stock='$stock', Precio='$precio',Foto='$imagen' WHERE idProductos='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT idProductos, NombreProducto, Stock, Precio, Foto FROM personas WHERE idProductos='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM productos WHERE idProductos='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
