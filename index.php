<?php
    $eingeloggt = false;
    $name = "";

    if(isset($_COOKIE["eingeloggt"]) && $_COOKIE["eingeloggt"] == "1")
    {
        $eingeloggt = true;
    }
    if(!empty($_COOKIE["name"]))
    {
        $name = $_COOKIE["name"];
    }

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My User Account System</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous">
</head>
<body>
<div class="formContainer">
    
    
    <?php


        if($eingeloggt)
        {
            ?>
            <i class="fas fa-check-square"></i>
            <h2>Herzlich Willkommen <?= $name ?> bei My Portal!</h2>

            <?php
        }
        else
        {
            ?>
                
                    <img src="user.png">
                    <h1>Member Login</h1>

                    <form method="POST" action="login.php">
                        <input type="email" placeholder="E-Mail-Adresse" name="email" required>
                        <input type="password" placeholder="Passwort" name="pass" required>
                        <input type="submit" value="Einloggen">
                    </form>
            <div class="bottom">
            <h5>Are you new?</h5>
            <a href="registerPage.php">Sign In</a>
            </div>
            
            <?php
        }

    ?>
    </div>
</body>
</html>