<?php
    

    class consultas{
        public function contacto($nombre,$tel,$correo,$mensaje){
            include 'conexion.php';
            
            $sql="INSERT INTO `contacto` (`Id_mensaje`, `nombre`, `telefono`, `correo`, `mensaje`) VALUES (NULL, '".$nombre."', '".$tel."', '".$correo."', '".$mensaje."');";
            mysqli_query($con,$sql)or die(mysqli_error($con));

        header("Location: ./");

        }
    }
?>