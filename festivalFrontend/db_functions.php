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
            header("location: index.php");
            echo "Invalid Login Credentials";
        }
    }
}
function profiel()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "festival";

    $user_check = $_SESSION['login_user'];

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $query = "SELECT Voornaam, Achternaam, Gebruikersnaam, Wachtwoord, Email FROM klanten WHERE Gebruikersnaam = '$user_check'";
    $sql = mysqli_query($conn, $query);


    if ($sql->num_rows > 0) {
        echo "<table><tr><th>Voornaam</th><th>Achternaam</th><th>Gebruikersnaam</th><th>Wachtwoord</th><th>Email</th></tr>";
        // output data of each row
        while ($row = $sql->fetch_assoc()) {
            echo "<tr><td>" . $row["Voornaam"] . "</td><td>" . $row["Achternaam"] . " </td><td>" . $row["Gebruikersnaam"] . "</td><td>" . $row["Wachtwoord"] . "</td><td>" . $row["Email"] . "</td></td>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}
function loginField()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "festival";

    if (isset($_SESSION['login_user'])) {
        $user_check = $_SESSION['login_user'];

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        $query = "SELECT Gebruikersnaam, Wachtwoord FROM klanten WHERE Gebruikersnaam = '$user_check'";
        $sql = mysqli_query($conn, $query);
        if ($sql->num_rows > 0) {
            echo "<td> u bent ingelogd " . $user_check . "</td>";
            echo "<td>";
            echo "<input type='submit' name='btnLogout' value='logout'>";
            echo "</td>";
        }
    } else {
        echo "<tr>";
        echo "<td>";
        echo "<input type='input' name='gebruikersnaam' placeholder='gebruikersnaam'>";
        echo "</td>";
        echo "<td>";
        echo "<input type='input' name='wachtwoord' placeholder='wachtwoord'>";
        echo "</td>";
        echo "<td>";
        echo "<input type='submit' name='btnLogin' value='login'>";
        echo "</td>";
        echo "<td>";
        echo "<a href='loginPagina.php'><input type='button' name='btnReg' value='registreren'></a>";
        echo "</td>";
    }
}
function bestellen()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "festival";


    if (isset($_POST['bestellen'])) {


        $basic = $_POST['basic'];
        $premium = $_POST['premium'];
        $vip = $_POST['vip'];

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        $user_check = $_SESSION['login_user'];
        $klantID = "SELECT KlantID FROM klanten WHERE Gebruikersnaam = '" . $user_check . "'";



        $result = mysqli_query($conn, $klantID) or die(mysqli_error($conn));
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $query = "INSERT INTO bestellingen(KlantID, Basic, Premium, Vip) values('" . $row['KlantID'] . "', '" . $basic . "' , '" . $vip . "', '" . $vip . "' )";
                mysqli_query($conn, $query) or die(mysqli_error($conn));
            }
        }
        $count = mysqli_num_rows($result);
    }
}
function ticketShow()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "festival";

    $user_check = $_SESSION['login_user'];

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);



    $query = "SELECT Gebruikersnaam ,BestellingID, Klanten.KlantID , bestellingen.Basic  , Premium, Vip 
    FROM bestellingen, klanten WHERE Gebruikersnaam = '$user_check' 
    AND bestellingen.KlantID = (SELECT KlantID FROM Klanten WHERE Gebruikersnaam = '$user_check')";
    $sql = mysqli_query($conn, $query);

    //print_r($sql);

    if ($sql->num_rows > 0) {
        echo "<table><tr><th>BestellingsNummer</th><th>Basic</th><th>Premium</th><th>Vip</th></tr>";
        // output data of each row
        while ($row = mysqli_fetch_assoc($sql)) {
            //print_r($row);
            echo "<tr><td>" . $row["BestellingID"] . "</td><td>" . $row["Basic"] . " </td><td>" . $row["Premium"] . "</td><td>" . $row["Vip"] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }
}
function ProfChange()
{
    if (isset($_POST['EditValue'])) {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "festival";

        //userChecks
        $user_check = $_SESSION['login_user'];

        $email = $_POST["email"];
        $gebruikersnaam = $_POST["Gebruikersnaam"];
        $wachtwoord = $_POST["Wachtwoord"];


        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        $sqlInsert = "UPDATE klanten SET Email = '$email' , Gebruikersnaam = '$gebruikersnaam', Wachtwoord = '$wachtwoord' WHERE Gebruikersnaam = '$user_check'";
        $result = mysqli_query($conn, $sqlInsert);
}
}