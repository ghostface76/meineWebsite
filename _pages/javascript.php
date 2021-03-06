<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Meine Lernseite</title>
    <link rel="stylesheet" href="../_css/style1.css">
    <script src="../_js/functions.js" charset="utf-8"></script>
    <script src="../_js/functions.js" charset="utf-8"></script>
    <script src="../_js/script.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <?php
include('../_include/nav.php');


?>
    </header>
    <main>
      <section>
        <article class="">
          <h2>Variablen</h2>
          <p>Eine Variable ist sozusagen ein einfacher Behälter für Daten</p>
          <p>Variablen definieren: </p><div class="">
            var Variablenname: Inhalt;
          </div>
          <ul>
            <li>Deklarieren Sie Variablen immer mit var, da Sie sonst globale Variablen erzeugen, die später evtl. ungewollte Konsequenzen nach sich ziehen.</li>
            <li>
              Geben Sie Variablen selbsterklärende Namen, damit Sie in ein paar Wochen wieder erkennen können, was diese Variable beinhalten soll.
            </li>
            <li>Beachten Sie die Regeln für selbstvergebene Namen.</li>
          </ul>
        </article>
      </section>

      <section>
        <h2>1. JavaScript Events abfangen, Funktionen ansprechen und Elemente suchen</h2>
        <article class="">
          <h3>1.1. Elemente suchen</h3>
          <p>bis jetzt kenne ich 3 Möglichkeiten:</p>
          <ul>
            <li>
              <h4>1.1.1 GetElementById</h4>
              <p>damit greift man auf die Id's zu, die in HTML vergeben wurden.</p>
              <div class="beispiel">
                <button id="gf_id-element" type="button" name="button">Button01</button>
                <p id="gf_bsp01">Beispiel 01</p>
                <button id="gf_id-element_back" type="button" name="button">zurück</button>
              </div>
            </li>
            <li>
              <h4>1.1.2 GetElementsbyClass</h4>
            </li>
            <li>
              <h4>1.1.3 GetElementsbyTagName</h4>
            </li>
          </ul>


        </article>

      </section>
    </main>
    <footer></footer>
  </body>
</html>
