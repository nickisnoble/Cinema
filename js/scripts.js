(function($){
  $('[data-toggle=menu]').click( function(e){
    e.preventDefault;
    $('body').toggleClass('menu-open');
  });
})(jQuery);