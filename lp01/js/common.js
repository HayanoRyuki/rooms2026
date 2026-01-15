// JavaScript Document


$(document).ready(function() {
	
//TOPアコーディオン
$('.cont_switch').hide();
$('.btn_switch').on('click', function() {//タイトル要素をクリックしたら
	var findElm = $(this).next(".cont_switch");//直後のアコーディオンを行うエリアを取得し
	$(findElm).slideToggle('fast');//アコーディオンの上下動作
    
	if($(findElm).hasClass('is-show')){//タイトル要素にクラス名closeがあれば
		$(findElm).removeClass('is-show');//クラス名を除去し
	}else{//それ以外は
		$(findElm).addClass('is-show');//クラス名closeを付与
	}
});	
	
$('.js-close').click(function() {
	$('.h_news_block').toggleClass("hide");
});	
	
//page内リンク
	
  // スクロールのオフセット値
  var offsetY = 100;
  // スクロールにかかる時間
  var time = 500;

  // ページ内リンクのみを取得
  $('a[href^="#"]').click(function() {
    // 移動先となる要素を取得
    var target = $(this.hash);
    if (!target.length) return ;
    // 移動先となる値
    var targetY = target.offset().top - offsetY;
    // スクロールアニメーション
    $('html,body').animate({scrollTop: targetY}, time, 'swing');
    // ハッシュ書き換えとく
    window.history.pushState(null, null, this.hash);
    // デフォルトの処理はキャンセル
    return false;
  });
	
	

});
$(document).ready(function() {
  	var w = $(window).innerWidth();
	if(w < 768) {
		$(".cont_switch").removeClass('is-show');
		$(".btn_switch").removeClass('hide');
	}else {
		$(".cont_switch").addClass('is-show');
		$(".btn_switch").addClass('hide');
	}
});

$(window).resize(function() {
  	var w = $(window).innerWidth();
	if(w < 768) {
		$(".cont_switch").removeClass('is-show');
		$(".btn_switch").removeClass('hide');
	}else {
		$(".cont_switch").addClass('is-show');
		$(".btn_switch").addClass('hide')
	}
});

//$(function(){
//    $('.sidenav .menu-item-has-children').each(function(){
//        $(this).on('click',function(){
//            $(">.sub-menu",this).slideToggle();
//			$(this).toggleClass('open');
//            return false;
//        });
//    });
//});


