<?php
$BD = mysqli_connect('localhost', 'root', '', 'IMGEuro');
$BD->set_charset('utf8');
$errores = array();
if (isset($_POST['login'])) {
  $email =  $_POST['logemail'];
  $password =  $_POST['logpass'];

  if (empty($email)) {
  	array_push($errores, "Email is required");
  }
  if (empty($password)) {
  	array_push($errores, "Password is required");
  }

  if (count($errores) == 0) {
  	$password = md5($password);
  	$query = "SELECT EMAIL FROM users WHERE EMAIL='$email'";
    $query2 = "SELECT PASS FROM users WHERE PASS='$password'";
  	$resultsEm = mysqli_query($BD, $query);
    $resultsPass = mysqli_query($BD, $query2);
  	if ($logged == mysqli_fetch_assoc($resultsEm) & $logged == mysqli_fetch_assoc($resultsPass)) {
        
        print("Login correcto");
  	}else {
  		array_push($errores, "Wrong username/password combination");
  	}
  }
}

?>