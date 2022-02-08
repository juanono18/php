<?php
$conex= mysqli_connect('localhost', 'root', '', 'IMGEuro');
require_once("back.php");
$IMGF = "";
for($a=0;$a<$counter;$a++){

    if (isset($_POST['img'.$a+1])) {
        $IMGF = $IMG[$a];
        
    }
    else{
        
        if(isset($_POST['img1'.$a+1])){
            $IMGF = $IMG[$a];
            
        }
        
    }
}


$PATH = "img/postimg/";
$PATH1 = $PATH . basename( $_FILES['IMGupload']['name']); 
if(move_uploaded_file($_FILES['IMGupload']['tmp_name'], $PATH1)) {

    //unlink($IMGF);
    rename($PATH1,$IMGF);
    header("refresh:0.5; url=back.php");


}





?>