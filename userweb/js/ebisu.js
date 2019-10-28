
/* *************** Ebisumart Libraryの処理 ******************* */

var Ebisu = {
    isLocal: true,
    rootPath: "/"
};
(function(){
    "use strict";

    // 文字サイズ変更の処理
    Ebisu.FontChanger = {
        map: {
            S: "95%",
            M: "100%",
            L: "105%"
        },
        currentSize: null,
        getCurrentSize: function(){
            if(this.currentSize == null){
                this.currentSize = eb$.cookie('body.style.fontSize') == null ? "M" : eb$.cookie('body.style.fontSize');
            }
            return this.currentSize;
        },
        change: function(size){
            this.currentSize = size;
            eb$.cookie('body.style.fontSize', size, {expires:'7', path:'/'});
            this.view();
        },
        
        view: function(){
            var size = this.getCurrentSize();
            size = (size == null) ? "M" : size ;
            eb$(".__FONT_CHANGER_BUTTON_S_ON").hide();
            eb$(".__FONT_CHANGER_BUTTON_S_OFF").show();
            eb$(".__FONT_CHANGER_BUTTON_M_ON").hide();
            eb$(".__FONT_CHANGER_BUTTON_M_OFF").show();
            eb$(".__FONT_CHANGER_BUTTON_L_ON").hide();
            eb$(".__FONT_CHANGER_BUTTON_L_OFF").show();
            eb$(".__FONT_CHANGER_BUTTON_" + size + "_ON").show();
            eb$(".__FONT_CHANGER_BUTTON_" + size + "_OFF").hide();
            document.body.style.fontSize = this.map[size];
        }
    };

    // えびすカレンダーの処理
    eb$.fn.ebisu_calendar = function(options){
        if(options == null){
            options = {};
        }
        if(options.goneMonthCount != null){
            var today = new Date();
            var firstMonthFirstDay = new Date(today.getFullYear(), today.getMonth() - options.goneMonthCount, 1);
            options.minDate = firstMonthFirstDay;
        }
        if(options.comingMonthCount != null){
            var today = new Date();
            var lastMonthLastDay = new Date(today.getFullYear(), today.getMonth() + options.comingMonthCount + 1, 0);
            options.maxDate = lastMonthLastDay;
        }
        if(options.goneDateCount != null){
            var today = new Date();
            var firstMonthFirstDay = new Date(computeDate(today.getFullYear(), today.getMonth() + 1, today.getDate(), -options.goneDateCount));
            options.minDate = firstMonthFirstDay;
        }
        if(options.comingDateCount != null){
            var today = new Date();
            var lastMonthLastDay = new Date(computeDate(today.getFullYear(), today.getMonth() + 1, today.getDate(), options.comingDateCount));
            options.maxDate = lastMonthLastDay;
        }
        var target = eb$(this);
        var doDatePicker = function(dateJson){
            var oldFunc = options.beforeShowDay;
            options.beforeShowDay = function(date){
                var colorNo = dateJson[Ebisu.dateToYYYYMMDD(date)];
                if(colorNo != null){
                    return [true, "day_color" + colorNo];
                }
                if(oldFunc){
                    return oldFunc();
                }
                return [true];
            };
            target.datepicker(options);
        };
        if(Ebisu.isLocal){
            doDatePicker({
                20120117: 1,
                20120119: 2,
                20120120: 3,
                20120121: 4,
                20120122: 5,
                20120123: 6
            });
        } else {
            eb$.getJSON(
                Ebisu.rootPath + "ajax_calendar_data.jsonp?callback=?",
                {
                    "min_date": Ebisu.dateToYYYYMMDD(options.minDate),
                    "max_date": Ebisu.dateToYYYYMMDD(options.maxDate)
                },
                doDatePicker
            );
        }
    };
    /*
        年月日と加算日からn日後、n日前を求める関数
        year 年
        month 月
        day 日
        addDays 加算日。マイナス指定でn日前も設定可能
    */
    function computeDate(year, month, day, addDays){
        var dt = new Date(year, month - 1, day);
        var baseSec = dt.getTime();
        var addSec = addDays * 86400000;//日数 * 1日のミリ秒数
        var targetSec = baseSec + addSec;
        dt.setTime(targetSec);
        return dt;
    }
    Ebisu.dateToYYYYMMDD = function(date){
        var yyyy = date.getFullYear(), mm = date.getMonth() + 1, dd = date.getDate();
        if (mm < 10) { mm = "0" + mm; }
        if (dd < 10) { dd = "0" + dd; }
        return yyyy.toString() + mm.toString() + dd.toString();
    };
})();

/* *************** Ebisumart Libraryの処理 end ******************* */


/* *************** ブラウザ判別用クラス追加の処理 ******************* */

