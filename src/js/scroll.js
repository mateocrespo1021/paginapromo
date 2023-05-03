const enlaces = document.querySelectorAll('a[href^="#"]');

enlaces.forEach(enlace => {
  enlace.addEventListener('click', function(evento) {
    evento.preventDefault();

    const seccion = document.querySelector(this.getAttribute('href'));

    animarDesplazamiento(seccion, 250);
  });
});

function animarDesplazamiento(elemento, margenSuperior = 0) {
  window.scrollTo({
    top: elemento.offsetTop - margenSuperior,
    behavior: 'smooth'
  });
}
