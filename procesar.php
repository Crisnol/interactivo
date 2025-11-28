<?php
        $nombre_post = $_POST['Nombre'];
        $comentario_post = $_POST['Comentario'];
        

        $conexion = mysqli_connect("sql100.infinityfree.com","if0_40528293","cxGeW6nWfTTKE","if0_40528293_usuarios");
        
        if(!$conexion){
            echo "Error no se pudo conectar a MySQL.";
            echo "Errno de depuracion: " . mysqli_connect_errno();
            echo "error de depuracion: " . mysqli_connect_error();
            exit;
        }

        $sql = "INSERT INTO visitantes (nombre, comentario) VALUES ('$nombre_post','$comentario_post')";
        if(mysqli_query($conexion, $sql)){
            echo "Registro insertado exitosamente";
        }else{
            echo "Error: no se pudo realizar el registro" , "<br>" , mysqli_error($conexion);
        }
        
?>