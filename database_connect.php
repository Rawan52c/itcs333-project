<?php
$host = 'localhost';
$username = 'root';
$database_name = 'IT_College_Room_Booking';
$password = '      ';

try {
    $pdo_Statement1 = new PDO("mysql:host=$host;database_name=$database_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Unsuccessful" . $e->getMessage();

}
?>

