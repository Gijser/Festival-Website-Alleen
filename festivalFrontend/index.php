<?php require ("header.php"); ?>
<?php require_once ("logout.php"); ?>
<?php require_once ('db_connect.php'); ?>
<?php require_once ('db_functions.php'); ?>

<?php
login();
logout();

?>


<body>
  <div class="wrapper row1">
    <header id="header" class="clear">
      <div id="hgroup">
        <h1><a href="index.php">The Open Rock Festival</a></h1>
        <h2>Het festival voor jou!</h2>
      </div>
      <nav id="nav">
        <ul>
          <li><a href="Tickets.php">Tickets</a></li>
          <li class="last"><a href="profielPagina.php">Profiel</a></li>
        </ul>
      </nav>
      <form method="POST">
        <nav id="nav">
          <table>
            <?php loginField(); ?>


            </tr>
          </table>
        </nav>
      </form>
    </header>
  </div>
  <!-- content -->


  <img class="img1" src="jera-on-air-netherlands-main.jpg" style="width:50%">

  <div class="wrapper row2">
    <div id="container" class="clear">
      <!-- content body -->
      <div id="homepage">
        <section id="shout">
          <p>Welkom bij het Open Rock Festival, dé plek waar passie voor muziek tot leven komt en de energie van de
            rockscene voelbaar is. Bij ons draait alles om het vieren van de krachtige klanken, de rauwe emotie en de
            onmiskenbare vibe van rockmuziek.</p>
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
                  <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede
                    estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna
                    neque sed quis orci nulla laoremut vitae doloreet condimentumst.</p>
                  <footer class="more"><a href="#">Read More &raquo;</a></footer>
                </figcaption>
                </figure>
              </article>
            </li>
            <li>
              <article class="clear">
                <figcaption>
                  <h2>nieuw festival</h2>
                  <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede
                    estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna
                    neque sed quis orci nulla laoremut vitae doloreet condimentumst.</p>
                  <footer class="more"><a href="#">Read More &raquo;</a></footer>
                </figcaption>
                </figure>
              </article>
            </li>
            <li class="last">
              <article class="clear">
                <figcaption>
                  <h2>aankondiging festival</h2>
                  <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede
                    estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna
                    neque sed quis orci nulla laoremut vitae doloreet condimentumst.</p>
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


  <?php require ("footer.php"); ?>