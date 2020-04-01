<?php require("header.php"); ?>
<?php require_once('db_connect.php'); ?>
<?php require_once('db_functions.php'); ?>
<?php require_once("logout.php"); ?>
<?php
login();
logout();
?>


<form method="POST">
    <div class="wrapper row1">
        <header id="header" class="clear">
            <div id="hgroup">
                <h1><a href="#">Rock Festival</a></h1>
                <h2>festival</h2>
            </div>
            <nav id="nav">
                <ul>
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
                <h2>Tickets</h2>
            </div>
            <div id="container" class="clear">
                <h1>Basic</h1>
                <p>€40</p>
                <p>dit is de basis ticket</p>
            </div>
            <div id="container" class="clear">
                <h1>Premium</h1>
                <p>€60</p>
                <p>Dit is een premium ticket</p>
            </div>
            <div id="container" class="clear">
                <h1>Vips</h1>
                <p>€100</p>
                <p>Dit is een vip ticket</p>
            </div>
        </div>
    </div>
    </body>


    <?php require("footer.php"); ?>