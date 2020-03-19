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

function login(){
    if (isset($_POST['gebruikersnaam']) and isset($_POST['wachtwoord']) and isset($_POST['btnLogin'])){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "festival";

        // Assigning POST values to variables.   
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord = $_POST['wachtwoord'];
    
        // CHECK FOR THE RECORD FROM TABLE
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        $query = "SELECT * FROM `klanten` WHERE Gebruikersnaam ='" . $gebruikersnaam . "' and Wachtwoord ='" . $wachtwoord . "'";
    
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);
    
    
        if ($count == 1) {
            //echo "Login Credentials verified";
            header("location: index.php");
  
        } else {
            header("location: index.php");
    
            //echo "Invalid Login Credentials";
        }
        //$GLOBALS[$inlog];
        function inlogCheck($count, $inlog)
        {
            if ($count == 1) {
                $inlog == 1;
                   // in top of PHP file
                $_SESSION["inlog"] = $inlog;
            } else {
                $inlog == 0;
                   // in top of PHP file
                $_SESSION["inlog"] = $inlog;
            }
        }
    }
}
