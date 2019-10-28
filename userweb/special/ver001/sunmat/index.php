<?php
$page_name =  'サン・マット';
$page_title = $page_name;
$Keywords = $page_name . '';
$Path = "../";
include($Path . 'common/set.php');
$Description = '';
$active = '2';
$h1 = '';
$folda = 'sunmat';
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
<?php include('../page/8.php'); ?>
<?php include('../page/9.php'); ?>
<?php include('../page/10.php'); ?>
<?php include($Path . 'common/smoothscroll.php'); ?>
			</article>

<?php include($Path . 'common/footer_nav.php'); ?>
<?php include($Path . 'common/footer.php'); ?>

		</div>

	</div>

<?php include($Path . 'common/js.php'); ?>
</body>
</html>
