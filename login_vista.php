<?php
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UNAM / DGAE /SIAE ~ Sistema Integral de Administracion Escolar</title>
        <link href="./estilos_login.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="principal" action="#" method="POST">
            <div class="menu"><a href="#"></a></div> 
            <div class="ayuda"><a href="#">?</a></div>
            <form class="form_login" action="#" method="POST">
                
                <div class="animados"></div>
                <div class="animados"></div>
                <div class="animados"></div>
                <div class="animados"></div>
                <div class="animados"></div>
                <div class="animados"></div>
                <div class="animados"></div>
                
                <h1>Bienvenido al SIAE</h1>
                
                <div class="div_inputs">
                    <input class="credenciales ab" type="text" placeholder="Usuario" name="usuario" >
                    <input class="credenciales" type="password" placeholder="NIP" name="nip">
                    <div class="div_captcha">
                        <label class="captcha" ><?php echo $r1; ?> + <?php echo $r2; ?> = </label>
                        <input type="text" placeholder="Captcha" name="captcha">
                    </div>
                    <input class="enviar" type="submit" value="Acceder" >
                    
                </div>
                
            </form>
            <label class="errores"><?php echo $errores;?></label>
        </div>
    </body>
    </html>

