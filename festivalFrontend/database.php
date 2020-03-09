<?php

require_once("db_credentials.php");

function db_connect(){
    $connection = mysqli_connect(DB_SERVER, DB_USER,DB_PASS, DB_NAME);
    return $connection;
}

function db_disconnect($connection){
    if (isset($connection)){
        mysqli_close($connection);
    }
}
function insert(){
    if (isset($_POST['btnRegister'])) {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $email = $_POST['email'];
        $wachtwoord = $_POST['wachtwoord'];

        $con = mysqli_connect('localhost', 'festivalUser', '123', 'festival');
        $sql = "INSERT INTO klanten (Voornaam, Achternaam, Email, Gebruikersnaam, Wachtwoord) VALUES ('$voornaam', '$achternaam', '$email', '$gebruikersnaam', '$wachtwoord')";

        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "Records added successfully.";
        } else {
            echo "ERROR: Could not able to send data ";
        }
        header("location: ticketBevestiging.php");
    }
}
