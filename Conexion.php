<?php
class Conexion {
  private $servename = "localhost";
  private $username = "root";
  private $password = "";
  private $db_name = "ejemplo_web2";

  private $conexion;

  public function __construct(){
    $this->conexion = new mysqli($this->servename, $this->username, $this->password, $this->db_name);

    if($this->conexion->connect_error){
      die("conexion fallo: " . $this->conexion->connect_error);
    }
  }
    public function getConexion(){
    return $this->conexion;
  }
  public function __destruct(){
    $this->conexion->close();
    echo "se destruyo la conexion <br>";
  }

} 