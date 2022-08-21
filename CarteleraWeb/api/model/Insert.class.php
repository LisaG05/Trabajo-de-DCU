<?php
include 'autoload.php';

class Insert{ 
    public static function inicio($user,$pass)
    {   
        $cmd = "SELECT * FROM user_adm";
        $cmd = Db::connect()-> prepare($cmd);
        $cmd  -> execute(array());
        $done= $cmd -> fetch();
        if($done){
           $cmd = "SELECT * FROM user_adm where users=?";
           $cmd = Db::connect()-> prepare($cmd);
           $cmd  -> execute(array($user));
           $done= $cmd -> fetch();
           if(password_verify($pass,$done['pass'])){
                return false;
            }else{
                return true;
            }
           }
           else{
            $encriptar=password_hash($pass,PASSWORD_DEFAULT);
            $cmd = "INSERT INTO user_adm (users, pass) values(?,?)";
            $cmd = Db::connect()->prepare($cmd);
            $done = $cmd->execute(array($user,$encriptar));
            return 3;
            
        }
    }
    public static function save($portada,$titulo,$directores,$actor,$fecha,$trailer,$resumen,$categoria)
    {   
        if($titulo != ""&& $directores!=""&&$actor!=""&&$fecha!=""&&$trailer!=""&&$resumen!=""&&$categoria!=""):
        $foto = $portada;
        //ruta de la img
        $directorio_destino = "img";
        //Ruta de donde viene
        $tmp_name = $foto['tmp_name'];

        $img_file = $foto['name'];
        $img_type = $foto['type'];
          if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
        //nueva ruta
        $destino = $directorio_destino . '/' .  $img_file;
        $cmd="INSERT INTO carteleraweb (portada,titulo,directores,actor,fecha,trailer,resumen,categoria) values (?,?,?,?,?,?,?,?)";
        $cmd= Db::connect()->prepare($cmd);
        $cmd->execute(array($destino,$titulo,$directores,$actor,$fecha,$trailer,$resumen,$categoria));
         //Procesar subida
        return move_uploaded_file($tmp_name, "../../img/".$img_file);
        };
        else: return 3;
            endif;
        
    } 
    public static function update($id ,$titulo ,$directores ,$actor ,$fecha ,$trailer ,$resumen ,$categoria){
        $cmd="UPDATE carteleraweb  SET titulo=?, directores=?, actor=?, fecha=?,trailer=?,resumen=?,categoria=? WHERE id=?";
        $cmd= Db::connect()->prepare($cmd);
        $done=$cmd->execute(array($titulo ,$directores ,$actor ,$fecha ,$trailer ,$resumen ,$categoria ,$id));
        return $done;
    }
    public static function delete($id)
    {
         $cmd="DELETE FROM carteleraweb WHERE id=?";
         $cmd= Db::connect()->prepare($cmd);
         $data = $cmd->execute(array($id));
        return $data;   
    }
    }
       