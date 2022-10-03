<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Tablas de multiplicar</h1>

    <table border="1" cellspacing="0" cellpadding="8">
        <?php 
            define("MIN",3);
            define("MAX",10);

            for ($i=0; $i <MAX+1 ; $i++) { 
                echo("<tr>"); 
                for ($j=MIN-1; $j < MAX+1; $j++) { 
                   if($i===0){
                        echo("<th>Tabla del $j</th>");
                   }else{
                       echo("<td>" . $j ."x". $i. "=" . $j*$i ."</td>");
                   }
                }
                echo("</tr>");
                
            }

        ?>

    </table>

</body>
</html>