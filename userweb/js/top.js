$(function(){
		   
	/****************************************************************************
	* メインスライダー
	****************************************************************************/
	$('.slides').slick({
		dots:true,
		autoplay: true,
		autoplaySpeed: 7000,
		speed: 900,
		centerMode:true,
		variableWidth:true,
		accessibility: false,
		arrows: false,
		adaptiveHeight: true,
	});
	
	/****************************************************************************
	* NEWSトピックスのスティッカー
	****************************************************************************/
	$.simpleTicker($('#newsticker'),{'effectType':'slide'});

});
