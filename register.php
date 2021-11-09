<?php

    /**
     * Post Body prüfen
     */
    if(empty($_POST["vorname"]) || empty($_POST["nachname"]) ||
    empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["pass2"]))
    {
        //es gibt ein Problem
        return;
    }



    /**
     * Variablen definieren
     */
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];



    /**
     * Server-Verbindung
     */
    $serverName     = "localhost";
    $datenbankName  = "dk_teamprojekt";
    $datenbankUser  = "root";
    $datenbankPass  = "";

    $verbindung     = new mysqli($serverName, $datenbankUser, $datenbankPass, $datenbankName);




    /**
     * Duplikaten vermeiden
     */
    $anfrage        = "SELECT * FROM benutzer WHERE email='" . $email . "';";
    $result         = $verbindung->query($anfrage);

    if($result->num_rows > 0)
    {
        header("Location: /registerPage.php?emailFehler=1");
        exit();
    }




    /**
     * Alles okay, jetzt Account erstellen
     */
    $anfrage        = "INSERT INTO benutzer (vorname, nachname, email, passwort) VALUES ('" . $vorname . "', '" . $nachname . "', '" . $email . "', '" . $pass . "');";

    if($verbindung->query($anfrage) === true)
    {
        setcookie("eingeloggt", "1");
        setcookie("name", $vorname);
        header("Location: /index.php");
    }
    else
    {
        echo("Es gab ein Problem!");
    }


    /**
     * Verbindung schließen
     */
    $verbindung->close();

    
?>