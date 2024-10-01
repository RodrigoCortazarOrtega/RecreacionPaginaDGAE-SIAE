<?php
session_start();
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
    

if(!isset($_SESSION["captcha"])){
    echo "if<br>";
    $_SESSION["captcha"]=$captcha;
}


echo "EL CAPTCHA ES: $captcha<br>";
echo "captcha de session:".$_SESSION['captcha']."<br>";

if($_POST && camposLlenosPost()){
    
    echo "captcha de POST:".$_POST['captcha'];
    if($_POST["captcha"]==$_SESSION["captcha"]) {
        echo "--------captcha correcta</br>";
        header("Location: pruebas.php");
        exit();
    }else{
        $errores.="captcha erronea";
        $_SESSION["captcha"] = $captcha;
    }
    
}elseif($_POST && !camposLlenosPost( )){
    $errores.="campos vacios";
}



include "login_vista.php"
?>