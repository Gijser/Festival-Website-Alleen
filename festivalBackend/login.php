<?php require("header.php"); ?>



<div class="wrapper row1">
    <header id="header" class="clear">
        <div id="hgroup">
            <h1><a href="#">Rock Festival</a></h1>
            <h2>festival</h2>
        </div>
    </header>
</div>
<div class="wrapper row2">
    <div id="container" class="clear">
        <!-- content body -->
        <div id="homepage">
            <section id="shout">
                <p>Inloggen</p>
            </section>
        </div>
    </div>
    <div class="clear">
        <div id="container">
            <section id="shout2">
                <div>
                    <input type="Text" placeholder="Gebruikersnaam">
                </div>
                <div>
                    <input type="Password" placeholder="Wachtwoord">
                </div>
            </section>
            <div>
                <section id="shout2">
                    <input type="button" name="inlogButton" value="Inloggen" onclick="window.location.href = 'index.php'">
                </section>
            </div>
        </div>
    </div>
</div>




<?php require("footer.php"); ?>