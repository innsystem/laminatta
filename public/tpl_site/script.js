$(document).ready(function () {
  // Adiciona classe ao scroll
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('.floating-whatsapp').addClass('visible');
    } else {
      $('.floating-whatsapp').removeClass('visible');
    }
  });

  // Animação de entrada dos elementos ao rolar a página
  function animateOnScroll() {
    $('.benefit-card, .service-card, .custom-card').each(function () {
      var elementPosition = $(this).offset().top;
      var topOfWindow = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (elementPosition < topOfWindow + windowHeight - 100) {
        $(this).addClass('animate__animated animate__fadeInUp');
      }
    });
  }

  // Adiciona classes de animação ao carregar a página
  setTimeout(function () {
    $('.hero-section img').addClass('animate__animated animate__fadeInDown');
    $('.hero-section h1').addClass('animate__animated animate__fadeInDown');
    $('.hero-section p').addClass('animate__animated animate__fadeInUp');
    $('.hero-section .cta-button').addClass('animate__animated animate__bounceIn');
  }, 250);
  setTimeout(function () {
    $('.hero-section .cta-button').addClass('animate__animated animate__bounceIn');
  }, 450);

  // Chamada da função de animação ao scroll
  $(window).on('scroll', animateOnScroll);

  // Smooth scroll para links internos
  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').animate({
      'scrollTop': $target.offset().top - 70
    }, 800, 'swing');
  });

  // Aumenta tamanho dos cards ao passar o mouse
  $('.benefit-card, .service-card, .custom-card').hover(
    function () {
      $(this).css('transform', 'translateY(-8px)');
    },
    function () {
      $(this).css('transform', 'translateY(0)');
    }
  );

  // Adiciona classe de animação ao botão de WhatsApp flutuante
  $('.floating-whatsapp').addClass('animate__animated animate__fadeInRight');
}); 