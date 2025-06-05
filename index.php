
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Personas</title>
</head>
<body>
    <h1>Listado de Personas</h1>
    <?php
    if(isset($_GET["success"]) && $_GET["success"] =="true" ){
         echo "<p><b>El procesamiento fue exitoso.</b></p>";
    }else if(isset($_GET["success"]) && $_GET["success"] == "false" ){
        echo "<p><b>ERROR: Algo fallo</b></p>";
    }
    ?>
    <p>
        <a href="formulario.php">Formulario de persona</a>
    </p>
    <table border="1">
        <thead>
            <tr>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "Conexion.php";
            $sql = "SELECT * FROM persona WHERE estado = 1 ORDER BY apellidos,nombres";

            $objConexion = new Conexion();
            $con = $objConexion->getConexion();
            $resultado = $con->query($sql);

        if($resultado->num_rows > 0){
             while($fila = $resultado->fetch_assoc()){
                print "<tr>";
                print "<td>". $fila ['apellidos'] . "</td>";
                print "<td>". $fila ['nombres'] . "</td>";
                print "<td>". $fila ['correo'] . "</td>";
                print "<td>
                        <a href='./editar.php?id=". $fila['id'] ."'>Editar</a>  
                        <a href='./eliminar.php?id=". $fila['id'] ."'>Eliminar</a>  
                        </td>";
                print "</tr>";
                }
        }else{
            echo "<tr><td colpsan = '3'> 0 resultados</td></tr>";
        }
            ?>
        </tbody>
    </table>
</body>
</html>