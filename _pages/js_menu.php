<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Meine Lernseite</title>
    <link rel="stylesheet" href="../_css/style1.css">
    <script src="../_js/functions.js" charset="utf-8"></script>
    <script src="../_js/script.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <?php

      $path = __DIR__.'../_include/nav.php';
  include ('../_include/nav.php');

  ?>

    </header>
    <main>
      <section>
        <article class="">
          <h2>Reaktionen auf UserInteraktion</h2>
          <p>Um auf UserInteraktion zu reagieren, benötigt das Element im DOM einen EventHandler. Dazu muss das Element ersteinmal aus dem Dom ermittelt werden. Das geschieht mit:</p>
            <div class="">
            document.getElementById(ID)
          </div>
        <p>heißt: nimm das gesamte Dokument (document...) und suche das Element mit der Id: ID </p>

        </article>
      </section>
      <section>
        <article class="">
          <p data-height="472" data-theme-id="dark" data-slug-hash="eyvqEX" data-default-tab="css,result" data-user="ghostface_hy" data-embed-version="2" data-pen-title="Flexed Column using  a CSS Pseudo-Element" class="codepen">See the Pen <a href="https://codepen.io/ghostface_hy/pen/eyvqEX/">Flexed Column using  a CSS Pseudo-Element</a> by ghost (<a href="https://codepen.io/ghostface_hy">@ghostface_hy</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
        </article>
      </section>
      <section>
        <article class="">
          <p data-height="265" data-theme-id="dark" data-slug-hash="eyvqja" data-default-tab="js,result" data-user="ghostface_hy" data-embed-version="2" data-pen-title="test" class="codepen">See the Pen <a href="https://codepen.io/ghostface_hy/pen/eyvqja/">test</a> by ghost (<a href="https://codepen.io/ghostface_hy">@ghostface_hy</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>

        </article>
      </section>

    </main>
    <footer></footer>
  </body>
</html>
