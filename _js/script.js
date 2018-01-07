// erst ausführen, wenn die Seite komplett geladen ist
document.addEventListener('DOMContentLoaded', function () {

  "use strict";
var gf_active_status = true;
// Variable (gf_menu) anlegen mit dem Inhalt aus dem ersten Element "figure"
var gf_menu = document.getElementsByTagName('figure')[0];

// Beispiele auf javascript.php
// Variable für das erste Beispiel der Button getElementById
var gf_button01 = document.getElementById('gf_id-element');

var gf_element_back = document.getElementById('gf_id-element_back');

// Eventlistener 'click' an die Variable hängen und Funktion aufrufen
gf_menu.addEventListener('click', gf_menu_func, false);
gf_button01.addEventListener('click', gf_button01_func, false);
gf_element_back.addEventListener('click', gf_element_back_func, false);


function gf_menu_func() {
    var gf_objekt = document.getElementsByTagName('nav');
    if (gf_active_status == false) {
      gf_active_status = true;
      gf_objekt[0].classList.add('gf_active_menu');
    } else {
      gf_active_status = false;
      gf_objekt[0].classList.remove('gf_active_menu');
    }
  }

function gf_button01_func() {
  // Variable innerhalb der Funktion definieren. Ist außerhalb nicht gültig
  var x = document.getElementById('gf_bsp01');
  // HTML-Inhalt von dem Element(Variable 'x') wird ausgetauscht.
  x.innerHTML = "mit getElementById('gf_button01') wurde an den Button das KlickEvent angehangen und der Inhalt von getElementById('gf_bsp01') getauscht";
}

function gf_element_back_func() {
  // Variable innerhalb der Funktion definieren. Ist außerhalb nicht gültig
  var x =document.getElementById('gf_bsp01');
  // HTML-Inhalt von dem Element(Variable 'x') wird ausgetauscht.
  x.innerHTML = 'Beispiel 01';

}

});
