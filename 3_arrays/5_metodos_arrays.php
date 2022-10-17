<?php
//Crear array sencillo
//Utilizar métodos: push, pop, shift, unshift

$listaCompra = ["🍕", "🥗","🥪","🥩"];
// array_pop($listaCompra);
// array_push($listaCompra, "🍣");

// array_shift($listaCompra);
// array_unshift($listaCompra,"🍪");

array_splice($listaCompra,3,1);
$elementos = count($listaCompra);

?>

<ul>
    <?php
    foreach ($listaCompra as  $item) {
        echo "<li>$item</li>";
    }
    ?>
</ul>

<?php echo "Elementos: $elementos <br>" ?>
<?= "Elementos: $elementos<br>" ?>
