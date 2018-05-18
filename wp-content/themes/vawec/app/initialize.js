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

document.addEventListener('DOMContentLoaded', function () {

  $(document).ready(function () {
    smoothscroll();
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
