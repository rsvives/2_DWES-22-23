<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
    <?php
   define("MULT", 5);
    for ($i=0; $i<10 ; $i++) { 
        echo("<tr>");
        echo("<td>".MULT . "x" . $i . "=" ."</td><td>". MULT*$i."</td>");
        echo("</tr>");
    }
    ?>
    </table>


</body>
</html>
