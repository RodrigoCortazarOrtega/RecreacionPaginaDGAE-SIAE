<?php
$r1=mt_rand(1,9);
$r2=mt_rand(1,9);
$captcha=$r1+$r2;
$errores="";

function camposLlenosPost(){
    foreach($_POST as $llave => $valor){
        if(empty($_POST[$llave])){
            return false;
        }
    }
    return true;
}
    




if($_POST && camposLlenosPost()){
    //Validar credenciales    
}elseif($_POST && !camposLlenosPost()){
    $errores.="campos vacios";
}



include "login_vista.php"
?>