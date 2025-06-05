<?php
//1. para llamar al formulario con $_POST
$apellidos = $_POST["apellidos"];
$nombres = $_POST["nombres"];
$dni = $_POST["dni"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

#2. aqui se valida los datos de entrada del formulario
//isset valida si un dato existe
if(!(isset($_POST["apellidos"]) && isset($_POST["nombres"]) && 
    isset($_POST["dni"]) && isset($_POST["telefono"]) && isset($_POST["correo"]) )){
    echo ("No se enviaron los datos completos");
    exit();
}
//3. conexion a bd
require_once "Conexion.php";
$sql = " INSERT INTO persona (nombres,apellidos,dni, telefono,correo) 
            VALUES ('$nombres','$apellidos','$dni','$telefono','$correo')";

$objConexion = new Conexion();
$con = $objConexion->getConexion();

if($con->query($sql)===true){
    $ultimo_id = $con->insert_id;
    header("Location: ./index.php?success=true");
    //echo "registrado exitosamente. ID nuevo" . $ultimo_id . "<br>";
}else{
    header("Location: ./index.php?success=false");
}