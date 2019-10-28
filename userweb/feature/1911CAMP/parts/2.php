<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}
.fl-box {display: flex; flex-wrap: wrap; justify-content: space-around;}
.fl-l {display: block;}
.fl-r {display: block;}

.marker {
  background: -webkit-linear-gradient(transparent 90%, rgba(69, 33, 0, 0.9) 10%);
  background: -o-linear-gradient(transparent 90%, rgba(69, 33, 0, 0.9) 10%);
  background: linear-gradient(rgba(0, 0, 0, 0) 90%, rgba(69, 33, 0, 0.9) 10%);
  color: #452100;
	font-weight: bold;
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

#camp {display: block; margin: 0 0 0 0; padding: 0 0 0 0; width: 100%; height: 100%; background: #fff;}
#camp.camp_1910 {}

.camp_disp {font-size: 20px; display: block; margin: 0 0 24px 0; padding: 0 16px 24px; text-align: center; border-bottom: 1px solid #ccc;}

.camp_contents { display: block; margin: 0 0 40px 0; padding: 0 0 40px 0; clear: both; border-bottom: 1px solid #ccc;}
.camp_contents_lr { display: block; margin: 0 0 0 0; padding: 0 0 0 0; clear: both;}
.camp_contents_l { display: block; overflow: hidden; margin: 0 0 0 0; padding: 0 0 0 0; width: 50%;}
.camp_contents_r { display: block; overflow: hidden; margin: 0 0 0 0; padding: 0 0 0 0; width: 50%;}
.camp_contents_long { display: block; overflow: hidden; clear: both; margin: 0 auto 0; padding: 40px 0 0 0; width: 94%;}
.camp_contents_box { display: block; margin: 0 0 0 0; padding: 0 0 0 0; clear: both;}
.camp_contents_parag {display: block; overflow: hidden; margin: 0 0 16px 0; padding: 0 0 0 0; clear: both;}

.lr2 .camp_contents_l { display: block; overflow: hidden; float: left; margin: 0 0 0 0; padding: 0 0 0 0; width: 46%;}
.lr2 .camp_contents_r { display: block; overflow: hidden; float: right; margin: 0 0 0 0; padding: 0 0 0 0; width: 46%;}

.camp_contents_etc { display: block; overflow: hidden; margin: 0 0 40px 0; padding: 0; clear: both; border-radius: 16px; background: #fff; border: 8px solid #262E9B; position: relative;}
.camp_contents_etc .camp_contents_r { padding: 200px 0 0;}
.camp_contents_etc .camp_item_detail_top_cart_title {border-top: 4px solid #262E9B;}

.camp_contents_w { clear: both; display: block; position: relative; top: 20px; right: 0; margin: 0 0 0 0;}
.camp_contents_w.n1 {top: -80px; margin: 0 0 -80px 0;}
.camp_contents_w_img { display: block;}

.camp_stock_img  {width: 478px;}
.camp_stock_img_title {font-size: 220%; font-weight: bold; border-top: 4px solid #231815; padding: 16px 8px 8px; line-height: 1.4; color: #231815; letter-spacing: 2px;}
.camp_stock_img_amount { font-size: 60%; display: block; padding: 0 2px; font-weight: 400;}
.camp_stock_img_amount b { color: #ff0000;}

.camp_head { display: block; padding: 0 0 0 0; margin: 0 0 0 0;}
.camp_title_area {}

.camp_title {font-size: 24px; color: #452100; line-height: 1.4; padding: 16px 24px 16px 88px; margin: 0 0; text-align: justify; background: #EFEEDC; box-sizing: border-box; border-radius: 8px; font-weight: bold; position: relative;}
.camp_title::before { content: ''; width: 132px; height: 105px; position: absolute; top: -24px; left: -24px;}
.camp_title.typ1::before {background: url('<?php echo $Path ?>ttl_bfr_1.png') no-repeat; background-size:contain;}
.camp_title.typ2::before {background: url('<?php echo $Path ?>ttl_bfr_2.png') no-repeat; background-size:contain;}
.camp_title_bottom {font-size: 24px; color: #fff; line-height: 1.4; padding: 16px 24px; margin: 0 0; text-align: justify; background: #222E8E; box-sizing: border-box;}
blockquote {line-height: 1.8; padding: 16px 24px 24px; text-align: justify; font-size: 18px;}
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
.camp_item_detail_top_cart_title_red {display: inline-block; font-size: 12px!important; border: #F2998B 1px solid; background: #FDEEE8; border-radius: 50px; margin: 0 auto; padding: 2px 8px 2px!important; line-height: 1.2!important;}

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

	.camp_contents_etc { display: block; overflow: hidden; margin: 0 0 40px 0; padding: 0 0 0; clear: both; border-radius: 16px;}
	.camp_contents_etc .camp_contents_r { padding: 0 16px 0;}
  .camp_contents_etc .camp_item_detail_top_cart_title {width: 100%!important;}

	.camp_title_top_rubi { background: #7f4c42; display: block; padding: 8px 16px 4px; text-align: center; margin: 0 16px 0; border-radius: 4px; color: #fff; font-weight: bold;}

  .camp_title {font-size: 20px; padding: 16px 24px 16px 72px; }
  .camp_title::before {width: 100px; height: 80px; top: -16px; left: -16px;}

	.camp_item_detail_top_cart {margin-bottom: 15px; width: 100%;}
	.camp_item_detail_top_cart a {width: 100%; height: 60px;}
	.camp_item_detail_top_cart img {padding: 10px 0 0 20px;}
	.camp_item_detail_top_cart p {line-height: 58px; font-size: 18px;}

	.camp_contents_w.n1 {top: 0; margin: 0 0 0 0;}
	.camp_contents_w { clear: both; display: block; position: relative; top: 0; right: 0; margin: 0 0 16px 0;}

	.camp_stock_img,
	.camp_point,
	.camp_contents_l .camp_etc_area{ width: 100%;}

	.camp_head { display: block; padding: 0 0 0 0; margin: 0 0 0 0;}
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

<img src="<?php echo $Path ?>main_pc.jpg" width="100%" style="margin: 0 0 10px 0;" class="spnone">
<img src="<?php echo $Path ?>main_sp.jpg" width="100%" style="margin: 0 0 0 0;" class="pcnone">
<br>

<div id="camp" class="camp_1910">

	<div class="camp_contents">
    <div class="camp_contents_lr">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title typ1">
							<span>骨は、冬に老化する！？「シリカ」を摂るべき理由。</span>
						</p>
					</div>
					<blockquote>
						東洋医学では、<span class="marker">骨を丈夫に保つ力は冬に低下すると言われています。</span>ポキっと折れないように、秋のうちから『ベジ・シリカ』で土台の質を強化しましょう。骨や関節、歯に存在する必須ミネラル「シリカ」のほか、カルシウムや鉄、マグネシウムなど<span class="marker">8種類のミネラルもバランスよく補えます。</span>ずっと自分の足で歩けるようにサポートしてくれるサプリメントです。
					</blockquote>
				</div>
			</div>
		</div>

    <div class="fl-box">
  		<div class="camp_contents_l">
  			<div class="camp_contents_box">
  				<div class="camp_stock_img">
  					<a href="https://yoihibi.jp/item/VEGESI.html" target="_blank">
              <img src="<?php echo $Path ?>stock1.png">
            </a>
            <p class="camp_middle_img">
              <img src="<?php echo $Path ?>stock1_2.png">
            </p>
  				</div>
          <div class="camp_item_detail_top_cart">
  					<div class="camp_item_detail_top_cart_title">
  						ベジ・シリカ
  						<span class="camp_stock_img_amount">90カプセル</span>
  					</div>
  					<a href="https://yoihibi.jp/item/VEGESI.html" target="_blank">
  						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
  					<p>この商品を購入する</p></a>
  				</div>
  			</div>
  		</div>
  		<div class="camp_contents_r">
  			<div class="camp_contents_box">
          <div class="camp_middle">
  					<p class="camp_middle_img">
              <img src="<?php echo $Path ?>w2_s.png">
            </p>
  				</div>
  			</div>
  		</div>
    </div>
	</div>

  <div class="camp_contents">
    <div class="camp_contents_lr">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title typ1">
							<span>寒いとひどくなるふしぶしの違和感に。</span>
						</p>
					</div>
					<blockquote>
            <span class="marker">「寒くなって冷えると、ふしぶしのつらさが増す」</span>と、お悩みの方は『MSMパウダー』と『MSMクリーム』をお試しください。<br>
            <span class="marker">MSMとは、曲げ伸ばしに関わる軟骨や腱をつくるイオウを含む有機化合物。</span>この成分が<span class="marker">気になる部分の違和感をやわらげて、なめらかな動きをサポートします。</span><br>
            内側からしっかり根本対策できるパウダーと、塗るとすぐに働くクリームを一緒に使うことで、内から外から実感が高まります！
					</blockquote>
				</div>
			</div>
		</div>

    <div class="fl-box">
  		<div class="camp_contents_l">
  			<div class="camp_contents_box">
          <div class="camp_stock_middle">
            <img src="<?php echo $Path ?>ttls_1.png">
  				</div>
  				<div class="camp_stock_img">
            <a href="https://yoihibi.jp/item/MSMPOW.html" target="_blank">
  					<img src="<?php echo $Path ?>stock2.png"></a>
  				</div>
          <div class="camp_item_detail_top_cart">
  					<div class="camp_item_detail_top_cart_title">
  						MSMパウダー<small>＜飲むタイプ＞</small>
  						<span class="camp_stock_img_amount">1500mg×60包</span>
  					</div>
  					<a href="https://yoihibi.jp/item/MSMPOW.html" target="_blank">
  						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
  					<p>この商品を購入する</p></a>
  				</div>
  			</div>
  		</div>
  		<div class="camp_contents_r">
        <div class="camp_contents_box">
          <div class="camp_stock_middle">
            <img src="<?php echo $Path ?>ttls_2.png">
  				</div>
  				<div class="camp_stock_img">
            <a href="https://yoihibi.jp/item/MSMCRM.html" target="_blank">
  					<img src="<?php echo $Path ?>stock3.png"></a>
  				</div>
          <div class="camp_item_detail_top_cart">
  					<div class="camp_item_detail_top_cart_title">
  						MSMクリーム<small>＜塗るタイプ＞</small>
  						<span class="camp_stock_img_amount">120ml</span>
  					</div>
  					<a href="https://yoihibi.jp/item/MSMCRM.html" target="_blank">
  						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
  					<p>この商品を購入する</p></a>
  				</div>
  			</div>
  		</div>
    </div>
	</div>

	<div class="camp_contents">
    <div class="camp_contents_lr">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title typ2">
							<span>寒いとひどくなるふしぶしの違和感に。</span>
						</p>
					</div>
				</div>
			</div>
		</div>
    <div class="fl-box">
  		<div class="camp_contents_l">
  			<div class="camp_contents_box">
  				<div class="camp_stock_img">
  					<a href="https://yoihibi.jp/item/UDOOIL.html" target="_blank">
  					<img src="<?php echo $Path ?>stock4.png"></a>
  				</div>
  			</div>
  		</div>
  		<div class="camp_contents_r">
  			<div class="camp_contents_box">
  				<div class="camp_head">
  					<blockquote>
              『ウドズオイル』で良質な油「必須脂肪酸」を摂って、サラサラ巡るからだに。<span class="marker">冷え対策にも効果的</span>です。
  					</blockquote>
  				</div>

  				<div class="camp_item_detail_top_cart">
  					<div class="camp_item_detail_top_cart_title">
  						<small>オーガニック</small> ウドズオイル<br><small>オメガ3+6+9ブレンド</small>
  						<span class="camp_stock_img_amount">250ml</span>
  					</div>
  					<a href="https://yoihibi.jp/item/UDOOIL.html" target="_blank">
  						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
  					<p>この商品を購入する</p></a>
  				</div>
  			</div>
  		</div>
    </div>
	</div>

  <div class="camp_contents">
    <div class="camp_contents_lr">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title typ2">
							<span>医療用温熱治療器で痛み、コリ、疲れを楽にする。</span>
						</p>
					</div>
				</div>
			</div>
		</div>
    <div class="fl-box">
  		<div class="camp_contents_l">
  			<div class="camp_contents_box">
  				<div class="camp_stock_img">
  					<a href="https://yoihibi.jp/item/SUNMAT.html" target="_blank">
  					<img src="<?php echo $Path ?>stock5.png"></a>
  				</div>
  			</div>
  		</div>
  		<div class="camp_contents_r">
  			<div class="camp_contents_box">
  				<div class="camp_head">
  					<blockquote>
              『サン・マット』の温熱療法は、<span class="marker">質のよい遠赤外線の波長の効果でからだの深部に熱エネルギーを生み出し、痛みや疲れ、胃腸の不調を解消します。</span>整形外科でも使われている『サン・マット』は、一度使うと手放せません！
  					</blockquote>
  				</div>

  				<div class="camp_item_detail_top_cart">
  					<div class="camp_item_detail_top_cart_title">
              <div class="camp_item_detail_top_cart_title_red">医療用遠赤外線治療器</div><br>
  						サン・マット <small>敷きタイプ</small>
  						<span class="camp_stock_img_amount">M、L、LL</span>
  					</div>
  					<a href="https://yoihibi.jp/item/SUNMAT.html" target="_blank">
  						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
  					<p>この商品を購入する</p></a>
  				</div>
  			</div>
  		</div>
    </div>
	</div>

  <div class="camp_contents">
    <div class="camp_contents_lr">
			<div class="camp_contents_box">
			</div>
		</div>
    <div class="fl-box">
  		<div class="camp_contents_l">
  			<div class="camp_contents_box">
  				<div class="camp_stock_img">
  					<a href="https://yoihibi.jp/item/SUNMAT.html" target="_blank">
  					<img src="<?php echo $Path ?>stock6.png"></a>
  				</div>
  			</div>
  		</div>
  		<div class="camp_contents_r">
  			<div class="camp_contents_box">
          <div class="camp_head">
  					<blockquote>
              気になる部分に巻いて、手軽に集中ケア！
  					</blockquote>
  				</div>
  				<div class="camp_item_detail_top_cart">
  					<div class="camp_item_detail_top_cart_title">
              <div class="camp_item_detail_top_cart_title_red">医療用遠赤外線治療器</div><br>
              サン・マット <small>巻き付けタイプ</small>
  					</div>
  					<a href="https://yoihibi.jp/item/SUNMAT.html" target="_blank">
  						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
  					<p>この商品を購入する</p></a>
  				</div>
  			</div>
  		</div>
    </div>
	</div>

  <div class="camp_contents_etc">
		<div class="camp_contents_lr">
			<div class="camp_contents_box">
				<div class="camp_head">
					<div class="camp_title_area">
						<p class="camp_title_bottom">
							<span>心とからだをゆっくりほぐしてリラックス</span>
						</p>
					</div>
				</div>
			</div>
		</div>
    <div class="fl-box">
  		<div class="camp_contents_l">
  			<div class="camp_contents_box">
  				<div class="camp_stock_img">
  					<a href="https://yoihibi.jp/item/RELAXES.html" target="_blank">
  					<img src="<?php echo $Path ?>stock7.png"></a>
  				</div>
  			</div>
  		</div>
  		<div class="camp_contents_r">
  			<div class="camp_contents_box">
  				<div class="camp_item_detail_top_cart">
  					<div class="camp_item_detail_top_cart_title">
              リラックスエッセンス
              <span class="camp_stock_img_amount">500ml</span>
  					</div>
  					<a href="https://yoihibi.jp/item/RELAXES.html" target="_blank">
  						<img src="//dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/view/userweb/images/common/parts/icon_cart_w.png?timestamp=1529631824000">
  					<p>この商品を購入する</p></a>
  				</div>
  			</div>
  		</div>
    </div>
	</div>

</div>
