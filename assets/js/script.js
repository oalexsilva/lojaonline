
  /*----------Incio do Slide---------------F*/
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  /*----------Fim do Slide---------------*/


  /*----------Incio Menu Hamburguer---------------*/
  const btnMobile = document.getElementById('btn-mobile');

  function toggleMenu(event) {
    if (event.type === 'touchstart') event.preventDefault();
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
    const active = nav.classList.contains('active');
    event.currentTarget.setAttribute('aria-expanded', active);
    if (active) {
      event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
    } else {
      event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
    }
    
  }

  btnMobile.addEventListener('click', toggleMenu);
  btnMobile.addEventListener('touchstart', toggleMenu);

  /*----------Fim  Menu Hamburguer--------------*/


  
// Defina a data e hora de término da oferta relâmpago (ano, mês (zero indexado), dia, hora, minuto, segundo)
var endDate = new Date();
endDate.setHours(endDate.getHours() + 3); // Adiciona 3 horas

// Função para atualizar a contagem regressiva
function updateCountdown() {
    var now = new Date();
    var timeLeft = endDate - now;

    // Verifica se a oferta já acabou
    if (timeLeft < 0) {
        document.getElementById('countdown').innerHTML = "Oferta expirada!";
    } else {
        var hours = Math.floor(timeLeft / (1000 * 60 * 60));
        var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        // Formata a contagem regressiva
        var countdownString = hours + "h " + minutes + "m " + seconds + "s";

        // Exibe a contagem regressiva na página
        document.getElementById('countdown').innerHTML = countdownString;
    }
}

// Chama a função de atualização da contagem regressiva a cada segundo
setInterval(updateCountdown, 1000);

// Atualiza a contagem regressiva imediatamente ao carregar a página
updateCountdown();



  