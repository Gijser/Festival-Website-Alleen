<?php require_once('db_connect.php');
session_start();

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

function login()
{
    if (isset($_POST['gebruikersnaam']) and isset($_POST['wachtwoord']) and isset($_POST['btnLogin'])) {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "festival";

        // Assigning POST values to variables.   
        $gebruikersnaam = $_POST["gebruikersnaam"];
        $wachtwoord = $_POST["wachtwoord"];

        // CHECK FOR THE RECORD FROM TABLE
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        $query = "SELECT * FROM `klanten` WHERE Gebruikersnaam ='" . $gebruikersnaam . "' and Wachtwoord ='" . $wachtwoord . "'";

        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);


        if ($count == 1) {
            $_SESSION['login_user'] = $gebruikersnaam;
            header("location: profielPagina.php");
            echo "Login Credentials verified";
        } else {
            header("location: Tickets.php");
            echo "Invalid Login Credentials";
        }
    }
}    


    