/*
    htmlタグに以下のブラウザ判別用クラスを追加します。
    例えばIE6なら <html class="ie ie6"> となります。
    対象：ie, chrome, firefox, oepra, sagari
    ※一応将来のバージョンにも対応してるのでIE99でも「class="ie ie99"」となります。
    ※ブラウザ名は全て小文字指定、バージョン指定の部分は、最初のマイナーバージョンまで、小数点の0のみはピリオドごと消える、「.」は「_」になります。
    ※モバイルOS情報を付加する→ios(iphone, ipad, ipod), android
    例：「Safari」→「safari」
    例：「IE11.0」→「ie11」
    例：「IE5.5」→「ie5_5」
    例：「Safari5.1.7」→「safari5_1」
*/
function addBrowserClass(){
    var __add = function(name, ver){
        if(document.documentElement.className){ document.documentElement.className += ' '; }
        document.documentElement.className += name + (ver!='' ? ' ' + name+(ver*1).toString().replace('.','_') : '');
    }
    var userAgent = window.navigator.userAgent.toLowerCase();
    var appVersion = window.navigator.appVersion.toLowerCase();
    if( get = userAgent.match( /msie (\d+(\.\d+)?)/i ) )              { __add('ie',      get[1]); }
    else if( get = userAgent.match( /Trident.+rv\:(\d+(\.\d+)?)/i ) ) { __add('ie',      get[1]); }
    else if( get = userAgent.match( /chrome\/(\d+(\.\d+)?)/i ) )      { __add('chrome',  get[1]); }
    else if( get = userAgent.match( /firefox\/(\d+(\.\d+)?)/i ) )     { __add('firefox', get[1]); }
    else if( get = userAgent.match( /opera\/(\d+(\.\d+)?)/i ) )       { __add('opera',   get[1]); }
    else if( get = userAgent.match( /safari\/(\d+(\.\d+)?)/i ) )      { __add('safari',  get[1]); }
    if( get = userAgent.match( /iPhone OS (\d+(\.\d+)?)/i ) )    { __add('ios',     get[1]); }
    if( get = userAgent.match( /iPhone;/i ) )                    { __add('iphone',  ''); }
    else if( get = userAgent.match( /iPod;/i ) )                 { __add('ipod',    ''); }
    else if( get = userAgent.match( /iPad;/i ) )                 { __add('ipad',    ''); }
    else if( get = userAgent.match( /Android (\d+(\.\d+)?)/i ) ) { __add('android', get[1]); }
}
addBrowserClass();

/* *************** ブラウザ判別用クラス追加の処理 end *************** */


/* *************** 文字サイズの実行 ******************* */

eb$(function(){
    eb$('.__FONT_CHANGER_BUTTON_S_OFF').on('click', function(){
        Ebisu.FontChanger.change('S');
        return false;
    });
    eb$('.__FONT_CHANGER_BUTTON_M_OFF').on('click', function(){
        Ebisu.FontChanger.change('M');
        return false;
    });
    eb$('.__FONT_CHANGER_BUTTON_L_OFF').on('click', function(){
        Ebisu.FontChanger.change('L');
        return false;
    });
});

/* *************** 文字サイズの実行 end ******************* */


/* *************** このページをトップへをクリックした時の処理 ******************* */

function backToTop(obj){
    eb$(obj).on('click', function(){
        eb$('body, html').animate({scrollTop:0}, 500);
        return false;
    });
}

/* *************** このページをトップへをクリックした時の処理 end *************** */


/* *************** 商品詳細ページのAJAXの処理 ******************* */

// AJAXの処理後エラーだった場合の挙動
function ajaxPutToCartErrorAction(msg, obj){
    var error = JSON.parse(msg.responseText).ERROR;
    alert(error);
}

// AJAXの処理後成功だった場合の挙動
function ajaxPutToCartSuccessAction(msg, obj){
    showPop(eb$(obj).find('.cartMessage'));
}

// ポップアップウィンドウを表示
function showPop(msgBox){
    var delaytime = 3000;
    if (msgBox.is(':hidden')){
      msgBox
       .css({
        'opacity' : 0,
        'margin-top': 30
       })
       .show().animate({
        'opacity' : 1,
        'margin-top' : 0
       }, 200)
       .delay(delaytime)
       .fadeOut();
    }
}

/* *************** 商品詳細ページのAJAXの処理 end *************** */


/* *************** 商品詳細ページの数量をテキスト入力にする処理 ******************* */

function putItemPropertyToCart(itemcd, propcd, request, paramUrl, obj){
    var val = Number(eb$('#CART_AMOUNT').val()) || 1;  // 未設定なら 1
    eb$('<form/>', {action : paramUrl, method : 'post'})
    .append(eb$('<input/>', {type : 'hidden',name : 'request',value : request}))
    .append(eb$('<input/>', {type : 'hidden',name : 'item_cd',value : itemcd}))
    .append(eb$('<input/>', {type : 'hidden',name : 'ITEMPROPERTY_CD',value : propcd}))
    .append(eb$('<input/>', {type : 'hidden',name : 'CART_AMOUNT',value : "'" + val + "'"}))
    .appendTo(document.body).submit();
}

/* *************** 商品詳細ページの数量をテキスト入力にする処理 end *************** */


/* *************** カート精算ページに関する処理 ******************* */

// エラーが走った時に実行（個別エラーオプション時に使用）
/*
function scrollError(){
    window.scroll(0,0);
    if (eb$("div#error").length > 0) {
        location.href = "#error";
    }
}
eb$(function(){
    scrollError();
});
*/

/* *************** カート精算ページに関する処理 end *************** */



