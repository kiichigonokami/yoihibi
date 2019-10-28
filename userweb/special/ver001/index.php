<?php
$page_name =  '遠赤外線グッズのご紹介';
$page_title = $page_name;
$Keywords = $page_name . '';
$Path = "./";
include($Path . 'common/set.php');
$Description = '';
$active = '';
$h1 = '';
//$bodyclass = ' class="data"';
require_once($Path . 'common/inc.php');
include($Path . 'common/css.php');
include_once($Path . 'common/analyticstracking.php');
?>
</head>

<body<?php if($bodyclass == ''){} else {echo ' class="' . $bodyclass . '"';}?>>
	<div class="wrap">

		<div class="wrap-l">
<?php include($Path . 'common/header.php'); ?>
		</div>

		<div class="wrap-r">
			<article class="contents">
<?php include('./page/1.php'); ?>
<?php include('./page/2.php'); ?>
<?php include('./page/3.php'); ?>
<?php include($Path . 'common/smoothscroll.php'); ?>
			</article>

<?php include($Path . 'common/footer_nav.php'); ?>
<?php include($Path . 'common/footer.php'); ?>

		</div>

	</div>

<?php include($Path . 'common/js.php'); ?>
</body>
</html>
