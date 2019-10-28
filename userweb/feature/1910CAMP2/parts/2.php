<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}
.fl-box {display: flex; flex-wrap: wrap; justify-content: space-around;}
.fl-l {display: block;}
.fl-r {display: block;}

.marker {
  background: -webkit-linear-gradient(transparent 70%, rgba(253, 228, 198, 0.9) 30%);
  background: -o-linear-gradient(transparent 70%, rgba(253, 228, 198, 0.9) 30%);
  background: linear-gradient(rgba(0, 0, 0, 0) 70%, rgba(253, 228, 198, 0.9) 30%);
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

.camp_disp {font-size: 20px; display: block; margin: 0 0 24px 0; padding: 0 16px 24px; text-align: justify; border-bottom: 1px solid #ccc;}

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

.camp_title_bottom {font-size: 24px; color: #ea5532; line-height: 1.4; padding: 16px 0 0; font-weight: bold; margin: 0 16px; text-align: justify; box-sizing: border-box;}
blockquote {line-height: 1.6; padding: 16px 24px 24px; text-align: justify; clear: both:}
.camp_title_bottom:before { content: ''; display: inline-block; width:30px; height:30px; vertical-align: middle; position: relative; top: 0px; padding: 0 0 0 0; background: url('https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/h2_before.png') no-repeat; background-size:contain;}

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

<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/main2_pc.jpg" width="100%" style="margin: 0 0 10px 0;" class="spnone">
<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/main2_sp.jpg" width="100%" style="margin: 0 0 0 0;" class="pcnone">
<br>

<div class="camp_disp">
これからの季節に欠かせない質のよい遠赤外線商品「アルファウェーブ」をお得な価格でお届けいたします。新商品として、年間を通して使いやすいタンクトップが加わり、さらに充実したラインナップになりました。寒くなる前にご準備いただき、安心して冬をお迎えください！
</div>

<div id="camp" class="camp_1910">

	<div class="camp_contents">
		<div class="camp_contents_l">
			<div class="camp_contents_box">
				<div class="camp_stock_img">
					<a href="https://yoihibi.jp/item/ARTANK.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/stock1.png"></a><br>
          <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/stock1_2.png">
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span class="marker">年間通して快適に着用できる<br>吸湿性・速乾性に優れたあったかインナー</span>
						</p>
					</div>
					<blockquote>シルクのような光沢感とドレープ性を合わせ持った上質な素材「リヨセル」に、アルファウェーブの遠赤外線加工を施したタンクトップです。リヨセルは、ユーカリ等のパルプが原料の強度が低下しにくい新素材。肌触りはサラッと気持ちよく、吸湿性・速乾性に優れているので、昼暑くて夜冷える初秋におすすめです。寒い時期には、普通のインナーに重ね着してお使いいただけます。
					</blockquote>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						<small>アルファウェーブ</small><br>タンクトップ
					</div>
					<a href="https://yoihibi.jp/item/ARTANK.html" target="_blank">
						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
					<p>この商品を購入する</p></a>
				</div>
			</div>
		</div>
    <div class="camp_contents_w n2">
      <p class="camp_contents_w_img spnone"><img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/w2.png"></p>
      <p class="camp_contents_w_img pcnone"><img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/w2_s.png"></p>
    </div>
	</div>

	<div class="camp_contents">
		<div class="camp_contents_l">
			<div class="camp_contents_box">
				<div class="camp_stock_img">
					<a href="https://yoihibi.jp/item/NKSOCK.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/stock2.png"></a><br>
          <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/stock2_2.png">
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span class="marker">遠赤ソックスで足もとを軽快に♪</span>
						</p>
					</div>
					<blockquote>
            足の指1本1本から遠赤外線の波長が吸収され、足先までしっかり温まります。立ち仕事や掃除など動くときに履くと、遠赤外線による発熱がわかりやすくおススメです。自然と温まり、蒸れたり汗をかくことがなく快適です。締め付けが少ないので、足指が冷えて眠れない方は、寝るときにもお使いいただけます。
					</blockquote>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						<small>アルファウェ-ブ NUKUI</small><br>5本指ソックス
					</div>
					<a href="https://yoihibi.jp/item/NKSOCK.html" target="_blank">
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
					<a href="https://yoihibi.jp/item/ARUSUP.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/stock3.png"></a><br>
          <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/stock3_2.png">
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span class="marker">柔らかくフィットして首もとポカポカ！</span>
						</p>
					</div>
					<blockquote>
            冷たい風に首から背中にかけてヒャッとした経験はありませんか？コートやセーターを着ていても、首もとにちょっとした隙間があいてしまいがちです。アルファウェーブネックウォーマーは、軽くてよく伸び、フィットするので、首もとをしっかりガー ド！シャツの下に付けても襟の邪魔にならない優れものです。
					</blockquote>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						<small>アルファウェーブ</small><br>ネックウォーマー
					</div>
					<a href="https://yoihibi.jp/item/ARUSUP.html" target="_blank">
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
					<a href="https://yoihibi.jp/item/ARUSQP.html" target="_blank">
					<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1910CAMP2/stock4.png"></a>
				</div>
			</div>
		</div>
		<div class="camp_contents_r">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span class="marker">お部屋も、気持ちも明るくなるピンク色！</span>
						</p>
					</div>
					<blockquote>
            「朝まで温かく、ぐっすり眠れる」とご好評いただき、アルファウェーブシリーズ人気No.1のスクエアパッド。カラ一は、定番のページュと、S・Mサイズ限定でピンク色をご用意しています。ソファや椅子にそのまま掛けても、シーツや毛布の下に敷いても、遠赤外線の効果は変わらず、全身を温めます。<br>
            <small>※カラーは、ベージュもございます。</small>
					</blockquote>
				</div>

				<div class="camp_item_detail_top_cart">
					<div class="camp_item_detail_top_cart_title">
						<small>アルファウェーブ</small><br>スクエアパッド<small><ピンク></small>
					</div>
					<a href="https://yoihibi.jp/item/ARUSQP.html" target="_blank">
						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
					<p>この商品を購入する</p></a>
				</div>
			</div>
		</div>
	</div>


</div>
