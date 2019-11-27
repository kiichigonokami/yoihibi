<!--★削除禁止★ 8月のレシピ-->
<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}

.orange {color:#F08300;}
.red {color:#FF0000;}

.item_detail_ttl_name { border-color: #FABE00!important; margin-bottom: 10px;}
.intoroduction_1808TOKU {text-align: left; margin: 20px 1% 30px; width: 98%; position: relative; padding: 2.5% 2% 2%; background: rgba(255, 255, 255, 0.9); color: #333; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; -moz-box-shadow: 0 0 20px rgba(240, 131, 0, 0.9); -webkit-box-shadow: 0 0 20px rgba(240, 131, 0, 0.9); box-shadow: 0 0 20px rgba(240, 131, 0, 0.9); display: block; overflow: hidden;}

.recipe {margin:0 0 20px 0;}
.recipe_title { font-size: 18px; font-weight:bold; color: #231815; clear:both; overflow:hidden; display: block; background: #FCCB3E; padding: 10px 20px; border-radius: 5px; margin: 0 0 20px 0; text-align: center;}
.recipe_title small { display: inline-block; border-radius: 50px; background: #fff; color: #333; padding:5px 10px; font-size: 70%;}
.recipe_title small u {text-decoration: none; color:#0075BE; }
.origin .recipe_title { background: #0075BE; color: #fff; font-size: 24px;}
.recipe_disp { padding: 0 0 0 0; margin: 0 0 30px 0; overflow:hidden; display: block;}
.recipe_cap { padding: 0 0 0 0 !important; margin: 10px 0 5px !important; overflow:hidden; display: block;}
.recipe_box { padding: 0 0 0 0 !important; margin:0 0 30px 0; clear:both;}
.recipe_box b {font-weight:bold; color: #F08300; font-size: 120%;}
.recipe {width:100%; display: block; overflow: hidden; clear:both; }
.recipe_img_area { width:360px; float: left;}
.recipe_img_area img {width:100%;}
.recipe_area {width: 500px; overflow:hidden; display: block; margin: 0 0 0 40px; float: right;}
.recipe_prof_area {padding: 20px; line-height: 1.8; display: block; overflow: hidden; clear:both;}
.recipe_prof_disp {padding:0 20px 0 0; display: block; overflow: hidden; float: left; width: 75%;}
.recipe_prof_disp b { font-size: 140%;}
.recipe_prof_disp span { font-size: 140%;}
.recipe_prof_img {padding: 0; display: block; overflow: hidden; float: right; width: 25%; margin: 0 auto;}
.recipe_prof_img img { width: 80%; margin:0 0 0 20%; text-align: center;}
.recipe_box a {color: #F08300!important;}
.recipe_box a:hover {color: #6A6A6A!important;}

.recipe_quantity_area { border: 1px solid #ccc; display: block; overflow: hidden; padding: 10px; width: 100%;}
.recipe_quantity { float: left; width: 45%;}
.recipe_quantity_area ul { float: right; width: 55%;}
.recipe_quantity_area ul li { text-align: left;}

.feature_summary_stuff { background: url(<?php echo $Path ?>3back.jpg) no-repeat; background-size: 100%; padding: 20px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; position: relative; margin:30px 0 0 0;}
.feature_summary_stuff p { background: #ffffff; padding:15px; -moz-box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); -webkit-box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); width: 90%; line-height: 1.8;}
.feature_summary_stuff p span { border-bottom: 1px dashed #999999; margin: 0 0 5px 0;}
.feature_summary_stuff .staff { background: url(<?php echo $Path ?>takemura.png) no-repeat contain; width: 158px; height: 169px; position: absolute; display: block; overflow: hidden; bottom: -20px; right: -20px; }
.feature_summary_stuff .staff img { width: 100%; }
	

.yomimono {}
.yomimono-text {}
.yomimono-text-title { text-align: center;}
.yomimono-text-title-cap {font-size: 24px;}
.yomimono-text-title-cap b {font-size: 40px; font-weight: 400; padding: 0 8px;}
.yomimono-text-title-main { font-size: 32px; background: url('https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/line.png') bottom center no-repeat; padding: 0 0 24px 0; margin: 0 0 24px 0;}
.yomimono-text-disp { display: block; font-size: 20px; box-sizing: border-box; margin: 0 48px; text-align: justify; line-height: 1.6; letter-spacing: 1px;}
.yomimono-author {display: block; margin: 0 0 0 48px; padding: 0 0 0 0; font-size: 16px; font-weight: bold;}

.yomimono-what { background: #c8b6a1; border-radius: 8px; padding: 16px;clear: both; display: block;}
.yomimono-what-title { text-align: center; font-size: 20px;}
.yomimono-what-title b {font-size: 24px;}
.yomimono-what-disp { display: block; font-size: 16px; box-sizing: border-box; text-align: justify; letter-spacing: 1px; color: #231815;}
.yomimono-what-disp p { line-height: 1.8;}
.yomimono-what-disp p span { border-bottom: 1px dashed #fff; margin: 0 0 5px 0;}

.yomimono-credit { display: block; margin: 0 0 16px;}

.camp_stock_area {box-sizing: border-box; width: 100%; clear: both; display: block; margin: 20px 0 0 0; padding: 10px; background: #E9EDDA; border: 1px solid #ddd; overflow: hidden; border-radius: 10px;}
.camp_stock { width: 25%; float: left;}
.camp_stock_img { border: 1px solid #ddd; width: 90%; margin: 10px auto 0; height: 180px; display: block; overflow: hidden; text-align: center; background: #fff;}
.camp_stock_img img { width: auto; height: 100%; text-align: center;}
.camp_stock_txt { display: block; overflow: hidden; height: 4.5em; margin: 0 auto 0; padding: 10px 0; width: 85%; font-size: 14px; color: #034d8e; font-weight: bold; text-align: justify;}
.camp_stock a:hover { opacity: 0.6;}


@media screen and (max-width: 767px) {
.spnone {display:none!important;}
.pcnone {display:block!important;}

.recipe_area { width: 100%; margin: 0 0 0 0;}
.recipe_title { font-size: 20px;}
.recipe_prof_disp {float: none; width: 100%; margin-bottom: 0;}
.recipe_prof_disp b { font-size: 110%;}
.recipe_prof_disp span { font-size: 110%;}
.recipe_prof_img {float: none; margin: 0 auto 20px; width: 60%;}
.recipe_prof_img img { width:100%; text-align: center;}

.intoroduction_1808TOKU { margin: 20px 2% 20px; width: auto; font-size: 14px; padding: 10px; }
.intoroduction_1808TOKU .left { float: none; display: block; width: 100%; line-height: 1.8; padding: 10px 20px 10px 10px;}
.intoroduction_1808TOKU .right { float: none; display: block; width: 50%; margin: 0 auto; text-align: center!important; line-height: 1.2;}
.intoroduction_1808TOKU .right img {width: 100%; display: block;}

#free_sec1 {margin: 30px auto 20px !important;}
.free_sec1_box_cap span { padding:5px 10px 3px;}
.free_sec1_box_cap span b { font-size: 100%; font-weight: bold;}
	
.left_img_text1 {line-height:1.2; margin-bottom:30px; padding:0 20px; boader:1px solid #eee;}

.feature_summary_matome { padding: 10px 20px 10px;}
.feature_summary_matome .matome_cap {font-size: 32px;}
.feature_summary_matome .matome_disp {font-size: 20px;}
.feature_summary_matome .matome { font-size: 14px;}

.feature_summary_stuff { padding: 20px 20px 110px; background: url(<?php echo $Path ?>3back.jpg) no-repeat; background-size: 200%; }
.feature_summary_stuff p { width: 88%; }

.yomimono-text-title-cap {font-size: 20px;}
.yomimono-text-title-cap b {font-size: 28px; padding: 0 4px;}
.yomimono-text-title-main { font-size: 28px;}
.yomimono-text-disp {font-size: 16px; margin: 0 16px;}
.yomimono-author {margin: 40px 16px 0;font-size: 14px;}
.yomimono-author small {font-size: 12px;}

.kiji_prof_area img { display: block; margin: 0 auto;}
.kiji_prof_area span {font-size: 16px;}

.camp_stock { width: 50%!important;}
.camp_stock_img {height: 100px;}
.camp_stock_txt {font-size: 12px; padding: 0 0 10px 0; height: 2.5em;}
}
</style>
<!--★削除禁止★ 8月のレシピ-->

<img src="<?php echo $Path ?>mtitle.png" width="100%;" class="spnone" style="margin: 0 0 20px 0;">
<img src="<?php echo $Path ?>mtitle_s.png" width="100%;" class="pcnone">

<div class="intoroduction_1808TOKU">
暑い夏を元気に乗り切るための『スープ・スープ』を使ったお料理をご紹介します。作ってくださったのは、「新・旬の元気レシピ」でおなじみの栄養士の佐藤信子さんです。
簡単なのに、おいしくてヘルシーなお料理を、是非お試しください。
</div>

<img src="<?php echo $Path ?>title.png" width="100%;" class="spnone" style="margin: 0 0 20px 0;">
<img src="<?php echo $Path ?>title_s.png" width="100%;" class="pcnone">

<div class="recipe origin">
<div class="recipe_title">
カポナータ風 夏野菜のスープ・スープ漬け<span class="orange">★</span>
<small><span class="orange">★</span>下の2つのお料理にアレンジして使えます。</small>
</div>

<div class="recipe_img_area">

<img src="<?php echo $Path ?>recipe_img_1.png">

<div class="recipe_disp">
たくさんの種類の夏野菜を『スープ・スープ』で煮込みました。常備菜としてもおすすめ！<br>
「カポナータ」は、イタリア生まれの家庭料理です。
</div>

<div class="recipe_quantity_area">
<p class="recipe_quantity">〔1人分〕</p>
<ul>
<li>約250g</li>
<li>エネルギー　158kcal</li>
<li>食塩相当量　1.5ｇ</li>
</ul>
</div>
	
</div>

<div class="recipe_area">

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_1.png"></p>

<div class="recipe_box" style="text-align:left;">
ミニトマト …… 150ｇ（2/3パック）<br>
玉ねぎ …… 100ｇ（中1/2個）<br>
セロリ …… 50ｇ（1/2本）<br>
パプリカ（橙） …… 150ｇ（1個）<br>
ズッキーニ …… 150ｇ（1本）<br>
オリーブオイル …… 大さじ１<br>
<br>
　┌ <a href="https://yoihibi.jp/item/SOUPSO.html" target="_blank">スープ・スープ</a> …… 10ｇ<br>
Ａ│ 塩 …… 小さじ１<br>
　└ みりん …… 大さじ１
</div>

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_2.png"></p>
<div class="recipe_box">
<b>&#10102;</b>ミニトマトはヘタをとり、皮に浅く切り込みを入れ、さっと茹でて皮をとる。他の野菜は２㎝角に切っておく。<br>
<br>
<b>&#10103;</b>鍋にオリーブオイルを熱し、トマト以外の野菜を中火で５分炒め、Ａとミニトマトを加えてさらに１分炒める。
</div>

</div>

</div>

<div class="recipe">
<div class="recipe_title">
夏野菜のスープ・スープ漬け入り卵焼き<br>
<small><u>カポナータ風 夏野菜のスープ・スープ漬け</u>のアレンジメニューです。</small>
</div>

<div class="recipe_img_area">

<img src="<?php echo $Path ?>recipe_img_2.png">

<div class="recipe_disp">
見た目にも爽やかな卵焼き。夏ならではの彩りです。食べてみると、夏野菜の酸味や甘味、トロッとした食感が口の中に広がります。
</div>

<div class="recipe_quantity_area">
<p class="recipe_quantity">〔1人分〕</p>
<ul>
<li>エネルギー　133kcal</li>
<li>食塩相当量　1.0ｇ</li>
</ul>
</div>
	
</div>

<div class="recipe_area">

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_1.png"></p>

<div class="recipe_box" style="text-align:left;">
<span class="orange">★</span>夏野菜のスープ・スープ漬け …… 100ｇ<br>
卵 …… 2個<br>
<br>
　┌ しょうゆ …… 小さじ１<br>
Ａ│<span class="orange">★</span>スープ・スープ漬けの水分 …… 大さじ１<br>
　└ 砂糖 …… 小さじ１
</div>

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_2.png"></p>
<div class="recipe_box">
<b>&#10102;</b>卵を割りほぐしＡを加えよく混ぜる。<br>
<br>
<b>&#10103;</b>卵焼き器を熱し薄く油を敷き、卵液の1/2量を流す。<br>
<br>
<b>&#10104;</b>下の部分が固まったら1/2量の<span class="red">★</span>夏野菜のスープ・スープ漬けを一面に散らして、一巻きする。<br>
<br>
<b>&#10105;</b>残りの1/2量の卵液を流し、&#10104;と同様に<span class="red">★</span>を散らしてもう一度巻く。<br>
<small>＊焦げやすいので火加減にはご注意ください。</small>
</div>

</div>

</div>

<div class="recipe">
<div class="recipe_title">
とりもも肉の南蛮漬け風<br>
<small><u>カポナータ風 夏野菜のスープ・スープ漬け</u>のアレンジメニューです。</small>
</div>

<div class="recipe_img_area">

<img src="<?php echo $Path ?>recipe_img_3.png">

<div class="recipe_disp">
『スープ・スープ』で作った南蛮汁は万能です。とりもも肉だけでなく、イワシや白身魚なども、さっぱりおいしく仕上がります。
</div>

<div class="recipe_quantity_area">
<p class="recipe_quantity">〔1人分〕</p>
<ul>
<li>エネルギー　331kcal</li>
<li>食塩相当量　3.2ｇ</li>
</ul>
</div>

</div>

<div class="recipe_area">

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_1.png"></p>

<div class="recipe_box" style="text-align:left;">
とりもも肉 …… 小1枚（250ｇ）<br>
塩・こしょう …… 少々<br>
かぼちゃ …… ６０ｇ<br>
<br>
南蛮汁<br>
　┌ <a href="https://yoihibi.jp/item/SOUPSO.html" target="_blank">スープ・スープ</a> …… 小さじ1<br>
　│ しょうゆ …… 大さじ2<br>
Ａ│ <a href="https://yoihibi.jp/item/UMEKUR.html" target="_blank">梅黒酢</a>（酢） …… 大さじ1<br>
　│ <a href="https://yoihibi.jp/item/UDOOIL.html" target="_blank">ウドズオイル</a> …… 大さじ1<br>
　│ 長ねぎ（細切りにする） …… 5ｃｍ<br>
　└ 赤唐辛子輪切り …… ひとつまみ
<br>
(付け合わせ）<br>
<span class="orange">★</span>夏野菜のスープ・スープ漬け …… 100ｇ
</div>

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_2.png"></p>
<div class="recipe_box">
<b>&#10102;</b>とりもも肉は厚みを均等にし、6枚のそぎ切りにして塩・こしょうをする。かぼちゃは種を取り、５㎜の厚さに切る。<br>
<br>
<b>&#10103;</b>南蛮汁の材料Ａを合わせておく。<br>
<br>
<b>&#10104;</b>とりもも肉とかぼちゃはグリル（両面焼き）で10〜15分、またはフライパンで焦げ色が付くまで焼き、&#10103;に浸す。<br>
<br>
<b>&#10105;</b>&#10104;が冷めたら、<span class="red">★</span>夏野菜のスープ・スープ漬けを加え混ぜる。
</div>

</div>

</div>

<div class="recipe origin">
<div class="recipe_title">
酸辣湯（サンラータン）風にゅうめん
</div>

<div class="recipe_img_area">

<img src="<?php echo $Path ?>recipe_img_4.png">

<div class="recipe_disp">
暑い季節だからこそ食べて欲しい、酸味とうま味が食欲をそそるにゅうめんです。いろいろな食材も入って、栄養バランスも良くなります。
</div>

<div class="recipe_quantity_area">
<p class="recipe_quantity">〔1人分〕</p>
<ul>
<li>エネルギー　358kcal</li>
<li>食塩相当量　3.2ｇ</li>
</ul>
</div>
	
</div>

<div class="recipe_area">

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_1.png"></p>

<div class="recipe_box" style="text-align:left;">
そうめん …… ２束（100ｇ）<br>
豚三枚肉 …… 50ｇ<br>
えのき茸 …… 50ｇ<br>
にんじん …… 30ｇ<br>
豆腐 …… 100ｇ<br>
万能ねぎ（小口切り） …… 大さじ２<br>
水溶きかたくり粉 …… （かたくり粉大さじ1・1/2を同量の水で溶く）<br>
<a href="https://yoihibi.jp/item/UMEKUR.html" target="_blank">梅黒酢</a>（酢） …… 小さじ2<br>
ラー油 …… 適量<br>
<br>
　┌ 水 …… 400ｍｌ<br>
Ａ│ <a href="https://yoihibi.jp/item/SOUPSO.html" target="_blank">スープ・スープ</a> …… 10ｇ<br>
　│ しょうゆ …… 大さじ１<br>
　└ 塩 …… 小さじ1/2
</div>

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_2.png"></p>
<div class="recipe_box">
<b>&#10102;</b>豚肉は5㎜幅の細切り、えのき茸、にんじん、豆腐はそれぞれ4㎝の長さの細切りにする。<br>
<br>
<b>&#10103;</b>鍋にＡと豆腐以外の①を入れ、肉をほぐしながら火にかける。煮立ったらアクをとり、2〜3分煮る。<br>
<br>
<b>&#10104;</b>そうめんは表示通りに茹でる。湯を切り、器に入れる。<br>
<br>
<b>&#10105;</b>&#10103;に豆腐と水溶きかたくり粉を加えてひと煮立ちさせ、火を止める。<br>
<br>
<b>&#10106;</b>器に注ぎ、梅黒酢を小さじ１、好みでラー油を加え、万能ねぎを散らす。
</div>

</div>

</div>

<div class="recipe origin">
<div class="recipe_title">
蒸し野菜につけて  豆腐と鮭のディップ<span class="orange">★</span><br>
<small><span class="orange">★</span>下のお料理にアレンジして使えます。</small>
</div>

<div class="recipe_img_area">

<img src="<?php echo $Path ?>recipe_img_5.png">

<div class="recipe_disp">
豆腐と鮭を混ぜて、『スープ・スープ』などで味付けしました。たんぱく質がしっかり摂れるディップです。パンに付けてもおいしい！
</div>

<div class="recipe_quantity_area">
<p class="recipe_quantity">〔全量に対して〕</p>
<ul>
<li>エネルギー　387kcal</li>
<li>食塩相当量　3.4ｇ</li>
</ul>
</div>
	
</div>

<div class="recipe_area">

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_1.png"></p>

<div class="recipe_box" style="text-align:left;">
※材料、作り方はディップのみ<br>
<br>
豆腐 …… 100ｇ <br>
鮭（缶詰） …… 45ｇ（小1/2缶）<br>
万能ねぎ（小口切り） …… 大さじ2<br>
<br>
　┌ <a href="https://yoihibi.jp/item/UDOOIL.html" target="_blank">ウドズオイル</a> …… 大さじ2<br>
Ａ│ <a href="https://yoihibi.jp/item/UMEKUR.html" target="_blank">梅黒酢</a>（酢） …… 大さじ1<br>
　│ <a href="https://yoihibi.jp/item/SOUPSO.html" target="_blank">スープ・スープ</a>  …… 小さじ１<br>
　└ 塩 …… 小さじ1/2（お好みで）
</div>

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_2.png"></p>
<div class="recipe_box">
<b>&#10102;</b>豆腐はキッチンペーパーで包み、重石をしてしばらく置く。<br>
<br>
<b>&#10102;</b>スプーンなどで豆腐と鮭をつぶし、Ａを加え混ぜ、万能ねぎを加えさらに混ぜる。蒸し野菜につけていただく。
</div>

</div>

</div>

<div class="recipe">
<div class="recipe_title">
豆腐と鮭のディップ　ア・ラ・カルト<br>
<small><u>豆腐と鮭のディップ</u>のアレンジメニューです。</small>
</div>

<div class="recipe_img_area">

<img src="<?php echo $Path ?>recipe_img_7.png">

<div class="recipe_disp">
上の基本ディップをお好みの味にアレンジしてお楽しみください。カレー粉や辛味を少し加えると、食欲がわいてきます！
</div>
	
</div>

<div class="recipe_area">

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_1.png"></p>

<div class="recipe_box" style="text-align:left;">
カレー味 …… カレー粉小さじ２を加え混ぜる。<br>
辛み味 …… 豆板醬小さじ1を加え混ぜる。<br>
ごま味 …… すりごま大さじ２を加え混ぜる。
<br>
<small>＊冷蔵庫に保存し、2〜3日中にお召し上がりください。</small>
</div>

</div>

</div>

<div class="recipe origin">
<div class="recipe_title">
干し桜エビ入りにんじんご飯
</div>

<div class="recipe_img_area">

<img src="<?php echo $Path ?>recipe_img_6.png">

<div class="recipe_disp">
カルシウムが豊富な桜エビの炊き込みご飯です。『スープ・スープ』を加えると、たんぱく質も一緒に摂れて、骨の健康に役立ちます。
</div>

<div class="recipe_quantity_area">
<p class="recipe_quantity">〔1人分〕</p>
<ul>
<li>エネルギー　320kcal</li>
<li>食塩相当量　1.7ｇ</li>
</ul>
</div>
	
</div>

<div class="recipe_area">

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_1_2.png"></p>

<div class="recipe_box" style="text-align:left;">
米 …… 米用カップ２（2合）<br>
にんじんジュース（100％人参） …… 200ml<br>
水 …… 約230ml<br>
干し桜エビ（乾煎りして） …… 10ｇ<br>
にんじん …… 100ｇ<br>
生しいたけ …… 4枚<br>
<br>
　┌<a href="https://yoihibi.jp/item/SOUPSO.html" target="_blank">スープ・スープ</a> …… 10ｇ<br>
Ａ│ 酒・しょうゆ …… 各大さじ1<br>
　└ 塩 …… 小さじ1/2<br>
</div>

<p class="recipe_cap"><img src="<?php echo $Path ?>recipe_cap_2.png"></p>
<div class="recipe_box">
<b>&#10102;</b>米を研ぎ水を切り、釜に米、にんじんジュースを入れ、２合の印まで水を加えて30分浸け置く。<br>
<br>
<b>&#10103;</b>干し桜エビは香りが出るまで乾煎りする（電子レンジで20秒加熱してもよい）。にんじん、生しいたけは細切りにする。<br>
<br>
<b>&#10104;</b>&#10102;に&#10103;とＡを入れ混ぜ、普通に炊く。炊き上がったらひと混ぜする。器に盛り、お好みで大葉の細切りなどを添える。
</div>

</div>

<div class="yomimono-credit">
    テーブルコーディネートを含む写真撮影：中島香代子さん
  </div>

  <div class="yomimono-what">
    <div class="yomimono-what-title">
      <b>薬膳</b>とは?
    </div>
    <div class="yomimono-what-disp">
      <p><span>中国伝統医学に基づき、健康増進、疾病の予防、治療の効果が期待できる食事のこと。からだの状態や体質、季節などをふまえ、食材や生薬などの効能効果を考慮して組み合わせるのが特徴です。</span></p>
    </div>
  </div>

  <div class="feature_summary_stuff">
  	<div class="staff"><img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/takemura.png"></div>
  	<p><span>中島さんの薬膳は、普段の食事に取り入れやすいように食材選びや調理方法などをきちんと考え、食べやすいサイズにするなど、盛り付けにも気を配っています。<br>薬膳と聞くと、特別な食材を使い、調理も難しいと思われがちですが、ちょっとした工夫で食事の内容をより健康的にすることができます。参考にしてくださいね！（よい日々編集 竹村）</span></p>
  </div>

  <div class="camp_stock_area">

    <div class="camp_stock"><a href="https://yoihibi.jp/item/UMEKUR.html" target="_blank">
    <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/syouhin/umekur_camp.jpg"></p>
    <p class="camp_stock_txt">梅黒酢</p>
    </a></div>

  </div>

</div>




