function loaderEnd() {
  $("#loader").fadeOut(400, function () {
    $("#preloader").delay(300).fadeOut(400);
  });
}

function smoothscroll() {
  $('.smoothscroll').on("click", function (event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, 500);
  });
}

function showGoToTop() {
  if ($(document).scrollTop() < 300) {
    $('#go-top').removeClass('visible');
  }
  if ($(document).scrollTop() > 300) {
    $('#go-top').addClass('visible');
  }
}

function initializeIsotop() {
  if ($('.iso-box-wrapper').length > 0) {

    var $container = $('.iso-box-wrapper');
    $('.grid').isotope({
      // options
      itemSelector: '.iso-box',
      layoutMode: 'fitRows'
    });

    //filter items on button click

    $('.filter-wrapper li span').click(function () {

      var $this = $(this);
      var filterValue = $this.attr('data-filter');

      $container.isotope({
        filter: filterValue,
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false,
        }
      });

      // don't proceed if already selected 

      if ($this.hasClass('selected')) {
        return false;
      }

      var filter_wrapper = $this.closest('.filter-wrapper');
      filter_wrapper.find('.selected').removeClass('selected');
      $this.addClass('selected');

      return false;
    });

  }

}

function openCloseNav() {
  var button = $('button.hamburger');
  var nav = $('nav#nav');
  var html = $('html');
  var elements = $('nav #elements');
  var socialLink = $('nav .social a');
  var delayLinkSocial = 8;
  var unitDelay = 0;

  socialLink.each(function () {
    if (delayLinkSocial < 10) {
      $(this).css({
        '-webkit-animation-delay': '0.' + delayLinkSocial + 's',
        'animation-delay': '0.' + delayLinkSocial + 's'
      });
    } else {
      unitDelay = unitDelay + (delayLinkSocial - 10);
      $(this).css({
        '-webkit-animation-delay': '1.' + unitDelay + 's',
        'animation-delay': '1.' + unitDelay + 's'
      });
    }
    delayLinkSocial++;
  });

  button.on('click', function (event) {
    event.preventDefault;
    button.toggleClass('is-active');
    nav.toggleClass('open');
    nav.toggleClass('close');
    html.toggleClass('open');
  });
}

document.addEventListener('DOMContentLoaded', function () {

  $(document).ready(function () {
    smoothscroll();
    openCloseNav();
  });

  $(window).on('load', function () {
    loaderEnd();
    initializeIsotop();
    new WOW().init();
  });

  $(document).on('scroll', function () {
    showGoToTop();
  });
});