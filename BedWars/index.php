<?php include('./inc/settings.php'); ?>
<?php include('./inc/__sql.php'); ?>
<?php include('./inc/color_palette.php'); ?>
<?php if ($nstlld == false) { die( include('./error/unconfigured.php') ); } ?>
<html> <?php include('./inc/head.php') ?> <body style="background: <?php if (isset($background_color) && $background_color != null) { echo $background_color; } else { echo '#5575d9'; } ?>"> <div class="container centered" style="margin-top: -100px"> <?php $page = $_GET['p']; ?> <?php switch ($page) { case 'search': include('./inc/__page-search.php'); break; default: include('./inc/__page-index.php'); break; } ?> </div> </body> </html>
