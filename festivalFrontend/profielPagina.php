<?php require("header.php"); ?>
<?php require_once('db_connect.php'); ?>
<?php require_once('db_functions.php'); ?>
<?php require('authen_session.php'); ?>
<?php require_once("logout.php"); ?>
<?php
login();
logout();

if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Home Page
}
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
                <article class="clear">
                    <figcaption>
                        <h2>informatie over uw profiel</h2>
                        <div id="container" class="clear">
                            <div>
                                <?php profiel(); ?>

                    </figcaption>
                    </figure>
                </article>
            </div>


</form>


<?php require("footer.php"); ?>