<?php
$page_name =  'アルファウェーブ';
$page_title = $page_name;
$Keywords = $page_name . '';
$Path = "../";
include($Path . 'common/set.php');
$Description = '';
$active = '3';
$h1 = '';
$folda = 'alfawave';
require_once($Path . 'common/inc.php');
$bodyclass = $folda;
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
<?php include('../page/4.php'); ?>
<?php include('../page/5.php'); ?>
<?php include('../page/6.php'); ?>
<?php include($Path . 'common/smoothscroll.php'); ?>
			</article>

<?php include($Path . 'common/footer_nav.php'); ?>
<?php include($Path . 'common/footer.php'); ?>

		</div>

	</div>

<?php include($Path . 'common/js.php'); ?>
</body>
</html>
