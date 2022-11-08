<?php

var_dump($_POST);

$pagina = $_POST['cliente']=="vip"?"cliente-vip.html":"cliente-standar.html";

header("Location:$pagina");

