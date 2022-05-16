<?php

class Conexion
{
    public static function conectar()
    {
        try{
            $PDO = new PDO("mysql:host=localhost; dbname=dbarsas; charset=utf8","root","");
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $PDO;
        }catch(PDOException $e){
            echo 'Imposible conectarse a DB:'.$e->getMessage();        
        }
    }
}

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "dbarsas";
    $conn = new mysqli($host , $user, $pass, $dbname);
    mysqli_query($conn , "SET character_set_result=utf8");
    if($conn->connect_error){
        die("Database Error : " . $conn->connect_error);
    }
?>