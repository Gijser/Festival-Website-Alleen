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
                <li><a href="gebruikers.php">Gebruikers</a></li>
                <li><a href="klanten.php">klanten</a></li>
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
                        <p>Datum</p>
                    </td>
                    <td>
                        <p>Klantnaam</p>
                    </td>
                    <td>
                        <p>Ticketsoort</p>
                    </td>
                    <td>
                        <p>Totaalprijs</p>
                    </td>
                </tr>
                <tr>
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
        </div>


        <?php require("footer.php"); ?>