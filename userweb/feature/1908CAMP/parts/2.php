<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}
.fl-box {display: flex; flex-wrap: wrap; justify-content: space-around;}
.fl-l {display: block;}
.fl-r {display: block;}

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
#camp.camp_1908 {}

.stock1 {color: #5cb24c;}
.stock2 {color: #eb686e;}
.stock3 {color: #b36d70;}
.stock4 {color: #6e8dc8;}

.camp_contents { display: block; overflow: hidden; margin: 0 0 40px 0; padding: 0 0 40px 0; clear: both; border-bottom: 1px solid #ccc;}
.camp_contents_lr { display: block; overflow: hidden; margin: 0 0 0 0; padding: 0 0 0 0; clear: both;}
.camp_contents_l { display: block; overflow: hidden; float: left; margin: 0 0 0 0; padding: 0 0 0 0; width: 50%;}
.camp_contents_r { display: block; overflow: hidden; float: right; margin: 0 0 0 0; padding: 0 0 0 0; width: 50%;}
.camp_contents_long { display: block; overflow: hidden; clear: both; margin: 0 auto 0; padding: 40px 0 0 0; width: 94%;}
.camp_contents_box { display: block; overflow: hidden; margin: 0 0 0 0; padding: 0 0 0 0; clear: both;}
.camp_contents_parag {display: block; overflow: hidden; margin: 0 0 16px 0; padding: 0 0 0 0; clear: both;}

.lr2 .camp_contents_l { display: block; overflow: hidden; float: left; margin: 0 0 0 0; padding: 0 0 0 0; width: 46%;}
.lr2 .camp_contents_r { display: block; overflow: hidden; float: right; margin: 0 0 0 0; padding: 0 0 0 0; width: 46%;}

.camp_contents_etc { display: block; overflow: hidden; margin: 0 0 40px 0; padding: 30px 0 40px; clear: both; border-radius: 16px; background: #f9ffde;}
.camp_contents_etc .camp_contents_lr .camp_contents_box { border-bottom: 1px dashed #e3c62a; margin-bottom: 16px;}

.camp_contents_w { clear: both; display: block; position: relative; top: 20px; right: 0; margin: 0 0 0 0;}
.camp_contents_w.n1 {top: -80px; margin: 0 0 -80px 0;}
.camp_contents_w_img { display: block;}

.camp_stock_img  {width: 478px;}
.camp_stock_img_title {font-size: 220%; font-weight: bold; border-top: 4px solid #231815; padding: 16px 8px 8px; line-height: 1.4; color: #231815; letter-spacing: 2px;}
.camp_stock_img_amount { font-size: 60%; display: block; padding: 0 2px; font-weight: 400;}
.camp_stock_img_amount b { color: #ff0000;}

.camp_head { display: block; overflow: hidden; padding: 0 0 0 0; margin: 0 0 24px 0;}
.camp_title_area {}

.camp_title_top_rubi { background: #f5d1b1; display: block; padding: 8px 16px 4px; text-align: center; margin: 0 24px 0; border-radius: 4px; color: #803b36; font-weight: bold;}
.camp_title_top {font-size: 24px; color: #fff; line-height: 1.2; padding: 12px 24px 6px; text-align: center; background: #d43827; border-radius: 30px;}
.camp_title_bottom {font-size: 32px; color: #333; line-height: 1.2; padding: 16px 24px 0; text-align: justify;}
.camp_title_bottom b { color: #a51f25;}
.camp_title_bottom.cap_ico1::before {display: inline-block; content: ''; width: 76px; height: 82px; padding: 0 0 0 0; margin: 0 16px 0 0; background: url('https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1908CAMP/cap_ico1.png') no-repeat; background-size: contain; float: left; position: relative; top: -8px;}
.camp_title_bottom.cap_ico2::before {display: inline-block; content: ''; width: 76px; height: 82px; padding: 0 0 0 0; margin: 0 16px 0 0; background: url('https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1908CAMP/cap_ico2.png') no-repeat; background-size: contain; float: left; position: relative; top: -8px;}
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
.camp_item_detail_top_cart_title {display: block; width: 420px; font-size: 180%; border-top: #000 4px solid; margin: 0 auto; line-height: 1.2; padding: 16px 0 8px;}

.text_link { display: block; text-align: right; margin: 0 16px 0 0;}
.text_link a { text-decoration: underline;}
.text_link a:hover {text-decoration: none;}

.alfa {position: absolute; width: 50px; top: 5px; left: 8px;}
.camp_stock_check { font-size: 14px; width: 86%; margin: 16px auto; text-align: justify;}

.bfr1::before { content: ''; background: url(https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1908CAMP/bfr1.png); display: block; position: relative; width: 85px; height: 79px; float: left; margin: 0 0 0 0; top:-2px; left: -8px;}
.bfr2::before { content: ''; background: url(https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1908CAMP/bfr2.png); display: block; position: relative; width: 85px; height: 79px; float: left; margin: 0 0 0 0; top:-2px; left: -8px;}

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

	.lr2 .camp_contents_l { display: block; overflow: hidden; float: left; margin: 0 0 0 0; padding: 0 0 0 0; width: 100%;}
	.lr2 .camp_contents_r { display: block; overflow: hidden; float: right; margin: 0 0 0 0; padding: 0 0 0 0; width: 100%;}

	.camp_stock_img_title,
	.camp_item_detail_top_cart_title {font-size: 170%;}
	.camp_stock_img_title small,
	.camp_item_detail_top_cart_title small {font-size: 70%;}

	.camp_contents_etc { display: block; overflow: hidden; margin: 0 0 40px 0; padding: 30px 0 0; clear: both; border-radius: 16px; background: #f9ffde;}
	.camp_contents_etc .camp_contents_box { padding-left: 8px; padding-right: 8px;}

	.camp_title_top_rubi { background: #7f4c42; display: block; padding: 8px 16px 4px; text-align: center; margin: 0 16px 0; border-radius: 4px; color: #fff; font-weight: bold;}

	.camp_item_detail_top_cart {margin-bottom: 15px; width: 100%;}
	.camp_item_detail_top_cart a {width: 100%; height: 60px;}
	.camp_item_detail_top_cart img {padding: 10px 0 0 20px;}
	.camp_item_detail_top_cart p {line-height: 58px; font-size: 18px;}

	.camp_contents_w.n1 {top: 0; margin: 0 0 0 0;}
	.camp_contents_w { clear: both; display: block; position: relative; top: 0; right: 0; margin: 0 0 16px 0;}

	.camp_stock_img,
	.camp_point,
	.camp_contents_l .camp_etc_area{ width: 100%;}

	.camp_point {margin: 0 0 0 0; border-radius: 10px}
	.camp_point_title { font-size: 18px; padding: 16px 16px 0;}
	.camp_point_disp {padding: 8px 16px 16px; font-size: 12px}

	.camp_head { display: block; overflow: hidden; padding: 0 0 0 0; margin: 0 0 16px 0;}
	.camp_title_area {}

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

<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1908CAMP/main_pc.jpg" width="100%" style="margin: 0 0 10px 0;" class="spnone">
<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1908CAMP/main_sp.jpg" width="100%" style="margin: 0 0 0 0;" class="pcnone">
<br>

<div id="camp" class="camp_1908">

	<div class="camp_contents">
		<div class="camp_contents_l">
			<div class="camp_contents_box">
				<div class="camp_stock_img">
					<a href="https://yoihibi.jp/item/MSMCRM.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1908CAMP/stock1.png"></a>
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span class="stock1">ふしぶしのズキッ！がスグ楽に。<br>飲み合わせが気にならない塗るタイプ</span>
						</p>
					</div>
					<blockquote>
						階段や正座、中腰でズキッときたら、『MSMクリ ーム』。 有機態イ才ウ「MSM (メチル ・ スルフォニ）レ ・メタン）」を主原料にした白＜てよく伸びるクリ ームです。MSMは、人間のからだにも必須ミネラルとして存在し、特に、 関節や筋肉などの細胞組織の強化に必要とされています。運動後の疲労回復にもお使いいただけます。
					</blockquote>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						MSMクリーム<small>（塗るタイプ）</small>
						<span class="camp_stock_img_amount">120ml</span>
					</div>
					<a href="https://yoihibi.jp/item/MSMCRM.html" target="_blank">
						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
					<p>この商品を購入する</p></a>
				</div>
			</div>
		</div>
	</div>

	<div class="camp_contents">
		<div class="camp_contents_l">
			<div class="camp_contents_box">
				<div class="camp_stock_img">
					<a href="https://yoihibi.jp/item/ZEROMI.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1908CAMP/stock2.png"></a>
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span class="stock2">面活性剤も、防腐剤もゼロ！<br>肌の潤う力を引き出す無添加化粧水</span>
						</p>
					</div>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						<small>素肌ローション</small> ゼロ・ミスト
					</div>
					<a href="https://yoihibi.jp/item/ZEROMI.html" target="_blank">
						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
					<p>この商品を購入する</p></a>
				</div>
			</div>
		</div>
	</div>

	<div class="camp_contents">
		<div class="camp_contents_l">
			<div class="camp_contents_box">
				<div class="camp_stock_img">
					<a href="https://yoihibi.jp/item/NATURI.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1908CAMP/stock3.png"></a>
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span class="stock3">天然クチナシ色素がベースの安心な白髪染め。<br>髪のつや、コシもアップ！</span>
						</p>
					</div>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						ナチュリアプラチナムカラー<small><br>(塗るタイプ)</small>
						<span class="camp_stock_img_amount">200g<small>(専用ブラシ・ビニール手袋付き)</small></span>
					</div>
					<a href="https://yoihibi.jp/item/NATURI.html" target="_blank">
						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
					<p>この商品を購入する</p></a>
				</div>
			</div>
		</div>
	</div>

	<div class="camp_contents">
		<div class="camp_contents_l">
			<div class="camp_contents_box">
				<div class="camp_stock_img">
					<a href="https://yoihibi.jp/item/WHITEP.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1908CAMP/stock4.png"></a>
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span class="stock4">メラニンや古い角質を落とし、透明感ある肌に導く洗い流すタイプの薬用パック</span>
						</p>
					</div>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						薬用ホワイトパック
						<span class="camp_stock_img_amount">150g<small>(医薬部外品)</small></span>
					</div>
					<a href="https://yoihibi.jp/item/WHITEP.html" target="_blank">
						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
					<p>この商品を購入する</p></a>
				</div>
			</div>
		</div>
	</div>

</div>
