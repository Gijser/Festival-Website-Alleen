<?php
    session_start();
    if(!isset($_SESSION["login  "])) {
        header("Location: db_functions.php");
        exit();
    }
