<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Konto erstellen</h1>

    <form method="POST" action="register.php">
        <input type="text" placeholder="Vorname" name="vorname" required>
        <input type="text" placeholder="Nachname" name="nachname" required>
        <input type="email" placeholder="E-Mail-Adresse" name="email" required>
        <input type="text" placeholder="Geburtsdatum" name="gt">
        <input type="password" placeholder="Passwort" name="pass" required>
        <input type="password" placeholder="Passwort erneut eingeben" name="pass2" required>
        <input type="submit" value="Konto erstellen">
    </form>

    <?php
        if(isset($_GET["emailFehler"]) && $_GET["emailFehler"] == "1")
        {
            echo("<div>Diese E-Mail-Adresse existiert bereits.</div>");
        }
    ?>
</body>
</html>