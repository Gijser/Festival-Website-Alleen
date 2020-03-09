<?php require("header.php"); ?>




<?php
db_connect();
insert();

?>

<form>
    <div class="wrapper row1">
        <header id="header" class="clear">
            <div id="hgroup">
                <h1><a href="#">Rock Festival</a></h1>
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
                    <tr>
                        <td>
                            <input type="input" name="gebruikersnaam" placeholder="gebruikersnaam">
                        </td>
                        <td>
                            <input type="input" name="wachtwoord" placeholder="wachtwoord">
                        </td>
                        <td>
                            <input type="submit" name="btnLogin" value="login">
                        </td>
                    </tr>
                </table>
            </nav>
        </header>
        <div class="wrapper row2">
            <div id="container" class="clear">
                <p>inloggen</p>
                <table>
                    <tr>
                        <td>
                            <input type="input" name="gebruikersnaam" placeholder="gebruikersnaam">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="input" name="wachtwoord" placeholder="wachtwoord">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="btnLogin" value="Login">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="wrapper row2">
        <div id="container" class="clear">
            <div>
                <p>registreren</p>
                <table>
                    <tr>
                    <tr>
                        <td>
                            <input type="text" name="voornaam" placeholder="voornaam">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="achternaam" placeholder="achternaam">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="email" placeholder="E-mail">
                        </td>
                    </tr>
                    <td>
                        <input type="text" name="Gebruikersnaam" placeholder="gebruikersnaam">
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="Wachtwoord" placeholder="wachtwoord">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="btnRegister" value="registreren">
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>




</form>


<?php require("footer.php"); ?>