<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}
.item_list_wrap_camp { clear: both; border-top: 1px solid #358669; margin: 60px 0 0 0; display: block; overflow: hidden;}
.item_list_box .img_box {margin-right: 10px;}
#itemDetail .price { font-size: 18px;}

.kiji_prof_area {
    padding: 20px;
    line-height: 1.8;
    display: block;
    overflow: hidden;
    clear: both;
}

.kiji_prof_disp {
    padding: 0 20px 0 0;
    display: block;
    overflow: hidden;
    float: left;
    width: 75%;
}

.kiji_prof_disp span {
    font-size: 140%;
}

.kiji_prof_img {
    padding: 0;
    display: block;
    overflow: hidden;
    float: right;
    width: 25%;
    margin: 0 auto;
    text-align: right;
}

s { text-decoration: none; display: inline; border-bottom: 3px solid #32a83b; line-height: auto;}

.article_detail_info {width: 100%!important;}
.item_detail_ttl_name { border-color: #22b2e9!important;}
.intoroduction {text-align: left; margin: -20px 1% 60px; width: 98%; position: relative; padding: 2.5% 2% 2%; background: rgba(255, 255, 255, 0.9); color: #333; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; -moz-box-shadow: 0 0 20px rgba(170, 208, 221, 1.0); -webkit-box-shadow: 0 0 20px rgba(170, 208, 221, 1.0); box-shadow: 0 0 20px rgba(170, 208, 221, 1.0); display: block; overflow: hidden;}

h3.article_detail_contents_box__title { color: #22b2e9 !important; font-weight: bold; font-size: 140%; border: none !important; margin: 0 0 0 0;}
h3.article_detail_contents_box__title:before { content: ''; display: inline-block; width:30px; height:30px; vertical-align: middle; position: relative; top: -4px; padding: 0 15px 0 0; background: url(https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/h2_before.png) no-repeat; background-size:contain;}

span.item_detail_feature_title,
h3.article_detail_contents_box__title {color:#22b2e9 !important;}

.free_img1 {display: block; overflow: hidden; margin:0 auto 50px; text-align: center;}
.free_img1 img {padding: 0 0 0 0!important; margin: 0 auto!important;}

.feature_summary_matome { padding: 20px 20px 10px; border: 6px solid #d1cbc1; -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0; display: block; overflow: hidden; }
.feature_summary_matome .matome_cap_area { text-align: center; padding: 0 0 0 0!important; margin: 0 0 24px 0!important; border-bottom: 6px double #e17a00;}
.feature_summary_matome .matome_cap {padding: 0 0 0 0!important; margin: 0 0 0 0!important; font-size: 36px; font-weight: bold; letter-spacing: 10px; display: block;color: #e17a00;}
.feature_summary_matome .matome_disp {padding: 0 0 0 0!important; margin: 0 0 10px 0!important; display: block; font-size: 22px;color: #e17a00;}
.feature_summary_matome .matome { font-size: 18px; line-height: 1.6; padding-bottom: 10px;}
.feature_summary_matome .matome b { color: #e17a00; }

.fl-box {display: flex; flex-wrap: wrap; justify-content: space-around; box-sizing: border-box;}
.fl-l {display: block; box-sizing: border-box;}
.fl-r {display: block; box-sizing: border-box;}
.l-1 {width:50%; margin-right:0;}
.l-1 img { width: 100%;}
.r-1 {width:50%; margin-right:0;}

.qa_box {width: 100%; display: block; margin: 0 0 40px 0;}
.qa_box-q::before { content: 'Q.'; font-size: 24px;}
.qa_box-q {width: 100%; padding: 8px 16px; font-size: 20px; display: block; border-radius: 24px; background: #22b2e9!important; color: #fff; font-weight: bold; box-sizing: border-box; text-align: justify;}
.qa_box-a {width: 100%; margin: 10px 0; overflow: hidden;}
.qa_box-a .faceicon {float: left; margin-right: -100px; width: 91px;}
.qa_box-a .faceicon img {width: 100%; height: auto;}
.qa_box-a .chatting {width: 100%; text-align: left;}
.says {display: inline-block; position: relative; margin: 0 0 0 100px; padding: 16px; max-width: 100%; border-radius: 12px; background: #f3f3ea;}
.says:after {content: ""; display: inline-block; position: absolute; top: 3px; left: -19px; border: 8px solid transparent; border-right: 18px solid #f3f3ea; -webkit-transform: rotate(35deg); transform: rotate(35deg);}
.says p {margin: 0; padding: 0; text-align: justify;}

.etc_box {display: flex; flex-wrap: wrap; justify-content: space-around; box-sizing: border-box; margin: 24px 0 56px; border-radius: 20px; background: #edf7fd; padding: 24px 16px 24px 24px;}
.etc_box-l {width: 560px; display: block;}
.etc_box-cap { font-size: 20px; font-weight: bold; display: block; margin: 0 0 8px 0; padding: 0 0 0 0;}
.etc_box-txt {}
.etc_box-r {width: 300px; display: block;}
.etc_box-r img { width: 100%; display: block;}

/*おすすめ商品*/
.camp_stock_area {box-sizing: border-box; width: 100%; clear: both; display: block; margin: 20px 0 0 0; padding: 10px; background: #E9EDDA; border: 1px solid #ddd; overflow: hidden; border-radius: 10px;}
.camp_stock { width: 25%; float: left;}
.camp_stock_img { border: 1px solid #ddd; width: 90%; margin: 10px auto 0; height: 180px; display: block; overflow: hidden; text-align: center; background: #fff;}
.camp_stock_img img { width: auto; height: 100%; text-align: center;}
.camp_stock_txt { display: block; overflow: hidden; height: 4.5em; margin: 0 auto 0; padding: 10px 0; width: 85%; font-size: 14px; color: #034d8e; font-weight: bold; text-align: justify;}
.camp_stock a:hover { opacity: 0.6;}

@media screen and (max-width: 767px) {
.spnone {display:none!important;}
.pcnone {display:block!important;}
.item_list_box { clear: both; display: block; overflow: hidden; padding-bottom: 16px}
.item_list_box .img_box {margin-right: 16px;}
#itemDetail .price { font-size: 16px;}

.intoroduction { margin: 20px 2% 20px; width: auto; font-size: 14px; padding: 10px;}

.l-1 {width:100%; margin-right:0;}
.r-1 {width:100%; margin-top:0;}

/*おすすめ商品*/
.camp_stock { width: 50%!important;}
.camp_stock_img {height: 100px;}
.camp_stock_txt {font-size: 12px; padding: 0 0 10px 0; height: 2.5em;}
}
</style>


<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/title.png" width="100%;" style="margin: 0 0 50px 0;" class="spnone">
<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/title_s.png" width="100%;" style="margin: 0 0 0 0;" class="pcnone">

<div class="intoroduction">
『フロー・エッセンス＋』のドライを煎じたり、リキッドを割ったりするときにおすすめしている『月のしずく』。たくさん種類があるミネラルウォーターの中から、「これしかない！」と厳選しました。<br>
『月のしずく』のお水のチカラと特徴を、販売元である株式会社重岡の永島美奈子さんに、あらためてお聞きしました。
</div>


<div class="qa_box">
  <div class="qa_box-q">
    『月のしずく』はどのような特徴がある「お水」ですか？
  </div>
  <div class="qa_box-a">
    <div class="faceicon">
     <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/faceicon.png">
    </div>
    <div class="chatting">
      <div class="says">
       <p>ミネラルウォーター『月のしずく』は、天然温泉施設「ゆの里」に湧く地下水（「金水」と呼んでいます）と、地下1,187メートルから湧く温泉水（「銀水」と呼んでいます）の２つのお水をミックスして作られたものです。<br>
       『ミネラルウォーター完全ガイド』（松下和弘著・大和書房）で、「健康にいい水」として、最高の五つ星の評価をいただきました。理学博士の松下先生がおっしゃる「いい水」の条件とは、水の分子が小さく、油脂分を溶かす界面活性力があること、そして酵素活性力が高いことです。</p>
      </div>
    </div>
  </div>
</div>

<div class="free_img1">
  <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/img0.png" class="spnone">
  <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/img0_sp.png" class="pcnone">
</div>

<div class="qa_box">
  <div class="qa_box-q">
    おすすめの飲み方を教えてください。
  </div>
  <div class="qa_box-a">
    <div class="faceicon">
     <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/faceicon.png">
    </div>
    <div class="chatting">
      <div class="says">
       <p>一般的なミネラルウォーターの飲み方と変わりませんが、大事なことは、量ではなく継続して小まめに飲み続けること。たくさんの量を飲む日と、まったく飲まない日があるという飲み方ではなく、少量でもいいので、朝昼晩と毎日飲み続けることをおすすめしています。また、お薬をお飲みになる時はぜひ『月のしずく』でと、アドバイスしています。</p>
      </div>
    </div>
  </div>
</div>

<div class="etc_box">
  <div class="etc_box-l">
    <div class="etc_box-cap">世界が注目！『月のしずく』の不思議なチカラ</div>
    <div class="etc_box-txt">
      現在、神戸大学と共同研究で、“アクアフォトミクス”という新しい科学の概念で『月のしずく』を解析しています。これまでの「いい水」の条件を超えた、「新しいお水」の可能性が見えてきているところです。不思議に思っていた体験が、パズルのピースが埋まるように、具体的な科学の裏づけがあるものとして見えてきています。<br>
      <br>
      <small>※画像は「ゆの里」のお水の分子構造をイメージして創られた立体模型</small>
    </div>
  </div>
  <div class="etc_box-r">
    <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/img2.png">
  </div>
</div>

<div class="qa_box">
  <div class="qa_box-q">
    どんな体験談が寄せられていますか？
  </div>
  <div class="qa_box-a">
    <div class="faceicon">
     <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/faceicon.png">
    </div>
    <div class="chatting">
      <div class="says">
       <p>発売されて20年以上になりますが、健康維持や未病対策のほか、病気の方の愛飲者もたくさんいらっしゃいます。さまざまな体験談をいただき、数えられないくらいです。面白い体験としては、『月のしずく』を飲むようになって、イライラしなくなったとか、前向きになったという方も多いですね。</p>
      </div>
    </div>
  </div>
</div>

<div class="qa_box">
  <div class="qa_box-q">
    『フロー・エッセンス＋』との相性がとてもいいですよね？
  </div>
  <div class="qa_box-a">
    <div class="faceicon">
     <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/faceicon.png">
    </div>
    <div class="chatting">
      <div class="says">
       <p>「そのもの」を引き出す力が非常に強いので、『フロー・エッセンス+』を煎じると、ほかのミネラルウォーターより色濃く抽出できるはずです。さまざまなハーブのバランスの良さがある『フロー・エッセンス＋』を引き出す、最高の「お水」だと思います。</p>
      </div>
    </div>
  </div>
</div>

<div class="etc_box">
  <div class="etc_box-l">
    <div class="etc_box-cap">天然温泉施設「ゆの里」は、創業30周年です。</div>
    <div class="etc_box-txt">
      「ゆの里」は和歌山県橋本市神野々（神野々は、「このの」と読みます）にある地上４階建ての温泉施設です。施設の正面からは高野山が見え、宿泊施設「このの」も併設。開業当時から、お肌に悩みがある方を中心に評判になり、いまでは、日本全国のみならず海外からもお客様がいらっしゃいます。<br>
      「心とからだの健康」をテーマに、温泉・宿泊、無農薬での野菜栽培、手作り加工食品などを展開。「ゆの里」を一つのワールドと捉え、それぞれの有機的なつながりを目指しています。
    </div>
  </div>
  <div class="etc_box-r">
    <img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1706TOKU/img1.jpg">
  </div>
</div>

<div class="camp_stock_area">

  <div class="camp_stock"><a href="https://yoihibi.jp/item/TUKINO.html" target="_blank">
  <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/syouhin/tukino.jpg"></p>
  <p class="camp_stock_txt">月のしずく</p>
  </a></div>

  <div class="camp_stock"><a href="https://yoihibi.jp/item/FLOREL.html" target="_blank">
  <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/syouhin/florel.jpg"></p>
  <p class="camp_stock_txt">フロー・エッセンス＋ リキッド</p>
  </a></div>

  <div class="camp_stock"><a href="https://yoihibi.jp/item/FLORED.html" target="_blank">
  <p class="camp_stock_img"><img src="https://dbcn1bdvswqbx.cloudfront.net/client_info/FLORAHOUSE01/itemimage/syouhin/flored.jpg"></p>
  <p class="camp_stock_txt">フロー・エッセンス＋ ドライ</p>
  </a></div>

</div>
