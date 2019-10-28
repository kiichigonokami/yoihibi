//
// グローバルメニューの、現在のページの色を変える処理
// サイトのデザインによっては修正が必要です。
// 2009/12/18 Interfactory
//

/**
 * 現在のページを判別します。
 * @return 現在のページ名(menuId属性との一致検証に使います)
 */
function __getCurrentPageName() {
	"use strict";
	// 現在のパス情報
	var currentPath = window.top.location.href;
	// ローカルでxhtmlを閲覧時にも効果するように、htmlに書き換え
	if (currentPath.endsWith(".xhtml")) {
		currentPath = currentPath.substring(0, currentPath.length - ".xhtml".length) + ".html";
	}
	// パラメータ付きの場合はパラメータ削除
	if (currentPath.indexOf("?") != -1) {
		currentPath = currentPath.substring(0, currentPath.indexOf("?"));
	}
	
// =================================================================================
// ここからサイトの仕様ごとにここ以下を書き換える部分。
// =================================================================================
	
	// currentPathが/category/***の場合は/categoryまでで分割し、代わりにこの変数にカテゴリコードが入ります
	var categoryCd = "";
	
	// スラッシュで終わる場合は、トップ、カテゴリのいずれか
	if (currentPath.endsWith("/")) {
		var pos = currentPath.lastIndexOf("/", currentPath.length - 1);
		if (pos != -1) {
			currentPath = currentPath.substring(0, pos);
		}
		pos = currentPath.lastIndexOf("/", currentPath.length - 1);
		if (pos != -1) {
			categoryCd = currentPath.substring(pos + 1);
			currentPath = currentPath.substring(0, pos);
		}
		
		// categoryじゃない場合はtopと判断(categoryなんてドメイン、client_noは存在しないハズ！）
		if (!currentPath.endsWith("/category")) {
			return "top";
		}
	}
	
	// ローカル用
	if (currentPath.endsWith("top.html")) {
		return "top";
	}
	
	if (Ebisu != null
			&& Ebisu.rootPath != null
			&& Ebisu.rootPath.endsWith("/") 
			&& Ebisu.rootPath.substring(0, Ebisu.rootPath.length - 1).length > 0
			&& currentPath.endsWith(Ebisu.rootPath.substring(0, Ebisu.rootPath.length - 1))) {
		return "top";
	}
	
	// 会員ページ
	if (currentPath.endsWith("member_regist.html")
			|| currentPath.endsWith("member_regist_new.html")
			|| currentPath.endsWith("member_regist_confirm.html")
			|| currentPath.endsWith("member_regist_new_complete.html")
			|| currentPath.endsWith("member_input.html")
			|| currentPath.endsWith("member_confirm.html")
			|| currentPath.endsWith("member_result.html")) {
		return "member";

	}
	
	// ご利用ガイド
	if (currentPath.endsWith("ext/guide.html")) {
		return "guide";

	}
	
	// 特定商取引法に基づく表記
	if (currentPath.endsWith("ext/tokushou.html")) {
		return "tokushou";

	}
	
	// 会社概要
	if (currentPath.endsWith("ext/company.html")) {
		return "company";
	}

	// お問合せ
	if (currentPath.endsWith("apply.html")
			|| currentPath.endsWith("apply_token.html")) {
		return "apply";

	}
	
	if (categoryCd.indexOf("Y") != -1) {
		return "y";
	}


// 下記のようにカテゴリコードで分岐することもできます、
	if (categoryCd.indexOf("ALL") != -1) {
		return "top";
	}
	if (categoryCd.indexOf("Y_ALL") != -1) {
		return "y";
	}

	// それ以外
	return null;

// =================================================================================
// ここまでサイトの仕様ごとにここ以下を書き換える部分。
// =================================================================================

}

//便利関数
String.prototype.endsWith = function (str) { return this.lastIndexOf(str) == this.length - str.length; };
// 書き換え処理：通常は編集しない。
if (document.getElementById("EBISU_MENU_LIST") != null) {
	var elements = document.getElementById("EBISU_MENU_LIST").getElementsByTagName("a");
	for (var i = 0; i < elements.length; i++) {
		if (elements[i].getAttribute("menuName") == __getCurrentPageName()) {
			elements[i].className = elements[i].getAttribute("selectedClass");
		}
	}
}
