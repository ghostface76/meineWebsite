// erst ausführen, wenn die Seite komplett geladen ist
window.onload = function () {

  // Variable (gf_element) anlegen mit dem Inhalt aus der ID
  var gf_active_status = true;
  var gf_element = document.getElementById('gf_click_id');
  var gf_button = document.getElementById('gf_button');
  var gf_menu = document.getElementsByTagName('figure')[0];

  // Eventlistener 'click' an die Variable hängen
  gf_menu.addEventListener('click', gf_menu_func, false);
  gf_element.addEventListener('click', gf_click, false);

  // alert(gf_button);
  gf_button_func();

  function gf_button_func() {
    if (gf_button != null) {
      gf_button.addEventListener('click', gf_button_click, false);
    }
  }

  function gf_click() {
    alert('test_Du wurdest geklickt');
  }

  function gf_button_click() {
    var gf_objekt = document.getElementsByTagName('section');
    if (gf_active_status == false) {
      gf_active_status = true;
      gf_objekt[1].classList.add('gf_active');
    } else {
      gf_active_status = false;
      gf_objekt[1].classList.remove('gf_active');
    }
  }

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

};