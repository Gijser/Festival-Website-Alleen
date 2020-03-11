<?php

function OpenCon()
{
$dbhost = "localhost";
$dbuser = "Admin";
$dbpass = "";
$db = "festival";
$conn = mysqli_connect($dbhost, $dbuser,$dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}


?>