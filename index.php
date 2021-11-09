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
    <title>Meine Website</title>
</head>
<body>
    
    <?php


        if($eingeloggt)
        {
            ?>

            <h1>Herzlich Willkommen <?= $name ?> bei Digitale Karriere!</h1>

            <?php
        }
        else
        {
            ?>

            Bitte registrieren Sie sich: <a href="registerPage.php">Klick</a><br>
            oder einloggen <a href="loginPage.php">Klick</a>

            <?php
        }

    ?>
</body>
</html>