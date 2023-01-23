<?php

// Ejemplo excepcion
// try{
//     $algo = "cosa";
// }catch(Exception $e){
//    echo $e->getMessage();
// }



$bd = new PDO("mysql:host=localhost:3307;dbname=dwes", "root", "");
$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $bd->beginTransaction();
    $insert = $bd->exec("INSERT INTO usuarios(nombre,email,passwrd,direccion,tarjeta_credito)
    VALUES ('hugo','hugo@mail.com','hffewofu2','direccion_hugo','123746323')");
    $insert2 = $bd->exec("INSERT INTO usuarios(nombre,email,passwrd,direccion,tarjeta_credito)
    VALUES('siro','siro@mail.com','jfwoeif234','direccion_siro','854386546')");
    $insert3 = $bd->exec("INSERT INTO usuarios(n,email,passwrd,direccion,tarjeta_credito) VALUES('pedro','pedrojodete@mail.com','geirg243','direccion_pedro','436457647')");
    $bd->commit();
} catch (Exception $e) {
    try {
        echo "Error en la transaccion, ejecutando rollback... error:" . $e->getMessage();
        $bd->rollBack();
    } catch (Exception $e2) {
        echo "El rollback ha fallado. Error: " . $e2->getMessage();
    }
}
