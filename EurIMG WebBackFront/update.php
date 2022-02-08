<?php
$conex= mysqli_connect('localhost', 'root', '', 'IMGEuro');
$PATH = $_GET['source'];
if(move_uploaded_file($_FILES['IMGupload']['tmp_name'], $PATH)){
    echo "El archivo ".  basename( $_FILES['IMGupload']['name']."Se ha actualizado");
    header("refresh:0.5; url=back.php;");
} else{
    echo "Ha ocurrido un error";
}






?>