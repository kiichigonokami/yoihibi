// jQuery読み込みなし
if(typeof jQuery == 'undefined'){
	//console.log("jQuery読み込みなし");
	var jQueryScriptHtml = document.createElement("div");
	jQueryScriptHtml.innerHTML = '<script  src="\//ajax.googleapis.com\/ajax\/libs\/jquery\/1.7.1\/jquery.min.js"><\/script>';
	var innerhtml = document.getElementById("innerhtml");
	innerhtml.appendChild(jQueryScriptHtml);

// jQuery読み込みあり
}else{
	//console.log("jQuery読み込みあり");
	//$が使えない
	if(typeof $ == 'undefined'){
		//console.log("$が使えない");
		$=window.jQuery;
	}
}


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
	
	/* 右サイドのフローティングメニュー
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
	
	/* 商品の高さ
	********************************************************************************/
	$('.item_list_box').matchHeight();
	$('.item_list_text').matchHeight();
	$('.item_list_box .item_list_name a').matchHeight();
	$('.article_list_box').matchHeight();
	
});



$(window).on('load', function() {
							  
	/****************************************************************************
	* ページ内リンクでheader固定の場合のズレ対処
	****************************************************************************/
	var headerHeight = 200;
	var url = $(location).attr('href');
		if(url.indexOf("?id=") != -1){
		var id = url.split("?id=");
		var $target = $('#' + id[id.length - 1]);
		if($target.length){
		  var pos = $target.offset().top-headerHeight;
		  $("html, body").animate({scrollTop:pos}, 400);
		}
	}
});