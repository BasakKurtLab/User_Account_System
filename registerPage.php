<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous">
</head>
<body>
    <div class="formContainer">
    <h1>Sign In</h1>
    <img src="user.png">

    <form  method="POST" action="register.php">
        <input type="text" placeholder="Vorname" name="vorname" required>
        <input type="text" placeholder="Nachname" name="nachname" required>
        <input type="email" placeholder="E-Mail-Adresse" name="email" required>
        <input type="text" placeholder="Geburtsdatum" name="gt">
        <input type="password" placeholder="Passwort" name="pass" required>
        <input type="password" placeholder="Passwort erneut eingeben" name="pass2" required>
        <input type="submit" value="Sign in">
    </form>


    <?php
        if(isset($_GET["emailFehler"]) && $_GET["emailFehler"] == "1")
        {
            echo("<span >E-Mail-Adresse is already registered</span>");
        }
    ?>
    </div>
</body>
</html>