<?php
class Conexion{
    public static $usuario="root";
    public static $pass="";
    public static $host="mysql:host=localhost;dbname=cartelera";

public static function connect(){
    $conn = new PDO(Conexion::$host, Conexion::$usuario, Conexion::$pass);
    return $conn;
    //Verificar conexion
    // if($con){
    //     echo "Connect";
    // }else{
    //     echo "No connection";
    // }

}
}
$cmd = "SELECT * FROM carteleraweb";
$cmd = Conexion::connect()->prepare($cmd);
$cmd  -> execute();
$data= $cmd -> fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($data);
//Llamar verificacion de la base de datos
//Conexion::connect();

?>