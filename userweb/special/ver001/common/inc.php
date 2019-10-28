<?php
/* デバイス振り分け */
$ua=$_SERVER['HTTP_USER_AGENT'];
$ie = ((strpos($ua,'MSIE 6')!==false) || (strpos($ua,'MSIE 7')!==false) || (strpos($ua, 'MSIE 8') !== false && strpos($ua, 'MSIE 9') !== false));
$browser = ((strpos($ua,'iPhone')!==false) || (strpos($ua,'iPod')!==false) || (strpos($ua, 'Android') !== false && strpos($ua, 'Mobile') !== false) || (strpos($ua,'iPad')!==false) || (strpos($ua, 'Android') !== false && strpos($ua, 'Mobile') === false));
if ($browser == true){
	$browser = 'sp';
}
if ($ie == true){
	$ie = 'u_ie9';
}

//CDN
//$jquery = '<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>';

//変数初期化
$prefix = '';
$vp = '';
$vp2 = '';
$vvp = '';
$bodyclass = '';

$inc = <<< inc_data
<!DOCTYPE html>
<html lang="ja"{$prefix}>
<head>
<meta charset="UTF-8">

inc_data;

echo $inc;

if($browser == 'sp') {
} elseif ($ie == 'u_ie9') {
	echo '<!--[if IE]>'.PHP_EOL;
	echo '<meta http-equiv="X-UA-Compatible" content="IE=9">'.PHP_EOL;
	echo '<![endif]-->'.PHP_EOL;
} else {}

$inc2 = <<< inc_data2
<title>{$page_title}</title>
<meta name="Description" content="{$Description}">
<meta name="Keywords" content="{$Keywords}">

inc_data2;

echo $inc2;

echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">'.PHP_EOL;

$inc3 = <<< inc_data3
<meta name="google" content="notranslate">
<meta name="format-detection" content="telephone=no">

inc_data3;

echo $inc3;

if (isset($prefix)){
	echo '<meta property="og:title" content="' . $page_title . '">'.PHP_EOL;
	echo '<meta property="og:type" content="website">'.PHP_EOL;
	echo '<meta property="og:description" content="' . $Description . '">'.PHP_EOL;
	echo '<meta property="og:url" content="' . $SiteUrl . '">'.PHP_EOL;
	echo '<meta property="og:image" content="' . $SiteUrl . 'img/ogp.jpg">'.PHP_EOL;
	echo '<meta property="og:site_name" content="' . $SiteName . '">'.PHP_EOL;
	echo '<meta property="og:locale" content="ja_JP">'.PHP_EOL;
}else{
	echo ('');
}

if (isset($twittercard)){echo '<meta name="twitter:card" content="summary_large_image">'.PHP_EOL;
	echo '<meta name="twitter:site" content="@' . $tw_uname . '">'.PHP_EOL;
	echo '<meta name="twitter:title" content="' . $page_title . '">'.PHP_EOL;
	echo '<meta name="twitter:description" content="' . $Description . '">'.PHP_EOL;
	echo '<meta name="twitter:image" content="' . $SiteUrl . 'img/twittercard.jpg">'.PHP_EOL;
	echo '<meta name="twitter:url" content="' . $SiteUrl . '">'.PHP_EOL;
}else{
	echo ('');
}

if($browser == 'sp') {
} elseif ($ie == 'u_ie9') {
	echo '<!--[if lt IE 9]>'.PHP_EOL;
	echo '<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>'.PHP_EOL;
	echo '<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>'.PHP_EOL;
	echo '<![endif]-->'.PHP_EOL;
} else {}

$inc4 = <<< inc_data4
<link rel="icon" href="{$Path}favicon.ico">
<link rel="canonical" href="{$SiteUrl}">
<link rel="alternate" type="application/rss+xml" title="ROR" href="{$Path}sitemap.xml{$gz}">
<link rel="apple-touch-icon-precomposed" href="{$Path}img/clip.png">
inc_data4;

echo $inc4;

if($browser == 'sp') {
} elseif ($ie == 'u_ie9') {
	echo PHP_EOL.'<link rel="stylesheet" type="text/css" href="https://www.closet-child.com/js/iealert/style.css">'.PHP_EOL;
} else {}

if (isset($bootstrap)){
	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">' . PHP_EOL;
}else{
	echo ('');
}
?>
