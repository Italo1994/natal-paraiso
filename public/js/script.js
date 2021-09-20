/* MATERIALIZE JS */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, options);
  });

  /* ===== PRÓPRIAS FUNÇÕES ===== */

/* Função chamada no carregamento da página home*/
function start() {
  //setTimeout(carousel, 4000);

  setInterval(carousel, 5000); // chama a função carrousel da página home
}

/* Função que determina o efeito de transição das imagens de apresentação do header na Home */
function carousel() {
  var pathIgm = [
    "/img/eiffel-tower.jpg",
    "/img/palace.jpg",
    "/img/canal_veneza.jpg"
  ];

  let tamArr = pathIgm.length;
  let header = document.getElementById("header"); // seleciona o header

  let randomImg = Math.floor( (Math.random() * 10) % 3 ); // gera números aleatórios entre 0 e 3 para os índices do array de imagens

  header.style.backgroundImage = 'url(' + pathIgm[randomImg] + ')'; // altera a imagem de fundo
  header.style.setProperty('transition', 'all 1.5s'); // adiciona a propriedade de transição

}