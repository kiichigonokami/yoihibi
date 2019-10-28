<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
?>

  <?php include('../sp_loop.php'); ?>

<?php } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) { ?>

  <?php include('../pc_loop.php'); ?>

<?php } else { ?>

  <?php include('../pc_loop.php'); ?>

<?php } ?>
