<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}

.article_detail_info {width: 100%; margin: 0; padding: 0;}
.camp_contents_box.sub_box {background: #fff; border-radius: 20px; padding: 20px; margin: 0 8px;}

.camp_stock_img img,
.camp_title_area img,
.camp_middle_img img,
.camp_koe_area img,
.camp_long_img img,
.camp_etc_area img {width: 100%;}

.camp_title_top span,
.camp_title_bottom span,
.camp_point_title span { display: block;}

#camp {display: block; overflow: hidden; margin: 0 0 0 0; padding: 0 0 0 0; width: 100%; height: 100%; background: #fff;}
#camp.camp_1902 {}

.camp_contents { display: block; overflow: hidden; margin: 0 0 40px 0; padding: 0 0 40px 0; clear: both; border-bottom: 1px solid #ccc;}
.camp_contents_l { display: block; overflow: hidden; float: left; margin: 0 0 0 0; padding: 0 0 0 0; width: 50%;}
.camp_contents_r { display: block; overflow: hidden; float: right; margin: 0 0 0 0; padding: 0 0 0 0; width: 50%;}
.camp_contents_long { display: block; overflow: hidden; clear: both; margin: 0 auto 0; padding: 40px 0 0 0; width: 94%;}
.camp_contents_box { display: block; overflow: hidden; margin: 0 0 0 0; padding: 0 0 0 0; clear: both;}
.camp_contents_parag {display: block; overflow: hidden; margin: 0 0 16px 0; padding: 0 0 0 0; clear: both;}

.camp_stock_img  width: 450px;

.camp_head { display: block; overflow: hidden; padding: 0 0 0 0; margin: 0 0 24px 0;}
.camp_title_area {}

.camp_title_top_rubi { background: #7f4c42; display: block; padding: 8px 16px 6px; text-align: center; margin: 0 24px 16px; border-radius: 4px; color: #fff; font-weight: bold;}
.camp_title_top {font-size: 24px; color: #fff; line-height: 1.2; padding: 12px 24px 6px; text-align: center; background: #d43827; border-radius: 30px;}
.camp_title_bottom {font-size: 32px; color: #333; line-height: 1.2; padding: 16px 24px 0; text-align: justify;}
blockquote {line-height: 1.6; padding: 16px 24px 24px; text-align: justify; clear: both:}
.camp_title_img {width: 68px; height: 68px; display: block; overflow: hidden; float: left; margin:16px 10px 0 20px;}

.camp_middle {}
.camp_middle_cap { background: #7f4c42; display: block; padding: 8px 16px 6px; text-align: center; margin: 0 24px 16px; border-radius: 30px; color: #fff; font-weight: bold;}
.camp_middle_img { margin: 0 24px 0 }

.camp_point { display: block; overflow: hidden; padding: 0; background: #fff5d7; border-radius: 10px; width: auto; margin: 0 0 24px 0;}
.camp_point_title { font-size: 24px; color: #7f4c42; font-weight: bold; line-height: 1.2; padding: 24px 24px 0; text-align: justify;}
.camp_title_bottom span { letter-spacing: 1px!important;}
.camp_point_disp { line-height: 1.6; padding: 16px 24px 24px; text-align: justify;}

.camp_koe_area { margin: 0 24px 0;}
.camp_contents_caption { font-size: 12px;}

.camp_contents_l .camp_etc_area { width: auto;}
.camp_etc_area {}
.camp_stock_name {border-top: 4px solid #333; font-size: 24px; padding:16px 8px 0 8px; margin: 16px 0 0 0;}


.camp_item_detail_top_cart {margin-top: 15px;}
.camp_item_detail_top_cart a {display: block; background: #F4A328; width: 420px; height: 70px; border-bottom: #C8820D 4px solid; border-radius: 8px; color: #fff; text-align: center; font-size: 11px; font-weight: bold; padding-top: 4px; position: relative; top: 0; margin: 0 auto;}
.camp_item_detail_top_cart img {text-align: center; padding: 10px 0 0 51px; float: left;}
.camp_item_detail_top_cart a:hover {top: 2px; border-bottom: #C8820D 2px solid;}
.camp_item_detail_top_cart p {line-height: 66px; font-size: 27px; font-weight: normal;}
.camp_contents_parag .camp_item_detail_top_cart {width:100%;}
.camp_contents_parag .camp_item_detail_top_cart a {width: 100%;}

.text_link { display: block; text-align: right; margin: 0 16px 0 0;}
.text_link a { text-decoration: underline;}
.text_link a:hover {text-decoration: none;}

.alfa {position: absolute; width: 50px; top: 5px; left: 8px;}
.camp_stock_check { font-size: 14px; width: 86%; margin: 16px auto; text-align: justify;}

.bfr1::before { content: ''; background: url(<?php echo $Path; ?>bfr1.png); display: block; position: relative; width: 85px; height: 79px; float: left; margin: 0 0 0 0; top:-2px; left: -8px;}
.bfr2::before { content: ''; background: url(<?php echo $Path; ?>bfr2.png); display: block; position: relative; width: 85px; height: 79px; float: left; margin: 0 0 0 0; top:-2px; left: -8px;}
.bfr3::before { content: ''; background: url(<?php echo $Path; ?>bfr3.png); display: block; position: relative; width: 85px; height: 79px; float: left; margin: 0 0 0 0; top:-2px; left: -8px;}
.bfr4::before { content: ''; background: url(<?php echo $Path; ?>bfr4.png); display: block; position: relative; width: 85px; height: 79px; float: left; margin: 0 0 0 0; top:-2px; left: -8px;}

@media screen and (max-width: 767px) {
	.spnone {display:none!important;}
	.pcnone {display:block!important;}
	.boader-top {border-top: 1px dashed #eee; padding-bottom: 16px !important;}
	sp_pdg_top {padding-top: 50px;}
	.camp_contents_box.sub_box {background: #fff; border-radius: 10px; padding: 20px 10px 0; margin:8px;}
	.camp_contents_parag { margin-bottom: 0;}

	.camp_contents { margin: 0 0 24px 0; padding: 0 0 0 0;}
	.camp_contents.bg-2 { padding: 16px 0 0; border-radius: 20px;}
	.camp_contents_l { float: inherit; margin: 0 0 0 0; padding: 0 0 0 0; width: 100%;}
	.camp_contents_r { float: inherit; margin: 0 0 0 0; padding: 0 0 0 0; width: 100%;}
	.camp_contents_box { margin: 0 0 0px 0;}

	.camp_item_detail_top_cart {margin-bottom: 15px; width: 100%;}
	.camp_item_detail_top_cart a {width: 100%; height: 60px;}
	.camp_item_detail_top_cart img {padding: 10px 0 0 20px;}
	.camp_item_detail_top_cart p {line-height: 58px; font-size: 18px;}

	.camp_stock_img,
	.camp_point,
	.camp_contents_l .camp_etc_area{ width: 100%;}

	.camp_point {margin: 0 0 0 0; border-radius: 10px}
	.camp_point_title { font-size: 18px; padding: 16px 16px 0;}
	.camp_point_disp {padding: 8px 16px 16px; font-size: 12px}

	.camp_head { display: block; overflow: hidden; padding: 0 0 0 0; margin: 0 0 16px 0;}
	.camp_title_area {}

	.camp_title_top_rubi { background: #b21920; display: block; padding: 8px 16px 6px; text-align: center; margin: 0 24px 16px; border-radius: 4px; color: #fff; font-weight: bold;}
	.camp_title_top {font-size: 18px; padding: 8px 16px; text-align: left; border-radius: 4px;}
	.camp_title_bottom {font-size: 24px; padding: 8px 16px 0;}
	.camp_title_bottom span small { top: 0!important;}
	blockquote {padding: 16px 16px 8px;}

	.camp_middle_cap {padding: 8px 8px 6px; margin: 0 0 16px; border-radius: 10px; font-weight: 100;}
	.camp_middle_img { margin: 0 0 0 0;}

	.camp_koe_area { margin: 0 0 0;}

	.camp_title_top span,
	.camp_title_bottom span,
	.camp_point_title span { display: inline;}

	.alfa {position: absolute; width: 72px; top: 16px; left: 4px;}
}
</style>

<img src="<?php echo $Path; ?>main_pc.jpg" width="100%" style="margin: 0 0 10px 0;" class="spnone">
<img src="<?php echo $Path; ?>main_sp.jpg" width="100%" style="margin: 0 0 0 0;" class="pcnone">
<br>

<div id="camp" class="camp_1902">

	<div class="camp_contents">
		<div class="camp_contents_l">
			<div class="camp_contents_box">
				<div class="camp_stock_img">
					<a href="https://yoihibi.jp/item/FLOREL.html" target="_blank">
					<img src="<?php echo $Path; ?>stock1.png"></a>
				</div>
				<div class="camp_item_detail_top_cart">
					<a href="https://yoihibi.jp/item/FLOREL.html" target="_blank">
						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
					<p>この商品を購入する</p></a>
				</div>
				<br>
				<div class="camp_stock_img">
					<a href="https://yoihibi.jp/item/FLORED.html" target="_blank">
					<img src="<?php echo $Path; ?>stock2.png"></a>
				</div>
				<div class="camp_item_detail_top_cart">
					<a href="https://yoihibi.jp/item/FLORED.html" target="_blank">
						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
					<p>この商品を購入する</p></a>
				</div>
				<br>
				<div class="camp_middle">
					<p class="camp_middle_img"><img src="<?php echo $Path; ?>koe1.png"></p>
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span>溜め込みを一掃！浄化のハーブティー。</span>
						</p>
					</div>
					<blockquote>冬眠から目覚めた熊は、まずフキノトウを食べるそうです。これは、苦い山菜の力で老廃物を出し、春のからだに整えるため。<br>『フロー・エッセンス＋』はそんな風に、自然な排出を促す浄化のハーブティーです。北米先住民が伝承してきた7種類のオーガニックハーブが、からだの内側をきれいにお掃除。スッキリ浄化して、季節の変わり目や花粉の時期も、快適に過ごしましょう。
					</blockquote>
				</div>
				<div class="camp_middle">
					<p class="camp_middle_img"><img src="<?php echo $Path; ?>etc0.png"></p>
				</div>
			</div>
		</div>
	</div>


</div>
