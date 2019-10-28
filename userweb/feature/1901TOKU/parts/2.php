<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}
.marker {
  background: -webkit-linear-gradient(transparent 90%, rgba(226, 132, 0, 0.9) 10%);
  background: -o-linear-gradient(transparent 90%, rgba(226, 132, 0, 0.9) 10%);
  background: linear-gradient(rgba(0, 0, 0, 0) 90%, rgba(226, 132, 0, 0.9) 10%);
}
.fl-box {display: flex; flex-wrap: wrap; justify-content: space-around;}
.fl-l {display: block;}
.fl-r {display: block;}
.item_list_wrap_camp { clear: both; border-top: 1px solid #b94054; margin: 60px 0 0 0; display: block; overflow: hidden;}
.item_list_box .img_box {margin-right: 10px;}
.article_prof { margin: 16px 0;}
.article_prof .fl-box {}
.article_prof_name {display: block; overflow: hidden; font-size: 24px; margin: 8px 0;}
.article_prof_name small {}
.article_prof_disp {display: block; overflow: hidden; font-size: 16px; line-height: 1.8; margin: 16px 0 0 8px;}
.article_prof_img {}
.article_prof_img img {}
.intoroduction {text-align: justify; margin: -20px 1% 60px; width: 98%; position: relative; padding: 2.5% 2% 2%; background: rgba(255, 255, 255, 0.9); color: #333; border-radius: 10px; -moz-box-shadow: 0 0 20px rgba(183, 41, 20, 0.9); -webkit-box-shadow: 0 0 20px rgba(183, 41, 20, 0.9); box-shadow: 0 0 20px rgba(183, 41, 20, 0.9); display: block; overflow: hidden;}

#itemDetail .price { font-size: 18px;}
s { text-decoration: none; display: inline; border-bottom: 3px solid #b94054; line-height: auto;}
.article_detail_info {width: 100%!important;}
.item_detail_ttl_name { border-color: #b94054!important;}

h3.article_detail_contents_box__title { color: #b94054 !important; font-weight: bold; font-size: 140%; border: none !important; margin: 0 0 0 0;}
h3.article_detail_contents_box__title:before { content: ''; display: inline-block; width:30px; height:30px; vertical-align: middle; position: relative; top: -4px; padding: 0 15px 0 0; background: url(https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1901TOKU/h2_before.png) no-repeat; background-size:contain;}
span.item_detail_feature_title,
h3.article_detail_contents_box__title {color:#b94054 !important;}

.feature_etc { background: #f2eeed; display: block; overflow: hidden; border-radius: 8px; padding: 24px;}
.feature_etc_title { font-size: 24px; display: inline-block; font-weight: bold;
  background: -webkit-linear-gradient(transparent 60%, rgba(222, 193, 89, 0.8) 40%);
  background: -o-linear-gradient(transparent 60%, rgba(222, 193, 89, 0.8) 40%);
  background: linear-gradient(rgba(0, 0, 0, 0) 60%, rgba(222, 193, 89, 0.8) 40%);
  margin-bottom: 16px;
}
.feature_etc_cap { color: #b94054; font-weight: bold; font-size: 18px; border-bottom: 1px dashed #333; padding: 0 0 8px;}
.feature_etc_article { display: block; overflow: hidden; margin: 16px 0 0;}
.feature_etc_article .fl-box { justify-content: space-between;}
.feature_etc_article .fl-box .fl-l ol { margin: 16px;}
.feature_etc_article .fl-box .fl-l ol li { line-height: 1.8;}
.feature_etc_article .fl-box .fl-l ol:last-child li:last-child { text-align: right;}

.feature_summary_matome { padding: 20px 20px 10px; border: 6px solid #d1cbc1; -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0; display: block; overflow: hidden; }
.feature_summary_matome .matome_cap_area { text-align: center; padding: 0 0 0 0!important; margin: 0 0 24px 0!important; border-bottom: 6px double #e17a00;}
.feature_summary_matome .matome_cap {padding: 0 0 0 0!important; margin: 0 0 0 0!important; font-size: 36px; font-weight: bold; letter-spacing: 10px; display: block;color: #e17a00;}
.feature_summary_matome .matome_disp {padding: 0 0 0 0!important; margin: 0 0 10px 0!important; display: block; font-size: 22px;color: #e17a00;}
.feature_summary_matome .matome { font-size: 18px; line-height: 1.6; padding-bottom: 10px;}
.feature_summary_matome .matome b { color: #e17a00;}

.feature_source { display: block; width: 100%; overflow: hidden; margin: 72px 0 0; padding: 16px; border: 1px solid #777;}
.feature_source ol {}
.feature_source ol li { line-height: 1.8;}
.feature_source ol li b:before { content: '＊';}
.feature_source ol li b:after { content: '：';}
.feature_source ol li a { text-decoration: underline; color: #ff0000; padding-left: 8px;}
.feature_source ol li a:hover { text-decoration: none; color: #ff0000;}

.feature_summary_stuff { background: url(https://yoihibi.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1806/3back.jpg) no-repeat; background-size: 100%; padding: 20px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; position: relative; margin:30px 0 0 0;}
.feature_summary_stuff p { background: #ffffff; padding:15px; -moz-box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); -webkit-box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); width: 90%; line-height: 1.8;}
.feature_summary_stuff p span { border-bottom: 1px dashed #999999; margin: 0 0 5px 0;}
.feature_summary_stuff .staff { width: 158px; height: 169px; position: absolute; display: block; overflow: hidden; bottom: -20px; right: -20px; }
.feature_summary_stuff .staff img { width: 100%; }

.feature_recipe {background: #f5f2e9; position: relative; width: 100%; display: block; padding: 24px; border-top: 24px solid #ed7e8d;}
.feature_recipe_head_cap { width: 190px; position: absolute; top: -44px; left: -40px;}
.feature_recipe_head_cap img { width: 100%;}
.feature_recipe_head {display: block; margin-left: 160px; line-height: 1.8; text-align: justify; margin-bottom: 40px;}
.feature_recipe_title {font-size: 24px; display: inline-block; letter-spacing: 2px; border: 1px solid #ccc; padding: 8px 16px 4px 56px; background: rgba(255,231,158,0.8); position: relative;}
.feature_recipe_title_cap {width: 72px; height: 72px; text-align: center; position: absolute; top: -16px; left: -24px; background: #fff; border-radius: 50%; font-size: 14px; line-height: 1.2; border: 1px solid #ed7e8d; padding-top: 20px; letter-spacing: 0; font-weight: bold;}
.feature_recipe_main.fl-box { justify-content: space-between;}
.feature_recipe_ingredients_title {display: inline-block; padding:8px 16px 4px; font-size: 16px; font-weight: bold; margin: 24px 0 0; background: #67af28; letter-spacing: 2px; border: 1px solid #fff; color: #fff;}
.feature_recipe_ingredients_title small { padding-left: 16px;}
.feature_recipe_ingredients { display: block; padding: 16px; line-height: 1.8; margin-right: 0;}
.feature_recipe_ingredients b { color: #67af28; font-size: 120%;}
.feature_recipe_main.fl-box .fl-l { width: 50%;}
.feature_recipe_main.fl-box .fl-r { width: 50%; position: relative;}
.free_img_top {padding: 16px 0 0 0;}
.feature_recipe_main.fl-box .fl-l img,
.feature_recipe_main.fl-box .fl-r img { width: 100%;}


@media screen and (max-width: 767px) {
.spnone {display:none!important;}
.pcnone {display:block!important;}
.item_list_box { clear: both; display: block; overflow: hidden; padding-bottom: 16px}
.item_list_box .img_box {margin-right: 16px;}
#itemDetail .price { font-size: 16px;}

.article_prof { margin: 16px 0;}
.article_prof.fl-box {flex-direction: column-reverse;}
.article_prof_name {font-size: 16px; margin: 8px; font-weight: bold;}
.article_prof_name small { font-size: 80%;}
.article_prof_disp {font-size: 14px; line-height: 1.6; margin: 8px 8px 0;}
.article_prof_img {text-align: center; margin: 0 auto; margin-bottom: 16px;}
.intoroduction { margin: 16px 2% 32px; width: auto; font-size: 14px; padding: 16px; }

.article_detail_contents_box .article_detail_contents_box__title { margin: 0 0 0 0!important;}

.feature_etc {border-radius: 4px; padding: 16px; margin-top: 16px;}
.feature_etc_title { font-size: 18px; display: block; font-weight: bold; text-align: center;}
.feature_etc_cap {font-size: 16px;}
.feature_etc_article .fl-box { display: block; width: 96%; margin: 2% 0;}
.feature_etc_article .fl-box .fl-l ol { margin: 16px auto 0;}
.feature_etc_article .fl-box .fl-l ol li { line-height: 1.2; margin: 0 0 8px;}
.feature_etc_article .fl-box .fl-l ol:last-child li:last-child { text-align: right;}

.feature_summary_matome { padding: 10px 20px 10px;}
.feature_summary_matome .matome_cap {font-size: 32px;}
.feature_summary_matome .matome_disp {font-size: 20px;}
.feature_summary_matome .matome { font-size: 14px;}

.feature_source {margin: 40px 0 0; padding: 0;}
.feature_source ol {padding: 16px;}
.feature_source ol li { line-height: 1.2; font-size: 12px; margin-bottom: 16px;}
.feature_source ol li a { padding-left: 0;}
.feature_source ol li:last-child {margin-bottom: 0;}

.feature_summary_stuff { padding: 20px 20px 110px; background: url(https://yoihibi.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1806/3back.jpg) no-repeat; background-size: 200%;}
.feature_summary_stuff .staff { bottom: -36px;}
.feature_summary_stuff p { width: 88%; text-align: justify;}
.feature_summary_stuff .staff img { width: 90%;}

.feature_recipe {width: 100%; padding: 0; border-top: 8px solid #ed7e8d;}
.feature_recipe_head_cap { width: 240px; height: 240px; position: absolute; top: -24px; left: 50%; margin-left: -120px}
.feature_recipe_head {margin-left: 0; margin-top: 220px;line-height: 1.6; padding: 16px; margin-bottom: 16px;}
.feature_recipe_title {font-size: 16px; display: inline-block; letter-spacing: 1px; padding: 8px 5px 4px 56px;}
.feature_recipe_title_cap {width: 72px; height: 52px; text-align: center; position: absolute; top: -8px; left: -16px; font-size: 14px; line-height: 1.2;}

.feature_recipe_main.fl-box { display: block;}
.feature_recipe_main.fl-box .fl-l { width: 100%;}
.feature_recipe_main.fl-box .fl-r { width: 100%;}

.feature_recipe_ingredients_title {display:block; padding:8px 8px 4px; font-size: 16px; font-weight: bold; margin: 16px 0 0; text-align: center; background: #67af28; letter-spacing: 1px;}
.feature_recipe_ingredients_title small { font-size: 90%;}
.feature_recipe_ingredients { display: block; padding: 12px; line-height: 1.6; margin-right: 0;}
.feature_recipe_ingredients b { color: #67af28; font-size: 120%;}
.free_img_top {padding: 16px 0 0 0;}
.feature_recipe_main.fl-box .fl-l img,
.feature_recipe_main.fl-box .fl-r img { width: 100%;}
}
</style>


<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1901TOKU/title.png" width="100%;" style="margin: 0 0 50px 0;" class="spnone">
<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1901TOKU/title_s.png" width="100%;" style="margin: 0 0 0 0;" class="pcnone">

<div class="intoroduction">
　年齢を重ねると集中力が続かない、うっかりが増えた、感情のコントロールができない、などのお悩みを抱える方が増えてくると思います。このような脳機能の低下には、「必須脂肪酸」の働きが大きく関わっています。脳における「必須脂肪酸」の役割について、氏家京子さんにご寄稿いただきました。
</div>
