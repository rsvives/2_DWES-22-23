<?php

var_dump($_POST);

$db = new PDO("mysql:host=localhost:3307;dbname=dwes", "root", "");
$email = $_POST['email'];
$passwd = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = :email AND passwrd = :passwd;";
$result = $db->prepare($sql);

$result->bindParam(':email', $email);
$result->bindParam(':passwd', $passwd);

$result->execute();

if ($result->rowCount() > 0) {
    foreach ($result as $key => $row) {
        var_dump($row);
    }
} else {
    header("location:index.php");
}
