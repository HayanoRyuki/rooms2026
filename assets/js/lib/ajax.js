// JavaScript Document

$(document).ready(function() {
	
	$('.header').load('./inc/header.html');

	$('.btm_nav').load('./inc/nav.html', function(data, status, object) {
    //header nav	
//  var $win = $(window), 
//	  $header = $('.header'),
//	  animationClass = 'transform';
//		
//  $win.on('load scroll', function() {
//    var value = $(this).scrollTop();
//    if ( value > 100 ) {
//      $header.addClass(animationClass);
//
//    } else {
//      $header.removeClass(animationClass);
//    }
//  });
	
// スマホドロップダウンメニュー  
  $(".navbar-burger").click(function() {
      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");
	  $("html").toggleClass("is-fixed");
  });


// 現在地にcurrent
		
//  $('.gnav-menu li a').each(function(){
//    var target = $(this).attr('href');
//		if(location.href.match(target)) {
//		  $(this).addClass('current');
//		} else {
//		  $(this).removeClass('current');
//		}
//  });

});	
	
	
	$('.service-index-wrap').load('./inc/service-index.html');	
	$('.footer').load('./inc/footer.html', function(data, status, object) {
				$('.foot-nav .tit-box span').click(function() {
			$(this).parent().next('.f-nav-list').slideToggle();
			  $(this).parent().next('.f-nav-list').toggleClass('.is-show');
		$(this).toggleClass('open');
		  });
});

});