

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

<?php
require_once "Conexion.php";

$sql = "SELECT * FROM persona WHERE estado=1";

$objConexion = new Conexion();
$con = $objConexion->getConexion();

$resultado = $con->query($sql);

if($resultado->num_rows > 0){
    while($fila = $resultado->fetch_assoc()){
        print "Id: " . $fila ['id']. "<br>";
        print "Nombre completo:". $fila ['nombres'] . "<br>";
        print "Apellidos:" . $fila ['apellidos'] . "<br>";
        print "DNI:". $fila ['dni'] . "<br>";
        print "Telefono:" . $fila ['telefono'] . "<br>";
        print "Correo:" . $fila ['correo'] . "<br>";
        print "Estado:" . ($fila ['estado'] ==1 ? 'Activo' : 'Inactivo' ). "<br>";
        print "Fecha_creado:" . $fila ['fecha_creado'] . " <br>";
        print "<br>";
    }
}else{
    echo "0 resultados";
}

////////////////////////////
$sql = " INSERT INTO persona (nombres,apellidos,dni, telefono,correo) VALUES ('Pedro','Flores','74125896','963258417','pedro23@gmail.com')";
if($con->query($sql)==true){
    $ultimo_id = $con->insert_id;
    echo "registrado exitosamente. ID nuevo" . $ultimo_id . "<br>";
}else{
    echo "nose registro";
}
////////////////////////////
//hacer pruebas con UPDATE - WHERE 
$sql = "UPDATE persona 
        SET telefono = '123456789', correo = 'catillo23@gmail.com'
        WHERE id = '3'";

if ($con->query($sql) === true) {
    echo "Registro actualizado correctamente.<br>";
} else {
    echo "Nose pudo actualizar.<br>";
}

//HACER PRUEBAS CON DELETE - WHERE
$sql = "DELETE FROM persona 
        WHERE id = '2'";

if ($con->query($sql) === true) {
    echo "Registro eliminado correctamente.<br>";
} else {
    echo "Error al eliminar: <br>";
}


 
