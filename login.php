<?php
session_start();
$r1=mt_rand(1,9);
$r2=mt_rand(1,9);
$captcha=$r1+$r2;
$errores="";
if(!isset($_SESSION["captcha"])){
$_SESSION['captcha']=$captcha;
}else{
    echo "la captcha fue: ".$_SESSION["captcha"];
}
function camposLlenosPost(){
    foreach($_POST as $llave => $valor){
        if(empty($_POST[$llave])){
            return false;
        }
    }
    return true;
}





if($_POST && camposLlenosPost()){
    if( (int)$_POST['captcha']==$_SESSION['captcha'] ){
        echo "correcto";
    }else{
        $errores.="Capcha erronea";
    }
}elseif($_POST && !camposLlenosPost()){
    $errores.="campos vacios";
}



include "login_vista.php"
?>