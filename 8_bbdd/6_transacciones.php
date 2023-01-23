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
    // insert
    // insert
    // insert
    $bd->commit();
} catch (Exception $e) {
    try {
        echo "Error en la transaccion, ejecutando rollback... error:" . $e->getMessage();
        $bd->rollBack();
    } catch (Exception $e2) {
        echo "El rollback ha fallado. Error: " . $e2->getMessage();
    }
}
