<?php

if( isset($_GET["id"]) ) {
    $id = $_GET["id"];
    
    require_once "Conexion.php";
    $objConexion = new Conexion();
    $con = $objConexion->getConexion();

    $sql = "UPDATE persona SET estado = 0 WHERE id= ".$id;
    
    if($con->query($sql) === true){
    header("Location: ./index.php?success=true");
    //echo "registrado exitosamente. ID nuevo" . $ultimo_id . "<br>";
    }else{
    header("Location: ./index.php?success=false");
    }
}else{
     header("Location: ./index.php");
}

