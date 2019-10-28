$(function(){

	/****************************************************************************
	* 【お買いもの】認証アイコンから「,」削除
	****************************************************************************/
	if($(".item_detail_certification_icon_area span").length){
		var replaceLogoTxt = $(".item_detail_certification_icon_area span").html().replace(/,/g,"");
		$(".item_detail_certification_icon_area span").html(replaceLogoTxt);
	}
	
	/****************************************************************************
	* 【お買いもの】「NEW」等のラベル表示部分を表示の為に加工
	****************************************************************************/
	//自由項目の値を取得
	var tag_text = $('.tag_icon').text();

	//複数選択の場合は「,」が入るため有無で分岐
	if(tag_text.indexOf(',') != -1 ){

		//値を「,」を区切りに配列に入れる
		var tag_list = tag_text.split(',');
		//配列に入った文字の数分for
		for (i = 0; i < tag_list.length; i++) {

		　　//「tag_list」の値でspan要素を作る 
		    var tag_icon_html = $('<span class="tag_list_label"></span>').text(tag_list[i]);
			
		    //作ったhtmlを.item_detail_front_iconArea内の一番後ろにappend
		    $(".item_detail_front_iconArea").append(tag_icon_html);
		    //$(".tag_icon").append($tag_icon_html = $("<span></span>").text(tag_list[i]));
		}
	}else{
		var tag_icon_html = $('<span class="tag_list_label"></span>').text(tag_text);
		$(".item_detail_front_iconArea").append(tag_icon_html);
	}

	
	/****************************************************************************
	* 【お買いもの】FAQの開閉
	****************************************************************************/
	//$('.faq_con').hide();
	$('.faq_ttl').click(function () {
		$(this).next('.faq_con').slideToggle();
	});


	/****************************************************************************
	* 【お買いもの】ページ内リンクでheader固定の場合のズレ対処
	****************************************************************************/
    var headerHight = 200; //ヘッダの高さ
    $('a[href^=#]').click(function(){
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
        $("html, body").animate({scrollTop:position}, 550, "swing");
        return false;
    });
	
	
	/****************************************************************************
	* 【共通】買いものカテゴリと読みものカテゴリの詳細レイアウトジャッジ用
	****************************************************************************/
	//ジャッジ用テキスト取得
	var judge_text = $('.pageLayout_judge_area .pageLayout_judge').text();

	//読みもの記事詳細の場合
	if(judge_text.indexOf('js_flag_ArticleDetail') != -1){
		$('.js_flag_ArticleDetail').css('display', 'block');

	//お買いもの商品詳細の場合
	}else if(judge_text.indexOf('js_flag_ItemDetail') != -1){
		$('.js_flag_ItemDetail').css('display', 'block');

	}
	
	
	/****************************************************************************
	* 【読みもの】著者のレイアウト変更（自由項目の値判断）
	****************************************************************************/
	$('.article_detail_person__coverwrap').each(function(){
														 
	    //ジャッジ用テキスト取得
		var personLayout = $('.article_detail_person .pageLayout_judge').text();
		
		//取得したテキスト（pattern_a/pattern_b）をクラスとして付与
		$(this).addClass(personLayout);
		
	});

});


$(window).on('load',function(){
	/****************************************************************************
	* 認証アイコン・alive用モーダルウィンドウ
	****************************************************************************/
	$(".trigger_modal_btn").leanModal( {
		overlayOpacity: 0.6,
		overlayClick:true,
		closeButton: "#modal_close"
	});

});

