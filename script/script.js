$( document ).ready(function() {
  $('#fullpage').fullpage();



    $('.button.unclicked').on('click',function(){
    	$(this).animate({ width: "400px" }, 500 )
   				.animate({ height: "500px" }, 500 );
   	TweenMax.staggerFrom(".button.unclicked .info li", 1, {x:100,opacity:0,delay:1},0.2);	
   	$('.button.unclicked').removeClass('unclicked');

    })



    $('.paiment').on('click',function(){
    	$('.button').addClass('filled');
    	$('.info').fadeOut();
    })
});