//funcion para girar la carta en login//
function girarCarta() {
  document.getElementById('flip-container').classList.toggle('girado');
}


// Agrega un id o clase a la imagen y la sección
const img = document.querySelector('.img-home');
const info = document.querySelector('.ingredientes-info');

img.addEventListener('mouseenter', () => {
  info.style.display = 'block';
});
img.addEventListener('mouseleave', () => {
  info.style.display = 'none';
});