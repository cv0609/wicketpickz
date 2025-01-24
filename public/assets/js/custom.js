

(function ($) {

  "use strict";

  // NAVBAR
  $('.navbar-collapse a').on('click', function () {
    $(".navbar-collapse").collapse('hide');
  });

  $(function () {
    $('.hero-slides').vegas({
      slides: [
        { src: 'assets/images/slides/cricket-banner.webp' },
        { src: 'assets/images/banner-2.jpeg' },
        { src: 'assets/images/banner-3.webp' },

      ],
      timer: false,
      animation: 'kenburns',
    });
  });

  // CUSTOM LINK
  $('.smoothscroll').click(function () {
    var el = $(this).attr('href');
    var elWrapped = $(el);
    var header_height = $('.navbar').height() + 60;

    scrollToDiv(elWrapped, header_height);
    return false;

    function scrollToDiv(element, navheight) {
      var offset = element.offset();
      var offsetTop = offset.top;
      var totalScroll = offsetTop - navheight;

      $('body,html').animate({
        scrollTop: totalScroll
      }, 300);
    }
  });

})(window.jQuery);


// tab selcted
$('.tab').on('click', function (evt) {
  evt.preventDefault();
  $('.tab').removeClass('active');
  $(this).addClass('active');
  var sel = $(this).attr('data-toggle-target');
  $('.tab-content').removeClass('active');
  $(sel).addClass('active');
});
$(".profile").click(function () {
  $(this).find(".dropdown").slideToggle();
});


// Blogs Cards JS Start
$(document).ready(function() {
  $('.toggle-button').on('click', function(event) {
    event.stopPropagation(); 

    var $card = $(this).closest('.custom-blog-card');
    var $toggleButton = $(this);
    var $hiddenContent = $card.find('.hidden-content');


    $card.toggleClass('expanded');
    if ($card.hasClass('expanded')) {
      $hiddenContent.slideDown(500);
      $toggleButton.text('Read Less...');
    } else {
      $hiddenContent.slideUp(500);
      $toggleButton.text('Read More...');
    }
  });
});
// Blogs Cards JS End

