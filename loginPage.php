<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Anmelden</h1>

    <form method="POST" action="login.php">
        <input type="email" placeholder="E-Mail-Adresse" name="email" required>
        <input type="password" placeholder="Passwort" name="pass" required>
        <input type="submit" value="Einloggen">
    </form>

    <?php
        if(isset($_GET["pwFalsch"]) && $_GET["pwFalsch"] == "1")
        {
            echo("<div>Passwort ist falsch</div>");
        }

        if(isset($_GET["emailFalsch"]) && $_GET["emailFalsch"] == "1")
        {
            echo("<div>E-Mail ist falsch</div>");
        }
    ?>
</body>
</html>