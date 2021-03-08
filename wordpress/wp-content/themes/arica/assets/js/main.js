$(document).ready(function () {
    $('body').delay(400).fadeIn(1000)

    $(document).scroll(function() {
      var y = $(this).scrollTop();
      if (y > 100) {
        $('header').addClass('desce');
      } else {
        $('header').removeClass('desce');
      }
    });

});

$(".carrossel").owlCarousel({
    items: 1,
    autoplay: 1,
    slideSpeed: 300,
  	paginationSpeed: 3000,
  	loop: !0,
    nav: 0,
    autoplayHoverPause: true,
    mouseDrag:0,
})

$('.bt-menu').click(function(){
  $('header').toggleClass('open')
  $('body').toggleClass('fixed')
})

$('.lightbox .bt-fechar').click(function(){
  $('.lightbox').fadeOut(800)
  $('.lightbox iframe').attr('src','')
  $('body').toggleClass('fixed')
})

$('.lang-btn button').on('click', function() {
  idioma = $(this).attr('lg-op')
  $('.lang-btn button').removeClass('active')
  $('.lang-btn button[lg-op='+idioma+']').addClass('active')
  $('.multi-lang:not(.'+idioma+')').fadeOut(800)
  $('.'+idioma).delay(800).fadeIn(800)
})
