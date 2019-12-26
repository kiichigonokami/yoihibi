<!--★削除禁止★ -->
<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}

/*上書き*/
.item_detail_ttl_name { border-color: #887C2B!important;}
.article_detail_info {margin: 0; padding: 0; width: 100%;}

.marker {
  background: -webkit-linear-gradient(transparent 90%, rgba(62, 177, 52, 0.9) 10%);
  background: -o-linear-gradient(transparent 90%, rgba(62, 177, 52, 0.9) 10%);
  background: linear-gradient(rgba(0, 0, 0, 0) 90%, rgba(62, 177, 52, 0.9) 10%);
}

/*オリジナル*/
.column_head { position: relative;}
.intoroduction { display: block; width: 100%; line-height: 1.6; font-size: 18px; margin: 24px 0 0 0;}

.column_100img {display: block; overflow: hidden; width: 100%; margin-bottom: 20px;}
.column_100img img { width: 100%;}

.fl-box {display: flex; flex-wrap: wrap; justify-content: space-around;}
.fl-l {display: block;}
.fl-r {display: block;}
.l-1 {width:70%; margin-right:2%;}
.l-1-l {width:36%; margin-right:4%;}
.l-1-r {width:60%;}
.r-1 {width:28%;}
.l-2 {width:74%; margin-right:2%;}
.l-2-3 { width: 32%;}
.r-2 {width:24%; padding:48px 0 0 0;}

.sec-free { display: block; margin: 0 0 0 0; padding: 16px 0;}
.sec-free-ttl { border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 14px 0 8px; font-weight: bold; font-size: 24px; color:#e62e8b; margin: 16px 0 32px 0;}

/*おすすめ商品*/
.camp_stock_area {box-sizing: border-box; width: 100%; clear: both; display: block; margin: 20px 0 0 0; padding: 10px; background: #E9EDDA; border: 1px solid #ddd; overflow: hidden; border-radius: 10px;}
.camp_stock { width: 25%; float: left;}
.camp_stock_img { border: 1px solid #ddd; width: 90%; margin: 10px auto 0; height: 180px; display: block; overflow: hidden; text-align: center; background: #fff;}
.camp_stock_img img { width: auto; height: 100%; text-align: center;}
.camp_stock_txt { display: block; overflow: hidden; height: 4.5em; margin: 0 auto 0; padding: 10px 0; width: 85%; font-size: 14px; color: #887C2B; font-weight: bold; text-align: justify;}
.camp_stock a:hover { opacity: 0.6;}

@media screen and (max-width: 767px) {
.spnone {display:none!important;}
.pcnone {display:block!important;}

.intoroduction {font-size: 16px; margin: 16px 0 0 0;}

.sec-free { display: block; margin: 0 0 0 0; padding: 16px 0;}
.sec-free-ttl { border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 14px 0 8px; font-weight: bold; font-size: 18px; color:#e62e8b; margin: 16px 0 32px 0;}

.fl-box {display: flex; flex-wrap: wrap; justify-content: space-around;}
.fl-l {display: block; width: 100%; margin: 0;}
.fl-r {display: block; width: 100%; margin: 0; padding: 0;}
.l-2-3 { width: 100%; margin-bottom: 40px;}

/*おすすめ商品*/
.camp_stock { width: 50%!important;}
.camp_stock_img {height: 100px;}
.camp_stock_txt {font-size: 12px; padding: 0 0 10px 0; height: 2.5em;}
}
</style>
<!--★削除禁止★ -->

<div class="column_head">
  <img src="<?php echo $Path ?>title.png" class="spnone">
  <img src="<?php echo $Path ?>title_s.png" class="pcnone">
  <div class="intoroduction">
  昨年（2019年）5・6月合併号でご紹介いたしました「シニアにおすすめ サプリメント活用法！」を2020年版に更新させていただきました。「ご愛用者ランキング」をご覧になって、気になる商品などもおありかと思いますので、ご参考にしてください。
「よい日々ショップ」では、何かを足す前にからだの中を浄化する、不要なものを排出するという考え方をおすすめしております。ぜひステップ１からお始めください。
  </div>
</div>

<div class="column_100img">
	<img src="<?php echo $Path ?>pc1.png" class="spnone">
	<img src="<?php echo $Path ?>sp1.png" class="pcnone">
	<img src="<?php echo $Path ?>sp2.png" class="pcnone">
	<img src="<?php echo $Path ?>sp3.png" class="pcnone">
	<img src="<?php echo $Path ?>sp4.png" class="pcnone">
	<img src="<?php echo $Path ?>sp5.png" class="pcnone">
	<img src="<?php echo $Path ?>sp6.png" class="pcnone">
</div>

<div class="camp_stock_area">

  <div class="camp_stock"><a href="https://yoihibi.jp/item/UDOOIL.html" target="_blank">
  <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/UDOOIL/uo50n00.jpg"></p>
  <p class="camp_stock_txt">オーガニック ウドズオイル オメガ3＋6＋9ブレンド</p>
  </a></div>

  <div class="camp_stock"><a href="https://yoihibi.jp/item/FLOREL.html" target="_blank">
  <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/syouhin/florel.jpg"></p>
  <p class="camp_stock_txt">フロー・エッセンス＋ リキッド</p>
  </a></div>

  <div class="camp_stock"><a href="https://yoihibi.jp/item/TUKINO.html" target="_blank">
  <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/syouhin/tukino.jpg"></p>
  <p class="camp_stock_txt">月のしずく</p>
  </a></div>

  <div class="camp_stock"><a href="https://yoihibi.jp/item/VEGESI.html" target="_blank">
  <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/syouhin/vegesi.jpg"></p>
  <p class="camp_stock_txt">ベジ・シリカ</p>
  </a></div>

  <div class="camp_stock"><a href="https://yoihibi.jp/item/SOUPSO.html" target="_blank">
  <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/syouhin/soupso.jpg"></p>
  <p class="camp_stock_txt">スープ・スープ</p>
  </a></div>

  <div class="camp_stock"><a href="https://yoihibi.jp/item/FLRDIX.html" target="_blank">
  <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/syouhin/flrdix.jpg"></p>
  <p class="camp_stock_txt">フローラディクス</p>
  </a></div>

  <div class="camp_stock"><a href="https://yoihibi.jp/item/BEYOPE.html" target="_blank">
  <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/syouhin/beyope_new.jpg"></p>
  <p class="camp_stock_txt">ビヨンド・プレバイオ</p>
  </a></div>

</div>
