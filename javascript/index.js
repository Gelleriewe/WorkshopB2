$(document).ready(function(){
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    duration: 5
  });
  setInterval(function(){
    $('.carousel.carousel-slider').carousel('next');
  }, 3000);
});

function scrollto(elem){
  scroll = '#' + elem;
  $('html, body').animate({
        scrollTop: $("#"+elem).offset().top
    }, 2000);
    $('#fleche1').toggleClass('rotate');
};
