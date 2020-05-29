<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}
.marker {
  background: -webkit-linear-gradient(transparent 90%, rgba(248, 184, 86, 0.9) 10%);
  background: -o-linear-gradient(transparent 90%, rgba(248, 184, 86, 0.9) 10%);
  background: linear-gradient(rgba(0, 0, 0, 0) 90%, rgba(248, 184, 86, 0.9) 10%);
}
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
.item_detail_ttl_name { border-color: #834d00!important;}
.intoroduction {text-align: left; margin: -20px 1% 60px; width: 98%; position: relative; padding: 2.5% 2% 2%; background: rgba(255, 255, 255, 0.9); color: #333; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; -moz-box-shadow: 0 0 20px rgba(238, 134, 162, 0.9); -webkit-box-shadow: 0 0 20px rgba(238, 134, 162, 0.9); box-shadow: 0 0 20px rgba(238, 134, 162, 0.9); display: block; overflow: hidden;}

h3.article_detail_contents_box__title { color: #834d00 !important; font-weight: bold; font-size: 140%; border: none !important; margin: 0 0 0 0;}
h3.article_detail_contents_box__title:before { content: ''; display: inline-block; width:30px; height:30px; vertical-align: middle; position: relative; top: -4px; padding: 0 15px 0 0; background: url('<?php echo $Path ?>h2_before.png') no-repeat; background-size:contain;}

span.item_detail_feature_title,
h3.article_detail_contents_box__title {color:#834d00 !important;}


#free_img1 {display: block; overflow: hidden; margin:0 auto 50px;}
#free_img1 img { width: 100%; padding: 0 0 0 0 !important; margin: 0 auto !important;}

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

.qa_area { background: #fffcf4; padding: 24px 16px 16px; margin: 16px 0 32px 0}
.qa_area_title {}
.qa_area_title_img {padding: 0 16px 16px 0;}
.qa_area_title_copy {padding: 0 8px 0 16px; color: #0f748a; font-weight: bold; display: flex; flex-direction: column; justify-content: center; align-items: center;}
.qa_area_title_copy span { text-align: justify;}

.qa_area_contents_box {display: flex; flex-wrap: wrap; margin: 0; padding: 0;}
.qa_area_contents_box_inner { border-top: 12px solid #0f748a; border-bottom: 4px solid #0f748a; display: block; margin: 16px; padding: 0; box-sizing: border-box; border-radius: 10px 10px 0 0;}
.qa_area_contents_box_q::before { display: inline-block; content: 'Q'; color: #fff; background: #0f748a; width: 30px; height: 30px; text-align: center; border-radius: 50%; margin: 0 0 0 4px; padding: 0 0 0 0;}
.qa_area_contents_box_q { color: #0f748a; font-weight: bold; font-size: 20px; border-bottom: 1px solid #0f748a; padding: 12px 0 8px;}
.qa_area_contents_box_a {display: flex; align-items: center; border-bottom: 1px solid #0f748a; padding: 8px 0 4px; }
.qa_area_contents_box_a .cap {display: flex; flex-direction: column; justify-content: center; align-items: center; font-size: 20px; color: #fff; background: #ea5532; width: 30px; height: 30px; text-align: center; border-radius: 50%; margin: 0 0 0 4px; padding: 0 0 0 0;}
.qa_area_contents_box_a .attl {font-size: 16px; margin: 0 0 0 8px;}
.qa_area_contents_box_comment { padding: 16px 8px; text-align: justify; font-size: 14px; letter-spacing: 1px;}
.qa_area_contents_box_comment s { color: #ea5532; text-decoration: none; border: 0;}

.feature_summary_stuff { background: url('https://yoihibi.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1806/3back.jpg') no-repeat; background-size: 100%; padding: 20px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; position: relative; margin:30px 0 0 0;}
.feature_summary_stuff p { background: #ffffff; padding:15px; -moz-box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); -webkit-box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); width: 90%; line-height: 1.8;}
.feature_summary_stuff p span { border-bottom: 1px dashed #999999; margin: 0 0 5px 0;}
.feature_summary_stuff .staff { width: 158px; height: 169px; position: absolute; display: block; overflow: hidden; bottom: -20px; right: -20px; }
.feature_summary_stuff .staff img { width: 100%; }

.kihonnoki_jas_memo_top {font-size:20px; color: #41a03c; margin:50px 0 0 15px !important; font-style: italic; padding: 0 !important; font-weight: bold;}
.kihonnoki_jas_memo {border-radius:20px; border: 3px solid #41a03c; padding: 20px; margin:-5px 0 0 0;}

@media screen and (max-width: 767px) {
.spnone {display:none!important;}
.pcnone {display:block!important;}
.item_list_box { clear: both; display: block; overflow: hidden; padding-bottom: 16px}
.item_list_box .img_box {margin-right: 16px;}
#itemDetail .price { font-size: 16px;}

.intoroduction { margin: 20px 2% 20px; width: auto; font-size: 14px; padding: 10px;}

.qa_area {padding: 24px 8px 16px; margin: 16px 0 32px}
.qa_area_contents_box_inner { border-top: 12px solid #0f748a; border-bottom: 4px solid #0f748a; display: block; margin: 16px 0; padding: 0; box-sizing: border-box; border-radius: 10px 10px 0 0;}
.qa_area_title_copy {padding: 0 8px 0 16px;}
.l-1 {width:100%; margin-right:0;}
.r-1 {width:100%; margin-top:0;}

.feature_summary_matome { padding: 10px 20px 10px;}
.feature_summary_matome .matome_cap {font-size: 32px;}
.feature_summary_matome .matome_disp {font-size: 20px;}
.feature_summary_matome .matome { font-size: 14px;}

.feature_summary_stuff { padding: 20px 20px 110px; background: url('https://yoihibi.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1806/3back.jpg') no-repeat; background-size: 200%;}
.feature_summary_stuff .staff { bottom: -36px;}
.feature_summary_stuff p { width: 88%; text-align: justify;}
.feature_summary_stuff .staff img { width: 90%; }

.article_detail_text {display: block; margin: 16px 0 0 0;}
.article_detail_mokuji{margin: 0 0 100px;}
.article_detail_mokuji p img{width: 100%; margin: 40px 0;}
.article_detail_mokuji ul{margin: 0 0 0 30px; display: block;}
.article_detail_mokuji ul li{color: #348669; text-decoration: underline; font-weight: bold; margin: 0 0 20px;}
.article_detail_mokuji ul li {list-style-type: none;}
.article_detail_mokuji ul li::before {position: relative; top: -2px; left: -18px; display: inline-block; width: 6px; height: 6px; content: ''; border-radius: 100%; background: #348669;}
}
</style>


<img src="<?php echo $Path ?>title.png" width="100%;" style="margin: 0 0 50px 0;" class="spnone">
<img src="<?php echo $Path ?>title_s.png" width="100%;" style="margin: 0 0 0 0;" class="pcnone">

<div class="article_detail_text">
  <p>　以前の会報誌「こんにちは」（２０１６年11月号Vol.41）でお伝えした「免疫力」の内容を２０２０年版に更新。国内外の栄養療法に詳しい氏家京子さんに最新情報を交えながら、食生活で免疫力を高める方法などを教えていただきます。</p>
</div>

<div class="article_detail_mokuji">
  <p><img src="//d2mxjn1ymx4y84.cloudfront.net/client_info/FLORAHOUSE01/itemimage/1811OGAT/yomimono_mokuji.png" alt=""></p>
  <ul>
    <a href="#toku-ttl1"><li>免疫力とは、何ですか？</li></a>
    <a href="#toku-ttl2"><li>「新型コロナウイルス」が手強い理由</li></a>
    <a href="#toku-ttl3"><li>謎の多いウイルスという存在</li></a>
    <a href="#toku-ttl4"><li>免疫と再生の仕組みが回復力に影響する</li></a>
    <a href="#toku-ttl5"><li>免疫力と再生力を下げてしまうものとは？</li></a>
    <a href="#toku-ttl6"><li>免疫力を強化する栄養成分</li></a>
    <a href="#toku-ttl7"><li>免疫力Q&A</li></a>
    <a href="#toku-ttl0"><li>氏家京子（うじいえ・きょうこ）さん</li></a>
  </ul>
</div>
