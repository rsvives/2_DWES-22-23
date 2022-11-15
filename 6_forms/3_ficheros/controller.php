<?php

var_dump($_FILES["archivo"]["tmp_name"]);

$response= move_uploaded_file($_FILES["archivo"]["tmp_name"],"./uploads/".$_FILES["archivo"]["name"]);


if($response){
    echo "Fichero subido";
}else{
    echo "Nooooo :'(";
}