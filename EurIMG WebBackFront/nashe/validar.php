<?php

$email= $_POST['email_login'];
$contraseña= $_POST['contraseña_login'];

$conn= mysqli_connect("localhost", "root", "", "practica");
$consulta1 = mysqli_query($conn, "SELECT correo FROM usuarios WHERE correo ='$email'");
$consulta2 = mysqli_query($conn, "SELECT contraseña FROM usuarios WHERE contraseña ='$contraseña'");

    if($user = mysqli_fetch_assoc($consulta1)) {
    
    } else {
        echo "Nombre incorrecto (No estás registrado)";
        header("refresh:2s; url=validar_noestásregistrado.php;");
        exit;
    }
    if($user = mysqli_fetch_assoc($consulta2)) {
        print "Bienvenido ".$email."";
        header("refresh:0.2s url=back.php;");
    } else {
        echo "Contraseña incorrecta";
        header("refresh:0.2s url=validad_contraseña_incorrecta;");
    }
?>