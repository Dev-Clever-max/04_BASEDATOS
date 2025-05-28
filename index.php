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


//SUBIR TODO ESTE EJERCICIO A UN REPO DE GITHUB