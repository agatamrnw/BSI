<?php
session_start();
if(!isset($_SESSION["islogged"])){
    require("/index1.php");
    header("Location: /index1.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 3</title>
        <link rel="stylesheet" href="styles3.css">
    </head>
    <body >
        <div class="container">
        <div class="wrapper"></div>
            <div class="wrap">
            <form method="post" action="/index2.php" class="some-form" id="some-form"> 
                <div class="name">
                    <input type="text" class="form text _req"id="imie" name="imie" placeholder="Imię(z dużej litery)" value="Doja" >
                </div>
                <div class="surname">
                    <input name="SurName" class="form text _req"  placeholder="Nazwisko(z dużej litery)" value="Cat">
                </div>
                <div class=" Str">
                    <input name="Street" class="form str _req" placeholder="Ulica(z dużej litery)" value="Avenue">
                </div>
                <div class="city">
                    <select name="city[]" class="form select">
                        <option value="Warsaw" selected>Warszawa</option>
                        <option value="Gdansk" selected>Gdańsk</option>
                        <option value="Wroclaw" selected>Wrocław</option>
                    </select>
                </div> 
                <div class="tel" >
                    <input name="Tel" type="tel" class="form tel _req" placeholder="Telefon(xxxxxxxxx)" value="000000000">
                </div>
                <div class="pesel">
                    <label>PESEL </label>
                    </br>
                    <input name="Pesel" class="form pesel _req" type="text" value="00000000000">
                </div>
                <div class="pcode" >
                    <input name="Code" class="form code _req" placeholder="Kod pocztowy(xx-xxx)" >
                </div>
                <?php
                    if (!empty($_POST['Code'])){
                        $code=$_POST['Code'];
                        echo ($code);
                    }
                ?>
                <div class="btns">
                    <button type="submit" class="btn sbmt">Submit</button>
                    <button type="reset" class="btn rst">Reset</button>
                </div>
            </form>
        </div>
        <a href="logout.php"><h3>Log Out</h3></a>
        </div>
        <script src="script3.js"></script>
    </body>
</html>

