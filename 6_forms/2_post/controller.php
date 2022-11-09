<?php
require_once("./database.php");

if($_POST["email"]==$email && $_POST["password"]==$password){
    // echo("el usuario corresponde");
    header("Location:cliente-standar.html");
    
}else{
    // echo("usuario incorrecto");
    header("Location:index.php?error=true");
}


//var_dump($_POST);

// $pagina = $_POST['cliente']=="vip"?"cliente-vip.html":"cliente-standar.html";

// header("Location:$pagina");

