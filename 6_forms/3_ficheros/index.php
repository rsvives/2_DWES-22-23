<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivo</title>
</head>
<body>
    <h1>Subida de archivo</h1>
    <label for="archivo">Selecciona un archivo:</label>
    <form action="./controller.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" id="archivo">
        <br>
        <br>
        <input type="submit" value="Subir archivo">
    </form>
</body>
</html>