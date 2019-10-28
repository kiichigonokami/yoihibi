<style>
.spnone {display:block!important;}
.pcnone {display:none!important;}
.marker {
  background: -webkit-linear-gradient(transparent 90%, rgba(223, 130, 169, 0.9) 10%);
  background: -o-linear-gradient(transparent 90%, rgba(223, 130, 169, 0.9) 10%);
  background: linear-gradient(rgba(0, 0, 0, 0) 90%, rgba(223, 130, 169, 0.9) 10%);
}
.fl-box {display: flex; flex-wrap: wrap; justify-content: space-around;}
.fl-l {display: block;}
.fl-r {display: block;}
.item_list_wrap_camp { clear: both; border-top: 1px solid #5e9634; margin: 60px 0 0 0; display: block; overflow: hidden;}
.item_list_box .img_box {margin-right: 10px;}
.article_prof { margin: 16px 0;}
.article_prof .fl-box {}
.article_prof .fl-l {width: 70%;}
.article_prof .fl-r {width: 30%; text-align: center;}
.article_prof_name {display: block; overflow: hidden; font-size: 24px; margin: 8px 0;}
.article_prof_name small {}
.article_prof_disp {display: block; overflow: hidden; font-size: 16px; line-height: 1.8; margin: 16px 0 0 8px;}
.article_prof_img {}
.article_prof_img img {}
.intoroduction {text-align: justify; margin: -20px 1% 60px; width: 98%; position: relative; padding: 2.5% 2% 2%; background: rgba(255, 255, 255, 0.9); color: #333; border-radius: 10px; -moz-box-shadow: 0 0 20px rgba(94, 150, 52, 0.9); -webkit-box-shadow: 0 0 20px rgba(94, 150, 52, 0.9); box-shadow: 0 0 20px rgba(94, 150, 52, 0.9); display: block; overflow: hidden;}

#itemDetail .price { font-size: 18px;}
s { text-decoration: none; display: inline; border-bottom: 3px solid #5e9634; line-height: auto;}
.article_detail_info {width: 100%!important;}
.item_detail_ttl_name { border-color: #5e9634!important;}

h3.article_detail_contents_box__title { color: #5e9634 !important; font-weight: bold; font-size: 140%; border: none !important; margin: 0 0 0 0;}
h3.article_detail_contents_box__title:before { content: ''; display: inline-block; width:30px; height:30px; vertical-align: middle; position: relative; top: -4px; padding: 0 15px 0 0; background: url(<?php echo $Path; ?>h2_before.png) no-repeat; background-size:contain;}
span.item_detail_feature_title,
h3.article_detail_contents_box__title {color:#5e9634 !important;}

.feature_summary_matome { padding: 20px 20px 10px; border: 6px solid #d1cbc1; -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0; display: block; overflow: hidden; }
.feature_summary_matome .matome_cap_area { text-align: center; padding: 0 0 0 0!important; margin: 0 0 24px 0!important; border-bottom: 6px double #cd0075;}
.feature_summary_matome .matome_cap {padding: 0 0 0 0!important; margin: 0 0 0 0!important; font-size: 36px; font-weight: bold; letter-spacing: 10px; display: block;color: #cd0075;}
.feature_summary_matome .matome_disp {padding: 0 0 0 0!important; margin: 0 0 10px 0!important; display: block; font-size: 22px;color: #cd0075;}
.feature_summary_matome .matome { font-size: 18px; line-height: 1.6; padding-bottom: 10px;}
.feature_summary_matome .matome b { color: #cd0075;}

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

.article_prof { margin: 16px 0;}
.article_prof.fl-box {flex-direction: column-reverse;}
.article_prof .fl-l {width: 100%;}
.article_prof .fl-r {width: 100%; text-align: center;}
.article_prof_name {font-size: 16px; margin: 8px; font-weight: bold;}
.article_prof_name small { font-size: 80%;}
.article_prof_disp {font-size: 14px; line-height: 1.6; margin: 8px 8px 0;}
.article_prof_img {text-align: center; margin: 0 auto; margin-bottom: 16px;}
.intoroduction { margin: 16px 2% 32px; width: auto; font-size: 14px; padding: 16px; }

.article_detail_contents_box .article_detail_contents_box__title { margin: 0 0 0 0!important;}

.feature_summary_matome { padding: 10px 20px 10px;}
.feature_summary_matome .matome_cap {font-size: 32px;}
.feature_summary_matome .matome_disp {font-size: 20px;}
.feature_summary_matome .matome { font-size: 14px;}

.feature_summary_stuff { padding: 20px 20px 110px; background: url(https://yoihibi.jp/client_info/FLORAHOUSE01/view/userweb/images/feature/1806/3back.jpg) no-repeat; background-size: 200%;}
.feature_summary_stuff .staff { bottom: -36px;}
.feature_summary_stuff p { width: 88%; text-align: justify;}
.feature_summary_stuff .staff img { width: 90%;}
}
</style>


<img src="<?php echo $Path; ?>title.png" width="100%;" style="margin: 0 0 50px 0;" class="spnone">
<img src="<?php echo $Path; ?>title_s.png" width="100%;" style="margin: 0 0 0 0;" class="pcnone">

<div class="intoroduction">
　季節の変わり目に体調を崩したり、不調になる時季が毎年同じということはありませんか？ 他の人は平気なのに自分だけが調子が悪いということもあると思います。この差はどこからくるのでしょうか？<br>
　その理由と、これから迎える春の体調管理について、東洋医学の専門家である薬剤師の佐藤稔子（としこ）先生に教えていただきます。
</div>
