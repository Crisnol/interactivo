<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8" />
    <title>tabla de informacion</title>
    <style>
        #tabla th, tr, td{
            border: 1px solid black
        }
    </style>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "mydb");

    if(!$conexion){
        echo "Error: Nose pudo conectar a MySQL.";
        echo "errno de depuracion: " . mysqli_connect_errno();
        echo " error de depuracion: " . mysqli_connect_error();
        exit;

    }

    $resultado = mysqli_query($conexion, "SELECT idalumnos, nombre, apellidos, edad FROM alumnos");

    ?>
        <table id = "table">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Opciones</th>
                
            <tr>
            <?php
            while($fila = $resultado->fetch_assoc()){
                $id = $fila['id'];
                $nombre = $fila['nombre'];
                $comentario = $fila['comentario'];
                

                echo "<tr>";
                echo "<td>";
                echo $fila['id'];
                echo "</td>";
                echo "<td>";
                echo $fila['nombre'];
                echo "</td>";
                echo "<td>";
                echo $fila['comentario'];
                echo "</td>";
                echo "</tr>";

                
            };
            mysqli_close($conexion);
            
            
            ?>

            <a class="btn" href="index.html">Regresar al interactivo</a>

        <table>
</body>

</html>