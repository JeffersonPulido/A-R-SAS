<!--LOGICA LOGIN-->
<?php
    if(trim($_POST['username'])== null|| trim($_POST['password']) == null){
        echo "<script>alert('Por favor diligencia los campos correspondientes')</script>";
        header("Refresh:0 , url =  index.html");
        exit();

    }
    else{
        require_once "../config/Conexion.php";
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $sql = "SELECT username, password FROM user WHERE username ='". $username ."' and password = '".$password."'";
        $query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_array($query , MYSQLI_ASSOC);
        if(!$result){
            echo "<script>alert('Usuario o Contraseña Inválida')</script>";
            header("Refresh:0 , url = logout.php");
            exit();

        }
        else{
            session_start();
            $_SESSION['username'] = $result['username'];
            header("Location: ../views/home.php");
            session_write_close();
        }
    }
    mysqli_close($conn);

?>