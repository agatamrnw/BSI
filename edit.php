<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <title>Edit</title>
</head>

<?php
    $id = $_POST['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];
?>
<body>
    <h2>Edit</h2>
    <form class="center" action="edit2.php" method="post">
    <input type=hidden name=id value=<?php echo "$id" ?>>
    
    <div >
        <label>Imię </label>
        <br/>
        <input class="inp" name="imie" type="text" pattern="[A-ZŻŹĆĄŚĘŁÓŃ]{1}[a-zżźćńółęąś]{2,20}" title="imie powinno miec 3 do 20 liter i zaczynać wielką literą" value=<?php echo "$imie" ?>  required>
    </div>
    <div>
        <label>Nazwisko </label>
        <br/>
        <input name="nazwisko" type="text" class="inp" pattern="[A-ZŻŹĆĄŚĘŁÓŃ]{1}[a-zżźćńółęąś]{2,20}" title="nazwisko powinno miec 3 do 20 liter i zaczynać wielką literą" value=<?php echo "$nazwisko" ?> required>             
    </div>
        <label>Wiek </label>
        <br/>
        <input name="wiek" type="number" class="inp" min="1" value=<?php echo "$wiek" ?> required>
    </div>
    <div>
        <input class="btn" type="submit" vale="Edit">
    </div>
    </form>
</body>