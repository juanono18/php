<?php
$BD = mysqli_connect('localhost', 'root', '', 'IMGEuro');
$BD->set_charset('utf8');
$errores = array();

$nombre = $_POST['regname'];
$usuario = $_POST['regusername'];
$email = $_POST['regemail'];
$contra = $_POST['regpass'];




if (isset($_POST['registrar'])) {
    //guardamos en variables todos los datos necesarios

    //comprobamos si estan vacios los datos necesarios
    if (empty($usuario)) {
        array_push($errores, "El nombre de usuario es requerido");
        header("refresh:0.5; url=index.php");
    }
    if (empty($email)) {
        array_push($errores, "El email es requerido");
        header("refresh:0.5; url=index.php");
    }
    if (empty($contra)) {
        array_push($errores, "La contraseña es requerida");
        header("refresh:0.5; url=index.php");
    }

    //comprobamos que los datos no han sido usados antes
    $queryComprobar = "SELECT * FROM usuarios WHERE USUARIO='$usuario' OR EMAIL='$email' LIMIT 1";
    $resultado = mysqli_query($BD, $queryComprobar);
    $user = mysqli_fetch_assoc($resultado);

    if ($user) { // si el usuario existe
        if ($user['regusername'] === $username) {
            array_push($errores, "Username already exists");
            header("refresh:0.5; url=index.php");
        }

        if ($user['regemail'] === $email) { //si el email ya está registrado
            array_push($errores, "email already exists");
            header("refresh:0.5; url=index.php");
        }
    }

    if (count($errores) == 0) { //si existen 0 errores en nuestras comprobaciónes haremos el registro
        $query = "INSERT INTO usuarios (NOMBREAPELL,EMAIL,USUARIO,PASS) VALUES('$nombre','$email','$usuario', '$contra')";
        mysqli_query($BD, $query);
        mysqli_close($BD);
        header("refresh:0.5; url=index.php");
    }

}
?>
