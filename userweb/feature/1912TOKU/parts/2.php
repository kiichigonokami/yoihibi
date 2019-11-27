<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}
.yomimono img { width: 100%;}

.article_detail_info { width: 100% !important; margin: 0 auto 0px;}
.article_detail_header h2 {border-bottom: solid 4px #0052a5!important; margin: 30px 0 30px 0 !important;}
.intoroduction {text-align: left; margin: -20px 1% 60px; width: 98%; position: relative; padding: 2.5% 2% 2%; background: rgba(255, 255, 255, 0.9); color: #333; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; -moz-box-shadow: 0 0 20px rgba(0, 82, 165, 0.9); -webkit-box-shadow: 0 0 20px rgba(0, 82, 165, 0.9); box-shadow: 0 0 20px rgba(0, 82, 165, 0.9); display: block; overflow: hidden;}

.kiji_prof_area { padding: 20px; line-height: 1.8; display: block; overflow: hidden; clear: both;}
.kiji_prof_disp {padding: 0 20px 0 0; display: block; overflow: hidden; float: left; width: 75%;}
.kiji_prof_disp span {font-size: 140%;}
.kiji_prof_img {padding: 0; display: block; overflow: hidden; float: right; width: 25%; margin: 0 auto; text-align: right;}

.fl-box {display: flex; flex-wrap: wrap; justify-content: space-around; box-sizing: border-box;}
.fl-l {display: block; box-sizing: border-box;}
.fl-r {display: block; box-sizing: border-box;}
.l-1 {width:556px; margin-right:0; box-sizing: border-box;}
.r-1 {width:400px; margin-right:0; box-sizing: border-box;}

.recipe {margin:0 0 56px 0; box-sizing: border-box; display: block; width: 100%; clear: both;}
.recipe_inner {display: block; overflow: hidden;}
.recipe_title { font-size: 24px; font-weight:bold; clear:both; display: block; padding: 10px 20px; border-bottom: 1px solid #F08300; margin: 0 0 30px 0; text-align: center; color: #fff; background: #F08300; border-radius: 56px; position: relative;}
.recipe_title_cap {display: block; font-size: 80%;}
.recipe_title_cap_bottom {color: #333; display: block; font-size: 70%;}

.recipe_split { display: block; margin: 0 0 40px 0;}

.r_2 .recipe_title {border: 3px solid #929f16; color: #333; background: #fff;}
.r_2 .recipe_title_cap {color: #929f16;}
.r_2 .recipe_title_seal {background: #929f16; color: #fff;}
.r_3 .recipe_title {border: 3px solid #9e2330; color: #333; background: #fff;}
.r_3 .recipe_title_cap {color: #9e2330;}
.r_3 .recipe_title_seal {background: #9e2330; color: #fff;}
.r_4 .recipe_title {border: 3px solid #00669c; color: #333; background: #fff;}
.r_4 .recipe_title_cap {color: #00669c;}
.r_4 .recipe_title_seal {background: #00669c; color: #fff;}

.recipe_title_seal {border-radius: 50%; width: 120px; height: 120px; position: absolute; top: -10px; left: -30px; display: block; background: #F08300; border: 4px solid #fff; line-height: 1.2; box-sizing: border-box; padding: 32px 0 0 0; font-size: 20px;}
.recipe_title small {display: block; padding:5px 10px; font-size: 70%; background: #fff; color: #000; display: inline-block; border-radius: 2px;}
.recipe_title small u {text-decoration: none; color:#0075BE; }
.recipe_disp { padding: 0 0 0 0; margin: 16px 0 24px 0; overflow:hidden; display: block;}
.recipe_cap {margin: 0 0 15px; overflow:hidden; display: inline-block; background: #eee; border-radius: 20px; padding: 6px 12px 4px 15px; font-weight: bold; font-size: 20px;}
.r_1 .recipe_cap  {background: #F08300; color: #fff;}
.r_2 .recipe_cap  {background: #929f16; color: #fff;}
.r_3 .recipe_cap  {background: #9e2330; color: #fff;}
.r_4 .recipe_cap  {background: #00669c; color: #fff;}
.recipe_box { padding: 0 0 0 0 !important; margin:0 0 30px 0; clear:both;}
.recipe_box b {font-weight:bold; color: #F08300; font-size: 120%;}
.r_2 .recipe_box b {font-weight:bold; color: #929f16; font-size: 120%;}
.r_3 .recipe_box b {font-weight:bold; color: #9e2330; font-size: 120%;}
.r_4 .recipe_box b {font-weight:bold; color: #00669c; font-size: 120%;}
.recipe_img_area { max-width:360px; float: left;}
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

.recipe_plus_area { display: block; overflow: hidden; padding:0; width: 100%; margin: 24px 0 0 0;}

.recipe_quantity_area { border: 1px solid #ccc; display: block; overflow: hidden; padding: 10px; width: 100%;}
.recipe_quantity { float: left; width: 45%;}
.recipe_quantity_area ul { float: right; width: 55%;}
.recipe_quantity_area ul li { text-align: left;}

.recipe_box_each {display: block; margin: 0 0 24px 0;}
.recipe_box_each_cap {}
.recipe_box_each_box {padding: 8px 0 8px 16px; margin: 0 0 0 24px;}
.type1 {}
.type1 .recipe_box_each_cap b { color: #985d1b}
.type1 .recipe_box_each_box { border-left: 4px solid #985d1b;}
.type2 {}
.type2 .recipe_box_each_cap b {color: #eb70a7}
.type2 .recipe_box_each_box {border-left: 4px solid #eb70a7;}
.type3 {}
.type3 .recipe_box_each_cap b {}
.type3 .recipe_box_each_box {border-left: 4px solid #F08300;}
.r_2 .type3 .recipe_box_each_box {border-left: 4px solid #929f16;}
.r_3 .type3 .recipe_box_each_box {border-left: 4px solid #9e2330;}
.r_4 .type3 .recipe_box_each_box {border-left: 4px solid #00669c;}

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

.feature_summary_stuff { background: url(https://yoihibi.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1806/3back.jpg) no-repeat; background-size: 100%; padding: 20px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; position: relative; margin:30px 0 0 0;}
.feature_summary_stuff p { background: #ffffff; padding:15px; -moz-box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); -webkit-box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); width: 90%; line-height: 1.8;}
.feature_summary_stuff p span { border-bottom: 1px dashed #999999; margin: 0 0 5px 0;}
.feature_summary_stuff .staff { width: 158px; height: 169px; position: absolute; display: block; overflow: hidden; bottom: -20px; right: -20px; }
.feature_summary_stuff .staff img { width: 100%; }

.camp_stock_area {box-sizing: border-box; width: 100%; clear: both; display: block; margin: 20px 0 0 0; padding: 10px; background: #E9EDDA; border: 1px solid #ddd; overflow: hidden; border-radius: 10px;}
.camp_stock { width: 25%; float: left;}
.camp_stock_img { border: 1px solid #ddd; width: 90%; margin: 10px auto 0; height: 180px; display: block; overflow: hidden; text-align: center; background: #fff;}
.camp_stock_img img { width: auto; height: 100%; text-align: center;}
.camp_stock_txt { display: block; overflow: hidden; height: 4.5em; margin: 0 auto 0; padding: 10px 0; width: 85%; font-size: 14px; color: #034d8e; font-weight: bold; text-align: justify;}
.camp_stock a:hover { opacity: 0.6;}

@media screen and (max-width: 767px) {
.spnone {display:none!important;}
.pcnone {display:block!important;}
.intoroduction { margin: 20px 2% 20px; width: auto; font-size: 14px; padding: 10px;}
.l-1 {width:100%; margin-right:0;}
.r-1 {width:100%; margin-top:0;}

.recipe_area { width: 100%; margin: 0 0 0 0;}
.recipe_title { font-size: 20px; border-radius: 8px; margin: 80px 0 30px 0;}
.recipe_title_seal {width: 80px; height: 80px; top: -70px; left: -10px; padding: 20px 0 0 0; font-size: 14px;}
.recipe_prof_disp {float: none; width: 100%; margin-bottom: 0;}
.recipe_prof_disp b { font-size: 110%;}
.recipe_prof_disp span { font-size: 110%;}
.recipe_prof_img {float: none; margin: 0 auto 20px; width: 60%;}
.recipe_prof_img img { width:100%; text-align: center;}

.yomimono-text-title-cap {font-size: 20px;}
.yomimono-text-title-cap b {font-size: 28px; padding: 0 4px;}
.yomimono-text-title-main { font-size: 28px;}
.yomimono-text-disp {font-size: 16px; margin: 0 16px;}
.yomimono-author {margin: 40px 16px 0;font-size: 14px;}
.yomimono-author small {font-size: 12px;}

.kiji_prof_area img { display: block; margin: 0 auto;}
.kiji_prof_area span {font-size: 16px;}

.feature_summary_stuff { padding: 20px 20px 110px; background: url(https://yoihibi.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1806/3back.jpg) no-repeat; background-size: 200%;}
.feature_summary_stuff .staff { bottom: -36px;}
.feature_summary_stuff p { width: 88%; text-align: justify;}
.feature_summary_stuff .staff img { width: 90%; }

.camp_stock { width: 50%!important;}
.camp_stock_img {height: 100px;}
.camp_stock_txt {font-size: 12px; padding: 0 0 10px 0; height: 2.5em;}
}
</style>

<div class="yomimono">

  <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/title.png" width="100%;" style="margin: 0 0 50px 0;" class="spnone">
  <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/title_s.png" width="100%;" style="margin: 0 0 0 0;" class="pcnone">

  <div class="intoroduction">
  　身近な食材を用いながら、薬膳の知恵を活かした夏バテ対策メニューをご紹介いたします。今回、レシピを考えてくださったのは、薬膳料理家としてご活躍の中島香代子さんです。<br>
  疲労回復を助けるゆで鶏を使った基本メニューを、ご自身の夏バテタイプやその日の体調などに合わせてアレンジしていただけます。４品の薬膳メニューを、暑い毎日の健康維持にお役立てください。
  </div>


  <div class="recipe r_1">
  	<div class="recipe_title">
      <div class="recipe_title_seal">基本<br>メニュー</div>
      ゆで鶏の薬膳梅黒酢かけ <span style="color:#000; font-size:70%;">(下のアレンジメニューの元になる料理です)</span>
  		<small><span style="color:#985d1b;">【A】</span><span style="color:#eb70a7;">【B】</span>は、気虚タイプ、血虚タイプ、水毒タイプのお料理にアレンジして使います。</small>
  	</div>
    <div class="recipe_inner">
    	<div class="recipe_img_area">
    		<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/recipe_img_1.png">
    		<div class="recipe_disp">
    			胃腸の働きを助け、“気”（エネルギー）の補給にもなるとり肉は、暑さで消耗しがちな夏の疲労回復を助けます。特に、むね肉は脂肪が少なく、消化吸収にもやさしいのでおすすめです。<br>
          さらに、「薬膳梅黒酢たれ」は、血液サラサラ、食欲の増進などをサポートし、夏バテ対策にぴったりの組み合わせです。
    		</div>
        <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/etc1.png">
    	</div>

    	<div class="recipe_area">
    		<p class="recipe_cap">材料（2人分）</p>
    		<div class="recipe_box" style="text-align:left;">
          <div class="recipe_box_each type1">
            <div class="recipe_box_each_cap">
              <b>【A】ゆで鶏</b>
            </div>
            <div class="recipe_box_each_box">
              むね肉 …… 2枚（300ℊ程度）<br>
              生姜の薄切り …… 2枚<br>
              長ねぎ（白い部分） …… 5cm程度<br>
              酒 …… 大さじ１<br>
              塩 …… 一つまみ程度<br>
            </div>
          </div>
          <div class="recipe_box_each type2">
            <div class="recipe_box_each_cap">
              <b>【B】梅黒酢たれ</b>
            </div>
            <div class="recipe_box_each_box">
              <a href="https://yoihibi.jp/item/UMEKUR.html" target="_blank">梅黒酢</a> …… 20ml<br>
              しょうゆ …… 20ml<br>
              玉ねぎのみじん切り …… 1/4個<br>
              生姜汁 …… 小さじ１
            </div>
          </div>
          <div class="recipe_box_each type3">
            <div class="recipe_box_each_cap">
              <b>【C】その他の材料</b>
            </div>
            <div class="recipe_box_each_box">
              きゅうり …… 1本<br>
              ゴーヤ …… 1/2本<br>
              ミニトマト …… 8個
            </div>
          </div>
    		</div>

    		<p class="recipe_cap">作り方</p>
    		<div class="recipe_box">
          <b>&#10102;</b>鍋に<span style="color:#985d1b;">【A】</span>を入れ、むね肉がかぶる程度の湯を入れ、中火にかける。<br>
    			<br>
          <b>&#10103;</b>沸騰したら弱火にして8～10分、むね肉に火が通ったら、火を止める。<br>
          <br>
          <b>&#10104;</b>鍋にふたをして、ゆで汁の中でそのまま冷ます。<br>
          <br>
          <b>&#10105;</b><span style="color:#eb70a7;">【B】</span>をすべて混ぜ合わせて、器に入れておく。<br>
          <br>
          <b>&#10106;</b>きゅうりは、スライサーで薄く切る。ゴーヤは、縦半分に切り、中の種やわたを取り、薄く切る。塩少々（分量外）を入れた湯でさっとゆで、氷水に取って水気を切る。<br>
          <br>
          <b>&#10107;</b>&#10104;のむね肉が十分に冷めたら、５mmくらいの厚さに切る。&#10106;をミニトマトとともに皿に盛りつけ、&#10105;をかけていただく。<br>
          <br>
          ＊ゆで汁の中で余熱を使って、ゆっくり冷ますと、とり肉がパサパサになりません。<br>
          ＊残ったゆで汁は、わかめスープにしたり、炊き込みご飯に使うと、余すことなく使うことができます。
    		</div>
    	</div>
    </div>
  </div>

  <div class="recipe_split">
    <a href="https://yoihibi.jp/item/1907TOKU.html" target="_blank">
      <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/etc2.png" class="spnone">
      <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/etc2_s.png" class="pcnone">
    </a>
  </div>

  <div class="recipe r_2">
    <div class="recipe_title">
      <div class="recipe_title_seal">気虚<br>タイプ</div>
      <span class="recipe_title_cap">“気”を補う食材を色鮮やかなどんぶりに</span>
      ゆで鶏と黒米の洋風どんぶり
      <span class="recipe_title_cap_bottom">トマトとレーズン入り薬膳梅黒酢かけ</span>
    </div>

    <div class="recipe_inner">
      <div class="recipe_img_area">
        <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/recipe_img_2.png">
      </div>

      <div class="recipe_area">
        <p class="recipe_cap">材料（2人分）</p>
        <div class="recipe_box" style="text-align:left;">
          <div class="recipe_box_each type1">
            <div class="recipe_box_each_cap">
              <b>【A】ゆで鶏</b>
            </div>
          </div>
          <div class="recipe_box_each type2">
            <div class="recipe_box_each_cap">
              <b>【B】梅黒酢たれ</b>
            </div>
          </div>
          <div class="recipe_box_each type3">
            <div class="recipe_box_each_cap">
              <b>【C】その他の材料</b>
            </div>
            <div class="recipe_box_each_box">
              米 …… １合<br>
              黒米 …… 大さじ１<br>
              枝豆（塩ゆで） …… 適量<br>
              ミニトマト …… ６個<br>
              レーズン …… 適量
            </div>
          </div>
        </div>

        <p class="recipe_cap">作り方</p>
        <div class="recipe_box">
          <b>&#10102;</b>釜に研いだ米、炊飯器の指定の水の量を入れた後に、黒米を入れ、黒米分の水（大さじ1）を追加する。<br>1～2時間程度浸け置き、普通に炊く。<br>
          <br>
          <b>&#10103;</b><span style="color:#985d1b;">【A】ゆで鶏</span>を食べやすい大きさに裂いておく。<br>
          <br>
          <b>&#10104;</b>レーズンと小さく刻んだミニトマトを、<span style="color:#eb70a7;">【B】梅黒酢たれ</span>に混ぜて、器に入れておく。<br>
          <br>
          <b>&#10105;</b>皿に炊きあがった①を盛り、&#10103;、枝豆を盛りつける。&#10104;のたれをかけていただく。<br>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="recipe r_3">
    <div class="recipe_title">
      <div class="recipe_title_seal">血虚<br>タイプ</div>
      <span class="recipe_title_cap">黒い食材で、不足しがちな“血”を補う</span>
      ゆで鶏の黒ごま薬膳梅黒酢かけ
      <span class="recipe_title_cap_bottom">黒きくらげのナムルを添えて</span>
    </div>

    <div class="recipe_inner">
      <div class="recipe_img_area">
        <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/recipe_img_3.png">
      </div>

      <div class="recipe_area">
        <p class="recipe_cap">材料（2人分）</p>
        <div class="recipe_box" style="text-align:left;">
          <div class="recipe_box_each type1">
            <div class="recipe_box_each_cap">
              <b>【A】ゆで鶏</b>
            </div>
          </div>
          <div class="recipe_box_each type2">
            <div class="recipe_box_each_cap">
              <b>【B】梅黒酢たれ</b>
            </div>
          </div>
          <div class="recipe_box_each type3">
            <div class="recipe_box_each_cap">
              <b>【C】その他の材料</b>
            </div>
            <div class="recipe_box_each_box">
              米 …… １合<br>
              黒米 …… 大さじ１<br>
              白ごま、黒ごま、練り黒ごま …… 適量<br>
              黒きくらげ（水に戻しておく） …… ６枚<br>
              ごま油 …… 小さじ１<br>
              塩、こしょう、白ごま …… 適量<br>
              にんにくのすりおろし …… 少々
            </div>
          </div>
        </div>

        <p class="recipe_cap">作り方</p>
        <div class="recipe_box">
          <b>&#10102;</b>黒米ごはんの炊き方は、「ゆで鶏と黒米の洋風どんぶり」の作り方&#10102;と同じ。<br>食べる時に、白ごまと黒ごまをかける。<br>
          <br>
          <b>&#10103;</b><span style="color:#985d1b;">【A】ゆで鶏</span>を、５mmくらいの厚さに切る。<br>
          <br>
          <b>&#10104;</b><span style="color:#eb70a7;">【B】梅黒酢たれ</span>の約半分量から同量（お好みの固さに調整する）の練り黒ごまを加えて、よく混ぜ合わせる。<br>
          <br>
          <b>&#10105;</b>黒きくらげを熱湯で軽く下ゆでし、水気を切って、食べやすい大きさに切る。ごま油、塩、こしょうで味付けし、お好みでおろしにんにくを加える。仕上げに白ごまをふりかける。<br>写真のように大きめの皿に盛り付けてもよいでしょう。<br>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="recipe r_4">
    <div class="recipe_title">
      <div class="recipe_title_seal">水毒<br>タイプ</div>
      <span class="recipe_title_cap">利尿効果があるとうもろこしがたっぷり</span>
      とうもろこしご飯とゆで鶏の<br>和のスパイス薬膳梅黒酢かけ
    </div>

    <div class="recipe_inner">
      <div class="recipe_img_area">
        <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1907RECI/recipe_img_4.png">
      </div>

      <div class="recipe_area">
        <p class="recipe_cap">材料（2人分）</p>
        <div class="recipe_box" style="text-align:left;">
          <div class="recipe_box_each type1">
            <div class="recipe_box_each_cap">
              <b>【A】ゆで鶏</b>
            </div>
          </div>
          <div class="recipe_box_each type2">
            <div class="recipe_box_each_cap">
              <b>【B】梅黒酢たれ</b>
            </div>
          </div>
          <div class="recipe_box_each type3">
            <div class="recipe_box_each_cap">
              <b>【C】その他の材料</b>
            </div>
            <div class="recipe_box_each_box">
              米 …… １合<br>
              生とうもろこし（実を切り出しておく） …… １本<br>
              <span style="color:#985d1b;">【A】</span>のゆで汁 …… 残っている分<br>
              パクチー（お好みで） …… 適量<br>
              とうもろこし（ゆでたもの） …… 適量<br>
              シソ、柚子胡椒 …… 適量<br>
              ミョウガ、パプリカ、ゴーヤ …… 適量<br>
              <br>
              ＊とうもろこしのひげを入れて炊くと、さらに利尿効果があります。<br>
            </div>
          </div>
        </div>

        <p class="recipe_cap">作り方</p>
        <div class="recipe_box">
          <b>&#10102;</b>ミョウガ、パプリカ、ゴーヤを食べやすい大きさに切り、『梅黒酢』に浸けてピクルスを作る。<br>
          <br>
          <b>&#10103;</b>釜に研いだ米、とうもろこし、<span style="color:#985d1b;">【A】</span>のゆで汁を入れて、炊飯器の指定の水の量を入れ、普通に炊く。炊きあがったら、一口サイズのおにぎりにして、お好みでパクチーを添える。<br>
          <br>
          <b>&#10104;</b><span style="color:#985d1b;">【A】ゆで鶏</span>を、５mmくらいの厚さに切る。<br>
          <br>
          <b>&#10105;</b><span style="color:#eb70a7;">【B】梅黒酢たれ</span>に、とうもろこし、シソ、柚子胡椒を加えて、混ぜ合わせる。<br>
          <br>
          ＊&#10103;を作る時に、<span style="color:#985d1b;">【A】ゆで鶏</span>の材料ととうもろこしを入れて炊くと、ゆで鶏ととうもろこしの炊き込みご飯が一度に出来上がります。
        </div>
      </div>
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
