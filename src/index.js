// Función para volver al inicio al hacer click en el boton (flecha hacia arriba).
goTop = document.getElementById("gotop");

function topFunction() {
  document.body.scrollTop = 0; // Para Safari.
  document.documentElement.scrollTop = 0; // Para Chrome, Firefox y Opera.
}

function llegadaClub(val) {
    var element = document.getElementById('llegada');
    if(val == 'Otro') {
        element.style.display='block';
    } else {
        element.style.display='none';
    }
}

function socioRef(val) {
    var element = document.getElementById('numSocioRef');
    if(val == 'Si') {
        element.style.display='block';
    } else {
        element.style.display='none';
    }
}
