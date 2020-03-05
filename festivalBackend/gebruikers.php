<?php require("header.php"); ?>

<div class="wrapper row1">
    <header id="header" class="clear">
        <div id="hgroup">
            <h1><a href="#">Rock Festival</a></h1>
            <h2>festival</h2>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="klanten.php">klanten</a></li>
                <li><a href="bestellingen.php">Bestellingen</a></li>
                <li id="last"><a href="login.php">Uitloggen</a></li>
            </ul>
        </nav>
    </header>
</div>

<div class="wrapper row2">
    <div id="container" class="clear">
        <div>
            <table id="table" border="1px">
                <tr>
                    <td>
                    </td>
                    <td>
                        <p>Voornaam</p>
                    </td>
                    <td>
                        <p>Achternaam</p>
                    </td>
                    <td>
                        <p>Email</p>
                    </td>
                    <td>
                        <p>Telefoonnummer</p>
                    </td>
                    <td>
                        <p>Gebruikersnaam</p>
                    </td>
                    <td>
                        <p>Wachtwoord</p>
                    </td>
                    <td>
                        <p>Rol</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>
                        <p></p>
                    </td>
                    <td>
                        <p></p>
                    </td>
                    <td>
                        <p></p>
                    </td>
                    <td>
                        <p></p>
                    </td>
                    <td>
                        <p></p>
                    </td>
                    <td>
                        <p></p>
                    </td>
                    <td>
                        <p></p>
                    </td>
                </tr>
            </table>
            <div>
                <input id="delete" name="delete" type="button" value="Verwijderen">
            </div>
        </div>

        <?php require("footer.php"); ?>