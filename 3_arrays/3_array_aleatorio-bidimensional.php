<?php
//crear un array con elementos y valores 
//definidos de forma aleatoria

define("ELEMENTOS",rand(1,100));
$miArray = [];

for ($i=0; $i <ELEMENTOS ; $i++) { 
    $miArray[$i] = rand(1,100);
}
?>


<pre>
    <?php
        print_r($miArray);
    ?>
</pre>