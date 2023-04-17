<?php
session_start();
if(isset($_SESSION["error"])&&$_SESSION["error"]==1){
    echo '<h3 align="center">Wrong password or login!</h3>';
    $_SESSION["error"]=0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="cat"> 
        <img src="pngegg.png" alt="" width="150px" height="150px">
        <p>Your login is "lgn" & password is "pswd15"</p>
    </div>

    
    <div class="container">
        <div class="wrapper"></div>
       
        <div class="wrap">  
            <h2 align="center">Please, Sign In</h2>
    <form method="post" action="check.php" class="some-form">
        <div class="input login"> 
            <label class="l" >Login</label>
            </br>
        <input type="text" name="login" class="inp log">
        </div>
        <div class="input pswd">
            <label class="l">Password</label>
        </br>
            <input type="password" name="password" class="inp pass">
        </div>
            <button type="submit" name="log" class="btn">Log In</button>
    </form>
</div>
</div>
</body>
</html>
