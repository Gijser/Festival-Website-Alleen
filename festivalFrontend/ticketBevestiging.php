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
            <h1><a href="index.php">Rock Festival</a></h1>
                <h2>festival</h2>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="profielPagina.php">Profiel</a></li>
                    <li><a href="Tickets.php">Tickets</a></li>
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
                <h2>weet u zeker dat u de tickets wilt bestellen?</h2>
            </div>
        </div>
</form>


<?php require("footer.php"); ?>