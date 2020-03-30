<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "festival";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT Gebruikersnaam, Wachtwoord FROM klanten WHERE Gebruikersnaam = '$user_check'";
$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($sql);
$login_session = $row['Gebruikersnaam'];
?>
