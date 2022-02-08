<?php
$conex= mysqli_connect('localhost', 'root', '', 'IMGEuro');
$TITLE = $_POST['title'];
$STITLE = $_POST['stitle'];
$TEXTO = $_POST['message'];
$PATH = "img/postimg/";
$PATH1 = $PATH . basename( $_FILES['IMGupload']['name']); 
$PATH2 = $PATH . basename( $_FILES['IMGupload2']['name']); 
if(move_uploaded_file($_FILES['IMGupload']['tmp_name'], $PATH1)& move_uploaded_file($_FILES['IMGupload2']['tmp_name'], $PATH2)) {
    echo "El archivo ".  basename( $_FILES['IMGupload']['name'])." y la foto". basename( $_FILES['IMGupload2']['name'])." ha sido subido";
    $query = mysqli_query($conex, "INSERT INTO CONTENIDO (TITLE,SUBTITLE,TEXTO,IMG1,IMG2) VALUES ('$TITLE','$STITLE','$TEXTO','$PATH1','$PATH2')");
    mysqli_close($conex);
    header("refresh:0.5; url=back.php");
} else{
    echo "Ha ocurrido un error";
}






?>