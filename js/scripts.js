(function($){
  $('[data-toggle=menu]').click( function(e){
    e.preventDefault;
    $('body').toggleClass('menu-open');
  });
  $('.menu-open').click( function(event){ // if the menu is open and they click
     // Find out what they clicked on.
      var target = $( event.target );
      // If they click on a nav link...
      if(target.is('.site-navigation a')){
        // Do nothing.
      }else{
        event.preventDefault;
        $('body').toggleClass('menu-open');
      }
  });
})(jQuery);