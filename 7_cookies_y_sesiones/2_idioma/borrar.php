<?php
//elimina las cookies y redirige a index.php
setcookie('idioma');
header('Location: ./index.php');
