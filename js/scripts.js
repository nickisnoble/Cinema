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

(function($){
  $('.container').fitVids();
})(jQuery);

$(function() {
  var animSpeed = 400;

  var iframe = $('iframe')[0],
      player = $f(iframe),
      underlay = jQuery('.video-underlay');

  player.addEvent('ready', function() {
    player.addEvent('play', onPlay);
    player.addEvent('pause', onPause);
    player.addEvent('finish', onFinish);
  });

  function onPlay(id) {
    underlay.fadeIn(animSpeed);
  }

  function onPause(id) {
    underlay.fadeOut(animSpeed);
  }

  function onFinish(id) {
    underlay.fadeOut(animSpeed);
  } 

  jQuery('.video-underlay').click(function(){ 
    $(this).fadeOut(animSpeed);  
    player.api('pause'); 
  });

});