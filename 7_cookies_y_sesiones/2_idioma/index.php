<?php
//página para seleccionar el idioma (formulario)

//formulario con action= procesar.php
?>
<!DOCTYPE html>
<html lang="en">
<?php
if (!empty($_COOKIE['idioma'])) {
    switch ($_COOKIE['idioma']) {
        case 'spanish':
            header('Location: ./html/es.html');
            break;
        case 'english':
            header('Location: ./html/en.html');
            break;
        case 'french':
            header('Location: ./html/fr.html');
            break;
        default:
            header('Location: ./index.php');
            break;
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tizziano Sapo</title>
</head>

<body>
    <form action="./procesar.php" method="post">
        <label for="idioma">Selecciona idioma</label>
        <br>
        <select name="idioma" id="idioma">
            <option value="spanish" id="idioma">Español</option>
            <option value="english" id="idioma">Inglés</option>
            <option value="french" id="idioma">Francés</option>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>