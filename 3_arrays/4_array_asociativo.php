<?php

$agenda=[
    "Sonia"=>"666444555",
    "Cecilia"=>"666444333",
    "Adán"=>"666555444",
];

// echo($agenda["Sonia"]);

foreach ($agenda as $persona =>$telefono) {
    echo("<p>El número de $persona es $telefono </p>");
    
}
