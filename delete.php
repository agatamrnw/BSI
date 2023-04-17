<?php
    $id = $_POST['id'];
    $sql = "DELETE FROM `users` WHERE `Id`=$id";
    $connection = new PDO("mysql:host=localhost;dbname=id20613217_db15", "id20613217_usr15", "Kq46@O*EMhu#NVx$");
    $connection->query($sql);
    header('Location: index3.php');
?>