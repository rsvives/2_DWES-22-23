<?php
// recibe datos formulario y redirige en función del idioma
setcookie('idioma', $_POST['idioma']);
header('Location: ./index.php');
