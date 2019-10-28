<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}
.fl-box {display: flex; flex-wrap: wrap; justify-content: space-around;}
.fl-l {display: block;}
.fl-r {display: block;}

.marker {
  background: -webkit-linear-gradient(transparent 90%, rgba(0, 110, 56, 0.9) 10%);
  background: -o-linear-gradient(transparent 90%, rgba(0, 110, 56, 0.9) 10%);
  background: linear-gradient(rgba(0, 0, 0, 0) 90%, rgba(0, 110, 56, 0.9) 10%);
  color: #006e38;
}

.article_detail_info {width: 100%; margin: 0; padding: 0;}
.camp_contents_box.sub_box {background: #fff; border-radius: 20px; padding: 20px; margin: 0 8px;}

.camp_stock_img img,
.camp_title_area img,
.camp_middle_img img,
.camp_koe_area img,
.camp_long_img img,
.camp_etc_area img {width: 100%;}

.camp_title_top span,
.camp_point_title span { display: block;}

#camp {display: block; overflow: hidden; margin: 0 0 0 0; padding: 0 0 0 0; width: 100%; height: 100%; background: #fff;}
#camp.camp_1910 {}

.camp_disp {font-size: 20px; display: block; margin: 0 0 24px 0; padding: 0 16px 24px; text-align: center; border-bottom: 1px solid #ccc;}

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

.camp_head { display: block; overflow: hidden; padding: 0 0 0 0; margin: 0 0 0 0;}
.camp_title_area {}

.camp_title_bottom {font-size: 24px; color: #3e0f00; line-height: 1.4; padding: 16px 24px; margin: 0 16px; text-align: justify; background: #efec64; box-sizing: border-box; border-radius: 8px;}
blockquote {line-height: 1.6; padding: 16px 24px 24px; text-align: justify; clear: both:}
.camp_title_img {width: 68px; height: 68px; display: block; overflow: hidden; float: left; margin:16px 10px 0 20px;}
.camp_point { display: block; overflow: hidden; padding: 0; background: #fff5d7; border-radius: 10px; width: auto; margin: 0 0 24px 0;}
.camp_point_title { font-size: 24px; color: #7f4c42; font-weight: bold; line-height: 1.2; padding: 24px 24px 0; text-align: justify;}
.camp_title_bottom span { letter-spacing: 1px!important;}
.camp_point_disp { line-height: 1.6; padding: 16px 24px 24px; text-align: justify;}

.camp_item_detail_top_cart {margin-top: 0;}
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

@media screen and (max-width: 767px) {
	.spnone {display:none!important;}
	.pcnone {display:block!important;}
	.boader-top {border-top: 1px dashed #eee; padding-bottom: 16px !important;}
	sp_pdg_top {padding-top: 50px;}
	.camp_contents_box.sub_box {background: #fff; border-radius: 10px; padding: 20px 10px 0; margin:8px;}
	.camp_contents_parag { margin-bottom: 0;}

  .camp_disp {font-size: 16px; text-align: justify;}

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

	.camp_head { display: block; overflow: hidden; padding: 0 0 0 0; margin: 0 0 0 0;}
	.camp_title_area {}

	.camp_title_top {font-size: 18px; padding: 8px 16px; text-align: left; border-radius: 4px;}
	.camp_title_bottom {font-size: 24px; padding: 8px 16px; margin: 0;}
  blockquote {padding: 16px 8px 24px;}

	.camp_title_top span,
	.camp_title_bottom span,
	.camp_point_title span { display: inline;}

	.alfa {position: absolute; width: 72px; top: 16px; left: 4px;}
}
</style>

<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP/main_pc.jpg" width="100%" style="margin: 0 0 10px 0;" class="spnone">
<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP/main_sp.jpg" width="100%" style="margin: 0 0 0 0;" class="pcnone">
<br>

<div class="camp_disp">
  ご家庭の日用品を、環境にもからだにもやさしいアイテムに変えていきませんか？<br>
環境問題に取り組む企業の商品を使って、私たちの健やかな未来を守りましょう。
</div>

<div id="camp" class="camp_1910">

	<div class="camp_contents">
		<div class="camp_contents_l">
			<div class="camp_contents_box">
				<div class="camp_stock_img">
					<a href="https://yoihibi.jp/item/ORGABG.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP/stock1.png"></a>
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span>オーガニック発酵野菜で理想的な栄養食を実現！</span>
						</p>
					</div>
					<blockquote>
						『フロー・エッセンス＋』『ウドズオイル』で有名なフローラは、<span class="marker">栽培から製造、包装まで化学薬品を使わない</span>安心にこだわる企業です。そのフローラとウド博士が作った緑の栄養食が『オーガニック ビヨンド・グリーンズ』。オーガニック野菜を発酵させて、栄養価も消化吸収力も高めています。
					</blockquote>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						<small>オーガニック</small> ビヨンド・グリーンズ
						<span class="camp_stock_img_amount">255g</span>
					</div>
					<a href="https://yoihibi.jp/item/ORGABG.html" target="_blank">
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
					<a href="https://yoihibi.jp/item/FLRDIX.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP/stock2.png"></a>
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span>エコロジー企業の自信作。人気No.１鉄のサプリメント。</span>
						</p>
					</div>
					<blockquote>
            太陽光や水力発電、有機栽培に取り組むドイツの老舗サルス。看板商品『フローラディクス』は、<span class="marker">鉄の力でドロドロ対策や認知力対策に役立つ</span>優れもの。ドイツの薬局でも人気No.1です。
					</blockquote>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						フローラディクス
						<span class="camp_stock_img_amount">500ml（計量カップ付き）</span>
					</div>
					<a href="https://yoihibi.jp/item/FLRDIX.html" target="_blank">
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
					<a href="https://yoihibi.jp/item/ZVAISU.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP/stock3.png"></a><br>
          <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP/stock3_2.png">
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span>汚れ落ちも抜群！安心のエコ洗剤。</span>
						</p>
					</div>
					<blockquote>
            『バイス』は界面活性剤を使わない、人にも環境にもやさしい洗浄剤。<span class="marker">特許技術のマイナスイオンのパワーで、合成洗剤と変わらない洗浄力</span>があります。お風呂の残り湯でも洗濯できて、<span class="marker">すすぎも1回で済む</span>ので、水道代が節約できます。排水の汚れのことまで考えた『バイス』を使って、川や海をきれいに保ちましょう。
					</blockquote>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						バイス
						<span class="camp_stock_img_amount">3kg（計量スプーン付き）</span>
					</div>
					<a href="https://yoihibi.jp/item/ZVAISU.html" target="_blank">
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
					<a href="https://yoihibi.jp/item/ZBELWA.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP/stock4.png"></a>
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span>泡が立たない洗浄料。肌と環境をやさしく守ります！</span>
						</p>
					</div>
					<blockquote>
            市販の洗顔料やボディソープは、界面活性剤など添加物の働きで素早く泡立ちます。しかし、刺激が強すぎて肌が荒れたりすることも。界面活性剤ゼロの『ベルメウォッシュ』は、<span class="marker">イオンの力で汚れだけを吸着して、毛穴の奥までスッキリ！</span>界面活性剤など余計な添加物が入っていないので、<span class="marker">肌だけでなく環境にもやさしい</span>洗浄料です。
					</blockquote>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						ベルメウォッシュ
						<span class="camp_stock_img_amount">10g×20包（専用ボトル付き）</span>
					</div>
					<a href="https://yoihibi.jp/item/ZBELWA.html" target="_blank">
						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
					<p>この商品を購入する</p></a>
				</div>
			</div>
		</div>
	</div>


</div>
