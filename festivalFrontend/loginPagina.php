<?php require("header.php"); ?>
<?php require_once('db_connect.php'); ?>
<?php require_once('db_functions.php'); ?>
<?php require_once("logout.php"); ?>
<?php
insertDB();
login();
logout();
?>

<form method="post">
    <div class="wrapper row1">
        <header id="header" class="clear">
            <div id="hgroup">
                <h1><a href="index.php">Rock Festival</a></h1>
                <h2>festival</h2>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="Tickets.php">Tickets</a></li>
                    <li><a href="profielPagina.php">Profiel</a></li>
                    <li class="last"><a href="index.php">Home</a></li>
                </ul>
            </nav>
            <nav id="nav">
                <table>
                    <?php loginField(); ?>
                    </tr>
                </table>
            </nav>
        </header>
        <div class="wrapper row2">
            <div id="container" class="clear">
                <div>
                    <p>registreren</p>
                    <form class="align-center">
                        <div>
                            <input type="text" name="voornaam" placeholder="voornaam">
                        </div>
                        <div>
                            <input type="text" name="achternaam" placeholder="achternaam">
                        </div>
                        <div>
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                        <div>
                            <input type="text" name="Gebruikersnaam" placeholder="gebruikersnaam">
                        </div>
                        <div>
                            <input type="text" name="Wachtwoord" placeholder="wachtwoord">
                        </div>
                        <div>
                            <input type="submit" name="btnRegister" value="registreren">
                        </div>

                        <form>
                </div>
            </div>
        </div>




</form>


<?php require("footer.php"); ?>