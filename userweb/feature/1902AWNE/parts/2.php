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
.item_list_wrap_camp { clear: both; border-top: 1px solid #ea5532; margin: 60px 0 0 0; display: block; overflow: hidden;}
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
.intoroduction {background: url('<?php echo $Path; ?>title.png'); height: 504px; font-weight: bold; text-align: center; margin: 0 auto;}
.intoroduction span { max-width: 500px; font-size: 14px; display: block; padding: 340px 0 0; margin: 0 auto;}

.ima_box_disp {text-align: left; padding: 0 0 0 10px; margin:-10px 0 0 0;}

.koe-box {width:100%; background: #fff2e6; padding: 24px; border-radius: 16px;}
.koe-box-cap {font-size: 24px; font-weight: bold; text-align: center; margin: 0 0 24px 0; padding: 0 0 16px 0; border-bottom: 1px solid #fce0ca; color: #933a2d;}
.koe-box-cap b {color: #d67534;}
.koe-box-l {width:50%; border-right: 2px dashed #933a2d; padding: 0 8px 0 0;}
.koe-box-r { width:50%; padding: 0 0 0 8px;}
.koe-box-img { width: 30%; margin: 0; text-align: center; font-size: 14px;}
.koe-box-img img { width: 100%;}
.koe-box-disp { width: 60%; font-size: 14px; text-align: justify;}
.koe-box-disp-cap { display: block; color: #db4662; font-weight: bold; font-size: 18px; margin: 0 0 8px 0;}

.koe-box-s {width:98%; background: #fff2e6; padding: 24px; border-radius: 16px;}
.koe-box-s .koe-box-l {width:100%; border-right: none; padding: 0 0 0 0;}
.koe-box-s .koe-box-img { width: 24%;}
.koe-box-s .koe-box-disp { width: 66%;}

.etc-box {width: 100%;}
.voice-box { display: block; width: 49%; padding: 24px; text-align: justify; line-height: 1.6; background: #fef4e5 url('<?php echo $Path; ?>img6.png') 8px 72px no-repeat; margin-right: 1%; border-radius: 8px;}
.voice-box-disp {}
.voice-box-disp b { text-align: right; display: block;}
.voice-box-disp-cap {color: #ea5532; font-weight: bold; font-size: 24px; margin: 0 0 8px 0; text-align: right;}
.voice-box-disp-cap b {font-size: 16px; background: #ea5532; color: #fff; border-radius: 20px; padding:4px 16px; margin-bottom: 8px; display: inline-block;}
.detail-box {display: block; width: 50%; padding: 16px; background: #e5e3da;}
.detail-box-disp {}
.detail-box-disp-cap { text-align: center; margin:0 0 16px 0; padding: 0 0 8px 0; font-weight: bold; font-size: 18px; color: #933a2d; border-bottom: 2px dashed #933a2d;}
.detail-box-disp img { text-align: center!important; width: 100%;}

#itemDetail .price { font-size: 18px;}
s { text-decoration: none; display: inline; border-bottom: 3px solid #ea5532; line-height: auto;}
.article_detail_info {width: 100%!important;}
.item_detail_ttl_name { border-color: #ea5532!important;}
#main h2,
.article_detail_header h2 {margin: 0!important; border: none;}

h3.article_detail_contents_box__title { color: #ea5532 !important; font-weight: bold; font-size: 140%; border: none !important; margin: 0 0 0 0;}
span.item_detail_feature_title,
h3.article_detail_contents_box__title {color:#ea5532 !important;}

/*おすすめ商品*/
.camp_stock_area {box-sizing: border-box; width: 100%; clear: both; display: block; margin: 20px 0 0 0; padding: 10px; background: #E9EDDA; border: 1px solid #ddd; overflow: hidden; border-radius: 10px;}
.camp_stock { width: 25%; float: left;}
.camp_stock_img { border: 1px solid #ddd; width: 90%; margin: 10px auto 0; height: 180px; display: block; overflow: hidden; text-align: center; background: #fff;}
.camp_stock_img img { width: auto; height: 100%; text-align: center;}
.camp_stock_txt { display: block; overflow: hidden; margin: 0 auto 0; padding: 10px 0; width: 85%; font-size: 14px; color: #306B50; font-weight: bold; text-align: justify;}
.camp_stock a:hover { opacity: 0.6;}


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
.intoroduction {text-align: left; margin: -20px 1% 30px; width: 98%; position: relative; padding: 2.5% 2% 2%; background: #fff; color: #333; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; display: block; overflow: hidden; -moz-box-shadow: 0 0 20px rgba(238, 123, 71, 0.9); -webkit-box-shadow: 0 0 20px rgba(238, 123, 71, 0.9); box-shadow: 0 0 20px rgba(238, 123, 71, 0.9);}
.intoroduction { margin: 16px 2% 32px; width: auto; font-size: 14px; padding: 16px; height: auto;}
.intoroduction span {padding: 0;}

.article_detail_contents_box .article_detail_contents_box__title { margin: 0 0 0 0!important;}

.koe-box {padding: 16px; box-sizing: border-box;}
.koe-box-cap {font-size: 14px;}
.koe-box-l {width:100%; border-right:none; border-bottom: 1px dashed #933a2d; padding: 0 0 16px 0;}
.koe-box-r { width:100%; padding: 16px 0 0 0;}

.koe-box-s {padding: 16px; box-sizing: border-box;}
.koe-box-s .koe-box-l {width:100%; border-bottom: none; padding: 0 0 0 0;}
.koe-box-s .koe-box-img { width: 30%;}
.koe-box-s .koe-box-disp { width: 60%;}

.voice-box {width: 100%; padding: 16px; background: #fef4e5 url('<?php echo $Path; ?>img6.png') 8px 132px no-repeat; margin:0;}
.voice-box-disp b { text-align: center; font-size: 12px!important; font-weight: 400;}
.voice-box-disp span { display: block; margin-top: 80px;}
.voice-box-disp-cap {font-size: 18px; margin: 0 0 8px 0; text-align: center;}
.detail-box { width: 100%; margin-top: 16px;}

/*おすすめ商品*/
.camp_stock { width: 50%!important;}
.camp_stock_img {height: 100px;}
.camp_stock_txt {font-size: 12px; padding: 0 0 10px 0; height: 2.5em;}
}
</style>

<img src="<?php echo $Path; ?>title_s.png" width="100%;" style="margin: 0 0 0 0;" class="pcnone">

<div class="intoroduction">
<span>　寒い季節の強い味方アルファウェーブシリーズに、新商品としてリクエストの多かったソックス、ネックウォーマーがラインアップ！<br>
さらに、ミニパッドでご好評いただいているピンク色を、スクエアパッドにもご用意いたしました。<br>
寒さが本格化するこれからの時期、少しでもお役に立てれば幸いです。</span>
</div>
