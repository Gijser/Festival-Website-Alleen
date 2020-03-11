<?php require_once('db_connect.php'); ?>
<?php

function insertDB()
{
    if (isset($_POST['button'])){
    $dbhost = "localhost";
    $dbuser = "admin";
    $dbpass = "";
    $db = "festival";


    $naam = "Tibot";
    $ww = "Fluisterbusje";
    $order = "123";

    $conn = mysqli_connect($dbhost, $dbuser,$dbpass, $db);
    $sqlInsert = "INSERT INTO klan(username, wachtwoord, ordernummer) VALUES ('$naam', '$ww', '$order')";
    $result = mysqli_query($conn, $sqlInsert);

    if ($result) {
        
        echo "Records added successfully.";
    } else {
        
        echo "ERROR: Could not able to send data ";

    }
    }
}

?>
