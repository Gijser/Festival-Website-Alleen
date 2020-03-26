<?php require("header.php"); ?>
<?php require_once('db_connect.php'); ?>
<?php require_once('db_fuctions.php'); ?>

<?php
login();
?>

<form>
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
                        <td>
                        <a href="loginPagina.php"><input type="button" name="btnReg" value="registreren"></a>
                        </td>
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
            <table id="table" border="1px">
                <tr>
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
          <p>heel wat info</p>
        </figcaption>
        </figure>
      </article>
      </div>


</form>


<?php require("footer.php"); ?>