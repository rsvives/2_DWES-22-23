<?php
session_start();

var_dump($_SESSION);


session_destroy();

var_dump($_SESSION);
