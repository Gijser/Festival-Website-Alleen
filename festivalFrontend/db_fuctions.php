<?php require_once('db_connect.php');


function insertDB()
{
    if (isset($_POST['btnRegister'])) {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "festival";

        //userChecks
        $gebruikersnaamCheck = "SELECT Gebruikersnaam FROM klanten";


        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $email = $_POST["email"];
        $gebruikersnaam = $_POST["Gebruikersnaam"];
        $wachtwoord = $_POST["Wachtwoord"];


        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        $sqlInsert = "INSERT INTO klanten(voornaam, achternaam, Email, Gebruikersnaam, Wachtwoord) VALUES ('$voornaam', '$achternaam', '$email', '$gebruikersnaam', '$wachtwoord')";
        $result = mysqli_query($conn, $sqlInsert);

        if ($gebruikersnaam == $gebruikersnaamCheck) {
            echo "deze gebruikersnaam bestaat al";
        } else {
            if ($result) {

                echo "Records added successfully.";
                header("location: index.php");
            } else {

                echo "ERROR: Could not able to send data ";
                echo "Connect failed: %s\n" . $conn->error;
            }
        }
    }
}
