(function($){
  $(function() {
    $('.menu__icon').on('click', function() {
      $(this).closest('.menu').toggleClass('menu_state_open');
    });
      
    $('.menu__item').on('click', function() {
      $('.menu').removeClass('menu_state_open');
    });
  });
})(jQuery);