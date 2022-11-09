<?php
if(!empty($_GET["error"])){
    $error = $_GET["error"];
}else{
    $error= false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi formulario</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <form action="./controller.php" method="post">

        <?php 
            if($error){
                echo('<p class="error">Error de credenciales ❌</p>');
            }

        ?>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" ><br><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" ><br><br>
        
        <!-- 3 radio buttons con el departamento -->
        <!-- textarea para el comentario -->
        <!-- checkbox de aceptar condiciones -->

        <input type="radio" id="calidad" name="departamentos" value="calidad">
        <label for="calidad">Calidad</label><br>

        <input type="radio" id="ventas" name="departamentos" value="ventas">
        <label for="ventas">Ventas</label><br>

        <input type="radio" id="atencion_cliente" name="departamentos" value="atencion_cliente">
        <label for="atencion_cliente">Atención al cliente</label><br><br>

        <label for="cliente">Tipo de cliente</label><br>
        <select name="cliente" id="cliente">
            <option value="no-registrado">Cliente no registrado</option>
            <option value="registrado">Cliente  registrado</option>
            <option value="vip">Cliente VIP</option>
        </select>
        <br>
        <br>

        <textarea name="texto" id="texto" cols="30" rows="1"></textarea><br><br>

        <input id="condiciones" type="checkbox" name="condiciones" value="true"><label for="condiciones">Acepta los términos y condiciones</label><br><br>

        <input type="submit" value="Enviar formulario"><br><br>

    </form>
</body>
</html>