<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My User Account System</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous">
</head>
<body>
<div class="formContainer">
    <h1>Member Login</h1>
    <img src="user.png">

    <form method="POST" action="login.php">
        <input type="email" placeholder="E-Mail-Adresse" name="email" required>
        <input type="password" placeholder="Passwort" name="pass" required>
        <input type="submit" value="Einloggen">
    </form>

    <?php
        if(isset($_GET["pwFalsch"]) && $_GET["pwFalsch"] == "1")
        {
            echo("<span >Passwort is false</span >");
        }

        if(isset($_GET["emailFalsch"]) && $_GET["emailFalsch"] == "1")
        {
            echo("<span >E-Mail is false</span>");
        }
    ?>
    </div>
</body>
</html>