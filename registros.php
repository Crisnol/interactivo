<!DOCTYPE html>
<html>

<head>
    <meta charset = "UTF-8" />

    <title>tabla de informacion</title>

    <style>

        body{
			height:100%;
			margin:0;
			padding:0;
			background-color:#000;
			font-family: Arial, Helvetica, sans-serif;
			color:#111;
		}

        .header {
			background-color: #1f4b6e;
			color:#fff;
			padding:14px;
			border-radius:8px;
			text-align:center;
			margin:20px auto 10px;
			max-width:720px;
		}

        .contenedor {
			max-width:720px;
			margin:0 auto;
			padding:20px;

			background-color:#f1f8ff;
			border:1px solid #143a56;
			border-radius:12px;
			padding:20px;
			box-shadow: 0 6px 18px rgba(0,0,0,0.4);
		}

        .btn {
			background-color: #1f4b6e;
			color:#fff;
			border:none;
			padding:10px 16px;
			border-radius:8px;
			font-size:16px;
		}

       
        table#table {
            width: 100%;
            border-collapse: collapse;
        }
        table#table th,
        table#table td {
            border: 1px solid #bbb;
            padding: 6px 8px;
            text-align: left;
        }
        table#table th {
            background: #eee;
            font-weight: 600;
        }
        table#table tr:hover {
            background: #f9f9f9;
        }

    </style>

</head>

<body>

    <?php
    $conexion = mysqli_connect("sql100.infinityfree.co", "if0_40528293", "cxGeW6nWfTTKE", "if0_40528293_usuarios");

    if(!$conexion){
        echo "Error: Nose pudo conectar a MySQL.";
        echo "errno de depuracion: " . mysqli_connect_errno();
        echo " error de depuracion: " . mysqli_connect_error();
        exit;

    }

    $resultado = mysqli_query($conexion, "SELECT id, nombre, comentario FROM visitantes");

    ?>

    <div class = "header">
        <h1>Registros</h1>
    </div>

    <div class = "contenedor" >
        <table id = "table">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Comentario</th>

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

        <table>

        <a class="btn" href="index.html">Regresar al interactivo</a>
   
    </div>
</body>

</html>