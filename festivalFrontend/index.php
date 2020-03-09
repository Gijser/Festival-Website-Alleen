<?php require("header.php"); ?>


<body>
  <div class="wrapper row1">
    <header id="header" class="clear">
      <div id="hgroup">
        <h1><a href="#">Rock Festival</a></h1>
        <h2>festival</h2>
      </div>
      <nav id="nav">
        <ul>
          <li><a href="Tickets.php">Tickets</a></li>
          <li><a href="loginPagina.php">Inloggen/Registreren</a></li>
          <li class="last"><a href="profielPagina.php">Profiel</a></li>
        </ul>
      </nav>
    <nav id="navLogin">
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
  </div>
  <!-- content -->


  <img class="img1" src="img1.jfif" style="width:50%">

  <div class="wrapper row2">
    <div id="container" class="clear">
      <!-- content body -->
      <div id="homepage">
        <section id="shout">
          <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla laoremut vitae doloreet condimentumst.</p>
        </section>
      </div>
      <!-- main content -->
      <div id="content">
        <section id="services" class="last clear">
          <ul>
            <li>
              <article class="clear">
                <figcaption>
                  <h2>Tickets zijn nu te bestellen</h2>
                  <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla laoremut vitae doloreet condimentumst.</p>
                  <footer class="more"><a href="#">Read More &raquo;</a></footer>
                </figcaption>
                </figure>
              </article>
            </li>
            <li>
              <article class="clear">
                <figcaption>
                  <h2>nieuw festival</h2>
                  <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla laoremut vitae doloreet condimentumst.</p>
                  <footer class="more"><a href="#">Read More &raquo;</a></footer>
                </figcaption>
                </figure>
              </article>
            </li>
            <li class="last">
              <article class="clear">
                <figcaption>
                  <h2>aankondiging festival</h2>
                  <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla laoremut vitae doloreet condimentumst.</p>
                  <footer class="more"><a href="#">Read More &raquo;</a></footer>
                </figcaption>
                </figure>
              </article>
            </li>
          </ul>
        </section>
      </div>
      <!-- / content body -->
    </div>
  </div>
  </div>


  <?php require("footer.php"); ?>