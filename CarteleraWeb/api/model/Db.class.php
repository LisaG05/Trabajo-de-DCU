<?php
class Db{
    static $usuario="root";
    static $pass="";
    static $server="mysql:host=localhost;dbname=cartelera";

    public static function connect(){
        return new PDO(
                Db::$server,
                Db::$usuario,
                Db::$pass   
             );
         
    }
}
?>