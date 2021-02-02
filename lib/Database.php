<?php

class Database{

    private $userEmail = "String";
    private $userPass = "*********";
    private $userID = 0;
    
    public function __construct(){
        
    }
    private static function query($query) {
        $connection = mysqli_connect("127.0.0.1","cloud01","hola01","Cloud");
    
        $result = $connection -> connect_error ? $connection -> connect_error : $connection -> query($query);
    
        $connection -> close();
        return $result;
    }

    public static function validateUser($userEmail,$password){
        $pass = self::query("SELECT password 
                            FROM Usuario 
                            WHERE email='$userEmail'") -> fetch_assoc()['password'];
        return $password === $pass ? true : false;
    }
}



