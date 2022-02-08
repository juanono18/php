<?php

$email= $_POST['logemail'];
$contraseña= $_POST['logpass'];

$conex= mysqli_connect('localhost', 'root', '', 'IMGEuro');
$query1 = mysqli_query($conex, "SELECT EMAIL FROM usuarios WHERE EMAIL ='$email'");
$query2 = mysqli_query($conex, "SELECT PASS FROM usuarios WHERE PASS ='$contraseña'");

    if($user = mysqli_fetch_assoc($query1)) {
    
    } else {
        echo "EMAIL INCORRECTO";
        header("refresh:2; url=index.php");
        exit;
    }
    if($user = mysqli_fetch_assoc($query2)) {
        print "LOGIN CORRECTO";
        header("refresh:0.2 url=back.php");
    } else {
        echo "CONTRASEÑA INCORRECTA";
        header("refresh:0.2 url=index.php");
    }
?>
