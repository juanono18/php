<?php



$conex = mysqli_connect('localhost','root','','practica');
$conex -> set_charset('utf8');

$sql = "insert into usuarios(correo, contraseña) values ('".$_POST['email_registrar']."','".$_POST['register_contraseña']."')";

mysqli_query($conex,$sql);

mysqli_close($conex);


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <script src="index.js"></script>
        <title>Document</title>
    </head>
    <body>
        <section class="forms-section">
            <h1 class="section-title">¡Bienvenido a la plataforma, ahora inicia sesión :)!</h1>
            <div class="forms">
              <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                  Login
                  <span class="underline"></span>
                </button>
                <form class="form form-login" action="validar.php" method="POST" enctype="multipart/form-data">
                  <fieldset>
                    <legend>Porfavor, introduce tu correo y tu contraseña para iniciar sesión.</legend>
                    <div class="input-block">
                      <label for="login-email">E-mail</label>
                      <input id="login-email" type="email" name="email_login" required>
                    </div>
                    <div class="input-block">
                      <label for="login-password">Password</label>
                      <input id="login-password" type="password" name="contraseña_login" required  >
                    </div>
                  </fieldset>
                  <button type="submit" class="btn-login">Login</button>
                </form>
              </div>
              
              
              <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                  Sign Up
                  <span class="underline"></span>
                </button>
                <form class="form form-signup" action="insertar.php" method="POST" enctype="multipart/form-data">
                  <fieldset>
                    <legend>Porfavor, introduce tu email y tu contraseña, además de confirmarla para registrarte.</legend>
                    <div class="input-block">
                      <label for="signup-email">E-mail</label>
                      <input id="signup-email" type="email" name="email_registrar" required>
                    </div>
                    <div class="input-block">
                      <label for="signup-password">Password</label>
                      <input id="signup-password" type="password" required minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Tiene que tener más de 8 carácteres, y mínimo tienes que usar una mayúscula, y un número." name="register_contraseña" >
                    </div>
                    <div class="input-block">
                      <label for="signup-password-confirm">Confirm password</label>
                      <input id="signup-password-confirm" type="password" minlength="8" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Tiene que tener más de 8 carácteres, y mínimo tienes que usar una mayúscula, y un número.">
                    </div>
                  </fieldset>
                  <button type="submit" class="btn-signup">Continue </button>
                </form>
              </div>
            </div>  
          </section>
    </body>
    <script>
        const switchers = document.querySelectorAll('.switcher')
        switchers.forEach(item => {
            item.addEventListener('click', function() {
                switchers.forEach(item => item.parentElement.classList.remove('is-active'))
                this.parentElement.classList.add('is-active')
            })
        })

    </script>
</html>

