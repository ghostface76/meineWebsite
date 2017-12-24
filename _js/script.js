// erst ausführen, wenn die Seite komplett geladen ist
window.onload = function(){

// Variable (gf_element) anlegen mit dem Inhalt aus der ID
var gf_active_status = false;
var gf_element = document.getElementById('gf_click_id');
  var gf_button = document.getElementById('gf_button');

// Eventlistener 'click' an die Variable hängen
  gf_element.addEventListener('click',gf_click,false);
  gf_button.addEventListener('click',gf_button_click,false);

  function gf_click(){
    alert('test_Du wurdest geklickt');
  }

  function gf_button_click() {
    var gf_objekt = document.getElementsByTagName('section');
    if(gf_active_status == false) {
      gf_active_status = true;
      gf_objekt[1].classList.add('gf_active');
    } else {
      gf_active_status = false;
      gf_objekt[1].classList.remove('gf_active');
    }
  }

};
