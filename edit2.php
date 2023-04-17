<?php
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];
    $id = $_POST['id'];

    $sql = "UPDATE `users` SET Imie =\"$imie\", Nazwisko =\"$nazwisko\", Wiek =$wiek WHERE  Id =$id";
    $connection = new PDO("mysql:host=localhost;dbname=id20613217_db15", "id20613217_usr15", "Kq46@O*EMhu#NVx$");
    $connection->query($sql);
    
    //echo"$sql";
    header('Location: index3.php');
?>