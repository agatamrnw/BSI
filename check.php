<?php
session_start();
if (!empty($_POST['login']) && !empty($_POST['password'])) {

    $login = $_POST['login'];

    $password = $_POST['password'];
    if($login == "lgn" && $password == "pswd15"){
        
        $_SESSION["islogged"]=1;
        header('Location: /index2.php');
        exit;
    }
    else{
        $_SESSION["error"]=1;
        header('Location: /index1.php');
        exit;
    }
}
else{
    $_SESSION["error"]=1;
    header('Location: /index1.php');
    exit;
}

?>