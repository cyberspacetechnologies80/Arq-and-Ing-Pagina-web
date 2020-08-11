<?php
    
    
    require_once 'consultas.php';
    
    $objConsultas = new consultas();
    $objConsultas->contacto($_POST['nombre'],$_POST['telefono'],$_POST['correo'],$_POST['mensaje']);
?>