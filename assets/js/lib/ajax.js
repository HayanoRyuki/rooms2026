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
	
// =========================================================
  //  共通仕様: ドロップダウン方式モバイルメニュー
  //  - body overflow ロックなし（スクロール可能）
  //  - オーバーレイなし
  //  - ESCキー / リサイズ / リンククリック でクローズ
  // =========================================================
  var hamburger = document.querySelector('.l-header__hamburger');
  var nav = document.querySelector('.l-header__nav');

  function openMenu() {
    if (!hamburger || !nav) return;
    hamburger.classList.add('is-active');
    hamburger.setAttribute('aria-expanded', 'true');
    hamburger.setAttribute('aria-label', 'メニューを閉じる');
    nav.classList.add('is-open');
  }

  function closeMenu() {
    if (!hamburger || !nav) return;
    hamburger.classList.remove('is-active');
    hamburger.setAttribute('aria-expanded', 'false');
    hamburger.setAttribute('aria-label', 'メニューを開く');
    nav.classList.remove('is-open');
  }

  function toggleMenu() {
    if (!hamburger || !nav) return;
    if (nav.classList.contains('is-open')) {
      closeMenu();
    } else {
      openMenu();
    }
  }

  // ハンバーガークリック → toggleMenu
  if (hamburger) {
    hamburger.addEventListener('click', toggleMenu);
  }

  // ナビリンククリック → 960px以下のときのみ closeMenu
  if (nav) {
    nav.querySelectorAll('a').forEach(function(link) {
      link.addEventListener('click', function() {
        if (window.innerWidth <= 960) {
          closeMenu();
        }
      });
    });
  }

  // ESCキー → メニューが開いているとき closeMenu
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && nav && nav.classList.contains('is-open')) {
      closeMenu();
    }
  });

  // ウィンドウリサイズ → 961px以上になったら自動 closeMenu
  window.addEventListener('resize', function() {
    if (window.innerWidth > 960 && nav && nav.classList.contains('is-open')) {
      closeMenu();
    }
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