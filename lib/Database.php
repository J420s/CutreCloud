<?php

class Database{

    public static function upload($file,$user_id){
        $path = $file['tmp_name'];
        $name = $file['name'];
        $type = $file['type'];
        $blob = base64_encode(file_get_contents(addslashes($path)));

        $query = "INSERT INTO Media";
        $columns = "(nombre,contenido,tipo,usuario_id)";
        $values = "VALUES ('$name','$blob','$type','$user_id')";

        return self::query($query . $columns . $values);
    }

    public static function getAllImages($user_ID){
        
        $query = "SELECT nombre,contenido
                FROM Media
                WHERE usuario_id = '$user_ID' 
                AND tipo = 'image/jpeg'";

        return self::query($query);
    }

    public static function getUserID($email){

        return self::get_single_field('Usuario','id','email',$email);
        
    }

    public static function getUsername($id){

        return self::get_single_field('Usuario','username','id',$id);

    }

    public static function validateUser($email,$password){

        $pass = self::query("SELECT password 
                            FROM Usuario 
                            WHERE email='$email'") -> fetch_assoc()['password'];

        return $password === $pass ? true : false;
    }

    public static function addNewUser($fields){

        $query = "INSERT INTO Usuario ";
        $columns = "(";
        $values = "VALUES (";

        foreach ($fields as $key => $val) {

            if($val) {

                $columns .= $key . ",";
                $values .= "'".$val."',";
            }
        }

        $columns = substr($columns, 0, -1) . ")";
        $values = substr($values, 0, -1) . ")";

        return self::query($query . $columns . $values);
    }

    private static function get_single_field($table,$field,$key,$value){

        $query = "SELECT $field FROM $table WHERE $key = '$value'";

        return self::query($query) -> fetch_assoc()[$field];
    }

    private static function query($query) {

        $connection = mysqli_connect("127.0.0.1","cloud01","hola01","Cloud");
    
        $result = $connection -> connect_error ? $connection -> connect_error : $connection -> query($query);
    
        $connection -> close();

        return $result;
    }
}



