
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><!-- saved from url=(0032)http://9pt.jp/data/temona_print/ --><html xmlns='http://www.w3.org/1999/xhtml' lang='ja' xml:lang='ja'><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="description" content="#">
<meta name="keywords" content="#">
<style>
* {margin:0;padding:0;font-size: 100%;list-style:none;}
body {font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro";line-height: 1.5;text-align: left;color: #000;}
.contentWrap {margin:auto;width:210mm;page-break-after:always;padding:7mm 0;/*background:#FFC;*/font-size:14px;}
.contentWrap .contentInner{width:170mm;margin:0 auto;}
.contentWrap .contentInner .meisai-logo{float:left;width:35%}
.contentWrap .contentInner .meisai-Title{float:left;width:40%;text-align:center}
.contentWrap .contentInner .meisai-page{float:right;width:25%;text-align:right;font-size:10px}
.contentWrap .contentInner .meisai-Title{font-size:26px;margin-top:14px;}
.contentWrap .contentInner .content-left{float:left;width:80mm;margin-top:5mm}
.contentWrap .contentInner .content-left .content-leftInner{border:1px solid #333}
.contentWrap .contentInner .content-left .content-leftInner p{border-bottom:1px solid #333;padding:2px 10px/*;font-weight:bolder*/}
.contentWrap .contentInner .content-left ul {padding:10px;font-size:12px}
.contentWrap .contentInner .content-left ul .delivery-name{font-size:16px;margin-top:10px;text-align:right}
.contentWrap .contentInner .content-right{float:right;width:80mm;margin-top:5mm}
.contentWrap .contentInner .content-right .shop-name{font-size:16px;border-bottom:1px dotted #333}
.contentWrap .contentInner .content-right ul {font-size:12px;margin-top:8px}
.contentWrap .contentInner .meisai-message{clear:both;padding-top:3mm;font-size:12px}
.contentWrap .contentInner .meisai-order{clear:both;padding-top:6mm;font-size:12px;line-height:1.6}
.contentWrap .contentInner .meisai-order .useId {border:1px solid #333}
.contentWrap .contentInner .meisai-order .useId span { display:block;padding:3px}
.contentWrap .contentInner .meisai-order .useId .useId-title {float:left;width:30mm;border-right:1px dotted #333}
.contentWrap .contentInner .meisai-order .useId .useId-number {float:left;width:40mm}
.contentWrap .contentInner .meisai-order .useId:after{content:".";display:block;visibility:hidden;height:0.1px;font-size:0.1em;line-height:0;clear:both}
.contentWrap .contentInner .meisai-order .useId{zoom:100%}
.contentWrap .contentInner .meisai-order ul {margin-top:2mm}
.contentWrap .contentInner .meisai-order .meisai-orderLeft{float:left;width:80mm}
.contentWrap .contentInner .meisai-order .meisai-orderRight{float:right;width:80mm}
.contentWrap .contentInner .meisai-order .meisai-orderLeft li,.contentWrap .contentInner .meisai-order .meisai-orderRight li{margin-top:1mm;border-bottom:1px dotted #333}
.contentWrap .contentInner .meisai-price{clear:both;/*padding-top:6mm;*/font-size:12px;line-height:1.6}
.contentWrap .contentInner .meisai-price .meisai-priceLeft{float:left;width:80mm}
.contentWrap .contentInner .meisai-price .meisai-priceLeft ul{border:1px solid #333;border-bottom:none;margin-top:3mm}
.contentWrap .contentInner .meisai-price .meisai-priceLeft .plusPoint{text-align:center}
.contentWrap .contentInner .meisai-price .meisai-priceLeft ul li.solid{border-bottom:1px solid #333}
.contentWrap .contentInner .meisai-price .meisai-priceLeft ul li.dotted{border-bottom:1px dotted #333}
.contentWrap .contentInner .meisai-price .meisai-priceLeft ul li{border-bottom:1px solid #333;padding:3px 10px}
.contentWrap .contentInner .meisai-price .meisai-priceLeft ul li.solid .title{float:left}
.contentWrap .contentInner .meisai-price .meisai-priceLeft ul li.solid .inner{float:right}
.contentWrap .contentInner .meisai-price .meisai-priceLeft ul li.solid:after{content:".";display:block;visibility:hidden;height:0.1px;font-size:0.1em;line-height:0;clear:both}
.contentWrap .contentInner .meisai-price .meisai-priceLeft ul li.solid{zoom:100%}
.contentWrap .contentInner .meisai-price .meisai-priceRight{float:right;width:80mm}
.contentWrap .contentInner .meisai-price .meisai-priceRight ul{border:1px solid #333;border-bottom:none;margin-top:3mm}
.contentWrap .contentInner .meisai-price .meisai-priceRight ul li{border-bottom:1px solid #333;padding:3px 10px}
.contentWrap .contentInner .meisai-price .meisai-priceRight ul li .title{float:left}
.contentWrap .contentInner .meisai-price .meisai-priceRight ul li .inner{float:right}
.contentWrap .contentInner .meisai-price .meisai-priceRight ul li:after{content:".";display:block;visibility:hidden;height:0.1px;font-size:0.1em;line-height:0;clear:both}
.contentWrap .contentInner .meisai-price .meisai-priceRight ul li{zoom:100%}
.contentWrap .contentInner .meisai-price .meisai-priceRight .totalPrice{border:1px dotted #333;padding:5px;font-size:14px; margin-top:3mm; margin-bottom:20px}
.contentWrap .contentInner .meisai-price .meisai-priceRight .totalPrice .title{float:left}
.contentWrap .contentInner .meisai-price .meisai-priceRight .totalPrice .inner{float:right}
.contentWrap .contentInner .meisai-price .meisai-priceRight .totalPrice:after{content:".";display:block;visibility:hidden;height:0.1px;font-size:0.1em;line-height:0;clear:both}
.contentWrap .contentInner .meisai-price .meisai-priceRight .totalPrice{zoom:100%}
.contentWrap .contentInner .table-top{clear:both;padding-top:5mm}
.contentWrap .contentInner .meisai-lottery{background:url('https://florahouse.co.jp/images/common/lottery_card.png') no-repeat; background-size:100%; width:100%; height:208px; margin:24px 0 0 0; position:relative;}
.contentWrap .contentInner .meisai-lottery .lottery-number{position:absolute; top:108px; left:230px; font-size:18px;}
.contentWrap .contentInner .meisai-lottery .lottery-notice{position:absolute; top:145px; left:40px; font-size:11px; width: 400px;}
.clear{clear:both}
table {width: 100%;border-collapse:collapse;border-spacing:0;font-size:12px;border-top:1px solid #333;border-left:1px solid #333;}
table td {border-right:1px solid #333;border-bottom:1px solid #333;text-align:center;padding:3px 0;}
.contentWrap .contentInner .meisai-Communication{clear:both;border:1px dotted #333;padding:8px;font-size:12px}

</style>
<title>お買い上げ明細書</title>
</head><body><div class="contentWrap"><!--↓contentWrap Start↓-->
	<div class="contentInner"><!--↓contentInner Start↓-->
		<div class="meisai-logo"><img src="http://florahouse.co.jp/images/common/flora_logo1203.png" width="145" height="39" alt="わたしたちのけんこうをデザインする　よい日々ショップ"></div>
		<p class="meisai-Title">お買い上げ明細書</p>
		<p class="meisai-page">DEMO / DEMO</p>

		<div class="content-left clear">
			<div class="content-leftInner clear">
				<p>お届け先</p>
				<ul>
					<li>〒DEMO</li>
					<li>DEMODEMO</li>
					<li>DEMO　DEMO</li>
					<li class="delivery-name">DEMO　DEMO　様　</li>
				</ul>
			</div>
		</div>
		<div class="content-right">
			<p class="shop-name">DEMO</p>
			<ul>
				<li>DEMO</li>
				<li>〒DEMO</li>
				<li>DEMO</li>
				<li>E-mail : DEMO</li>
				<li>TEL : DEMO</li>
			</ul>
		</div>
		<p class="meisai-message clear">この度はご注文頂きまして、誠にありがとうございます。<br>お客様のお買い上げ明細書を送付いたしますので、ご確認いただきますよう、お願いいたします。<br>
1周年感謝キャンペーンの抽選券を最後に印字しています。抽選券が途中で切れて抽選番号が分からない場合、受注番号が抽選番号となりますので、この明細書を保管しておいてください。</p>
		<div class="meisai-order">
			<div class="useId"><p class="useId-title"><span>ご注文者様ID</span></p><p class="useId-number"><span>　DEMO</span></p></div>
			<ul class="meisai-orderLeft">
				<li>受注番号　：DEMO</li>
				<li>配送方法　：DEMO</li>
				<li>支払い方法：DEMO</li>
				<li>ご注文方法：DEMO</li>
			</ul>
			<ul class="meisai-orderRight">
				<li>ご注文日　：DEMO</li>
				<li>今回お届け希望日：DEMO</li>
				<li>次回お届け予定日：DEMO</li>
				<li>定期回数　：DEMO
</li>
			</ul>
		</div>

		<div class="table-top">
			<table>
				<tr>
					<td style="width:8mm;">No.</td>
					<td>商品名</td>
					<td style="width:13mm;">数量</td>
					<td style="width:24mm;">単価<span>（税抜）</span></td>
					<!--<td style="width:24mm;">税</td>-->
					<td class="" style="width:32mm;">小計<span>（税込）</span></td>
				</tr>
				          <tr>
            <td>　DEMO</td>
            <td>DEMO</td>
            <td>DEMO</td>
            <td>DEMO</td>
            <!--<td>DEMO</td>-->
            <td>DEMO</td>
          </tr>          <tr>
            <td>　DEMO</td>
            <td>DEMO</td>
            <td>DEMO</td>
            <td>DEMO</td>
            <!--<td>DEMO</td>-->
            <td>DEMO</td>
          </tr>

			</table>
		</div>
		<div class="meisai-price">
			<div class="meisai-priceLeft">
				<ul class="plusPoint">
					<li class="dotted">今回付加ポイント</li>
					<li class="solid">DEMO</li>
				</ul>
				<ul class="meisai-priceLeftPoint">
					<li class="solid"><p class="title">ご利用ポイント</p><p class="inner">DEMO</p></li>
					<li class="solid"><p class="title">残ポイント</p><p class="inner">DEMO</p></li>
				</ul>
			</div>
			<div class="meisai-priceRight">
				<ul>
					<li><p class="title">合計（税込）</p><p class="inner">&yen;DEMO</p></li>
					<li><p class="title">送料（税込）</p><p class="inner">&yen;DEMO</p></li>
					<li><p class="title">内消費税等</p><p class="inner">&yen;DEMO</p></li>
					<li><p class="title">割引額</p><p class="inner">&yen;DEMO</p></li>
				</ul>
				<div class="totalPrice"><p class="title">請求金額</p><p class="inner">&yen;DEMO</p></div>
			</div>
		</div>
		<div class="meisai-Communication">
				<div>お客様からの通信欄：DEMO</div>
				<div>お客様への通信欄　：DEMO</div>
		</div>
		<div class="meisai-lottery">
			<div class="lottery-number">DEMO</div>
			<div class="lottery-notice">
				1回のお届けにつき、抽選券1枚を進呈いたします。<br>
				2019年5月にお届けの「よい日々」にて当選番号を発表いたしますので、大切に保管してください
			</div>
		</div>
	</div><!--↑contentInner END↑-->
</div><!--↑contentWrap END↑--></body></html>
