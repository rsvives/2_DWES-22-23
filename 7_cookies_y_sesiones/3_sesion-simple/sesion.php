<?php

session_start();
$_SESSION['datos'] = "mis datos secretos";

var_dump($_SESSION);
