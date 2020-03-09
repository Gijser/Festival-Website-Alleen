<?php require("header.php"); ?>

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
                        <td>
                            <input type="input" name="regGebruikern" placeholder="gebruikersnaam">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="input" name="regWW" placeholder="wachtwoord">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="input" name="regMail" placeholder="E-mail">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>




</form>


<?php require("footer.php"); ?>