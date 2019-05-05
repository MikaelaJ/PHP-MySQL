<?php
$host = 'localhost:8889';
$db   = 'TheStore';
$user = 'root';
$pass = 'root';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);
?>

<!-- Används hela tiden, ingen logik i det. Bara att requira in filen när man behöver köra PDO -->