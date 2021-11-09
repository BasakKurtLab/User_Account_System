<?php
    if(empty($_POST["email"]) || empty($_POST["pass"]))
    {
        exit("Es gibt einen Fehler");
    }

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $serverName     = "localhost";
    $datenbankName  = "dk_teamprojekt";
    $datenbankUser  = "root";
    $datenbankPass  = "";

    $verbindung     = new mysqli($serverName, $datenbankUser, $datenbankPass, $datenbankName);

    $anfrage        = "SELECT * FROM benutzer WHERE email='" . $email . "'";
    $result         = $verbindung->query($anfrage);
    
    if($result->num_rows == 0)
    {
        header("Location: loginPage.php?emailFalsch=1");
        exit();
    }
    else
    {
        $account = $result->fetch_assoc();

        if($account["passwort"] == $pass)
        {
            // ERFOLGREICH EINGELOGGT. Umleitung zur Startseite
            setcookie("eingeloggt", "1");
            setcookie("name", $account["vorname"]);
            header("Location: index.php");
        }
        else
        {
            // PASSWORT IST FALSCH
            header("Location: loginPage.php?pwFalsch=1");
        }
    }
    
    
    
    
    
    
    
    
    
    
    /*$anfrage        = "SELECT * FROM benutzer";

    $result       = $verbindung->query($anfrage); // Noch kein ARRAY, sondern ein mysqli_result Objekt
    
    

    // ineffizient
    //for($i = 0; $i < $result->num_rows; $i++)
    //{
    //    $row = $result->fetch_assoc();
    //
    //    echo("Vorname: " . $row["vorname"] . "<br>");
    //}


    while($row = $result->fetch_assoc())
    {
        if($row["email"] == $email)
        {
            if($row["passwort"] == $pass)
            {
                echo("PASSWORT IST RICHTIG");
            }
            else
            {
                echo("PASSWORT IST FALSCH");
            }


            break;
        }
    }*/

?>