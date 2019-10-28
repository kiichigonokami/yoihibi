$(function(){
	   
/* ********************************************************************************
 ★ 共通 ★
********************************************************************************/
	
	/* headerスクロールで変形
	********************************************************************************/
	var $win = $(window),
	  $cloneNav = $('.global-header').clone().addClass('clone-nav').appendTo('body'),
	  showClass = 'is-show';
	
	$win.on('load scroll', function() {
	var value = $(this).scrollTop();
		if ( value > 500 ) {
		  $cloneNav.addClass(showClass);
		} else {
		  $cloneNav.removeClass(showClass);
		}
	});
	
	/* サイドのメニュー
	********************************************************************************/
	var sideBtn = $('#floating_menu_wrap');    
	sideBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			sideBtn.fadeIn();
		} else {
			sideBtn.fadeOut();
		}
	});
	
/* ********************************************************************************
 ★ 商品一覧 ★
********************************************************************************/
	
	/* 上部カテゴリ部分表示制御
	********************************************************************************/
	$('.main_category_list li').each(function(){
		var main_category = $(this).text();
		if(main_category.indexOf('商品カテゴリから探す') != -1 ){
			 $(this).css('display','inline-block');
		}else if(main_category.indexOf('ブランドで探す') != -1){
			 $(this).css('display','inline-block');
		}else if(main_category.indexOf('お悩みで探す') != -1){
			 $(this).css('display','inline-block');	 
		}
	 });


});