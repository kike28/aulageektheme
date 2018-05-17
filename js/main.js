//https://codepen.io/j_holtslander/pen/ddmMdY  Verificar este documento


// A $( document ).ready() block.
$(document).ready(function() {
    console.log( "ready!" );

//$(".dropdown-trigger").dropdown();
//$('.sidenav').sidenav();
//$('.slider').slider(false);
        
});

document.addEventListener('DOMContentLoaded', function() {
    // Inicializacion del Nav
    var elemsSideNav = document.querySelectorAll('.sidenav');
    var instancesSiteNav = M.Sidenav.init(elemsSideNav);
    // Inicializacion del Slide
    var elemsSlider = document.querySelectorAll('.slider');
    var instancesSlider = M.Slider.init(elemsSlider, {indicators: false});
    // Inicialización del dropdown-trigger
    var dropdowns = document.querySelectorAll('.dropdown-trigger')
    for (var i = 0; i < dropdowns.length; i++){
	M.Dropdown.init(dropdowns[i]);
    }
    
  });