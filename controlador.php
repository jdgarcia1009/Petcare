<?php


if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS </div>';
    } else {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql = $conexion->query(" select * from operador where usuario='$usuario' and contraseña='$password' ");
        if ($datos=$sql->fetch_object()) {
            header("Location:index.php");
        }   else {
            echo '<div class="alert alert-danger">DATOS INCORRECTOS </div>';
        }
    }
    
}


?>