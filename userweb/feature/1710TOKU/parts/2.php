<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}
.marker {
  background: -webkit-linear-gradient(transparent 90%, rgba(246, 174, 84, 0.9) 10%);
  background: -o-linear-gradient(transparent 90%, rgba(246, 174, 84, 0.9) 10%);
  background: linear-gradient(rgba(0, 0, 0, 0) 90%, rgba(246, 174, 84, 0.9) 10%);
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
.item_detail_ttl_name { border-color: #2e863f!important;}
.intoroduction {text-align: left; margin: -20px 1% 60px; width: 98%; position: relative; padding: 2.5% 2% 2%; background: rgba(255, 255, 255, 0.9); color: #333; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; -moz-box-shadow: 0 0 20px rgba(216, 188, 154, 0.9); -webkit-box-shadow: 0 0 20px rgba(216, 188, 154, 0.9); box-shadow: 0 0 20px rgba(216, 188, 154, 0.9); display: block; overflow: hidden;}

h3.article_detail_contents_box__title { color: #2e863f !important; font-weight: bold; font-size: 140%; border: none !important; margin: 0 0 0 0;}
h3.article_detail_contents_box__title:before { content: ''; display: inline-block; width:30px; height:30px; vertical-align: middle; position: relative; top: -4px; padding: 0 15px 0 0; background: url(https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1710TOKU/h2_before.png) no-repeat; background-size:contain;}

span.item_detail_feature_title,
h3.article_detail_contents_box__title {color:#2e863f !important;}


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

.kihonnoki_jas_memo {border-radius:20px; border: 3px solid #41a03c; padding: 20px; margin:-5px 0 0 0;}

.feature_summary_stuff { background: url(https://yoihibi.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1806/3back.jpg) no-repeat; background-size: 100%; padding: 20px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; position: relative; margin:30px 0 0 0;}
.feature_summary_stuff p { background: #ffffff; padding:15px; -moz-box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); -webkit-box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); box-shadow: 3px 3px 3px rgba(153, 153, 153, 0.5); width: 90%; line-height: 1.8;}
.feature_summary_stuff p span { border-bottom: 1px dashed #999999; margin: 0 0 5px 0;}
.feature_summary_stuff .staff { width: 158px; height: 169px; position: absolute; display: block; overflow: hidden; bottom: -20px; right: -20px; }
.feature_summary_stuff .staff img { width: 100%; }

@media screen and (max-width: 767px) {
.spnone {display:none!important;}
.pcnone {display:block!important;}
.item_list_box { clear: both; display: block; overflow: hidden; padding-bottom: 16px}
.item_list_box .img_box {margin-right: 16px;}
#itemDetail .price { font-size: 16px;}

.intoroduction { margin: 20px 2% 20px; width: auto; font-size: 14px; padding: 10px;}

.l-1 {width:100%; margin-right:0;}
.r-1 {width:100%; margin-top:0;}

.feature_summary_matome { padding: 10px 20px 10px;}
.feature_summary_matome .matome_cap {font-size: 32px;}
.feature_summary_matome .matome_disp {font-size: 20px;}
.feature_summary_matome .matome { font-size: 14px;}

.feature_summary_stuff { padding: 20px 20px 110px; background: url(https://yoihibi.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1806/3back.jpg) no-repeat; background-size: 200%;}
.feature_summary_stuff .staff { bottom: -36px;}
.feature_summary_stuff p { width: 88%; text-align: justify;}
.feature_summary_stuff .staff img { width: 90%; }
}
</style>


<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1710TOKU/title.png" width="100%;" style="margin: 0 0 50px 0;" class="spnone">
<img src="https://aladdinec.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1710TOKU/title_s.png" width="100%;" style="margin: 0 0 0 0;" class="pcnone">

<div class="intoroduction">
　よい日々ショップでは、「有機JASマーク」が付いている食品をいくつか販売していますが、このマークを付けるためには、国が定めたルールが守られているか第三者機関の厳しい検査を受け、合格しなければなりません。その検査をされているのが、今回初めてご登場いただいた、オーガニック検査員の森山靖子さんです。<br>
　オーガニック検査員として15年以上の経験を持つ森山さんに、オーガニックの魅力についてお話しいただきました。
</div>