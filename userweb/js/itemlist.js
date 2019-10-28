$(function(){
		   

	/****************************************************************************
	* 【通常商品カテゴリ】ブランドロゴエリアから「,」削除
	****************************************************************************/
	if($(".category_logo_area").length){
		var replaceLogoTxt = $(".category_logo_area").html().replace(/,/g,"");
		$(".category_logo_area").html(replaceLogoTxt);
	}
	
	
	/****************************************************************************
	/* 【通常商品カテゴリ】上部カテゴリタブ部分表示制御
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
	
	/****************************************************************************
	/* 【読むカテゴリTOP】item_list$y_all.xml 
	    レコメンド記事かどうかの判定で表示・非表示制御
	********************************************************************************/
	
	//上部通常記事エリア用
	$('.article_top_normally_wrap .article_list_box').each(function(){
		var normaly_article = $(this);
	
		//レコメンドかどうかジャッジ用のテキストを取得
		var recommend = $(this).find('.pageLayout_judge').text();
		
		if(recommend.indexOf('js_flag_RecommendArticle') != -1){
			$(this).remove();
		}
		
	});
	
	//下部レコメンド記事エリア用
	$('.article_top_recommend_wrap .article_list_box').each(function(){
		var normaly_article = $(this);
	
		//レコメンドかどうかジャッジ用のテキストを取得
		var recommend = $(this).find('.pageLayout_judge').text();
		
		if(recommend.indexOf('js_flag_RecommendArticle') != -1){
			$(this).css('display','block')
		}
		
	});
	
	/****************************************************************************
	/* 【読むカテゴリTOP】item_list$y_all.xml 
	    ラベルリンク先を自由項目の値で上書き
	********************************************************************************/
	
	$('.itemList__y .hash_label li').each(function(){
		var label = $(this);

		//URLのテキストを取得
		var url = $(this).find('.hash_label_link').text();
		//上書き
		$(this).find("a").attr("href", url );
	});
	
	
	/****************************************************************************
	/* 【読むカテゴリ一覧】item_list$y.xml 
	    絞込みの開閉
	********************************************************************************/
	
	$('.shiborikomi_link').click(function () {
		$(this).next('.item_list_searchArea_inner').slideToggle('slow');
		$(this).addClass('active');
	});

});

$(window).load(function() {
						
	//URL取得
	var urlParam = location.search.substring(1);

  // URLにパラメータが存在する場合
	if(urlParam) {
	  $('.item_list_searchArea_inner').show();
	  $(this).addClass('active');
	}else{
	  $('.item_list_searchArea_inner').hide();
	  $(this).removeClass('active');
	}
});

