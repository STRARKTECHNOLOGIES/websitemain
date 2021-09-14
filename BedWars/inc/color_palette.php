<?php

$logo_icon = "./inc/img/logo.png";

switch ($font_color) {
  case 'red':
    $font_color = "#cc3333";
    break;

  case 'green':
    $font_color = "#008000";
    break;

  case 'yellow':
    $font_color = "#ffeb3b";
    break;

  case 'blue':
    $font_color = "#5575d9";
    break;

  default:
    $font_color = "#cc3333";
    break;
}
?>

<?php

switch ($background_color) {
  case 'red':
    $background_color = "#CF2929";
    break;

  case 'green':
    $background_color = "#008000";
    break;

  case 'yellow':
    $background_color = "#ffeb3b";
    break;

  case 'blue':
    $background_color = "#5575d9";
    break;

  case 'halloween':
    $background_color = "url('./inc/img/Halloween.png')";
    $font_color = "#fff !important";
    break;

  default:
    $background_color = "#2e2a2a";
    break;
}
?>

<style>
.badge[data-badge]::after, .badge:not([data-badge])::after {
  background: <?php if ($background_color == "url('./inc/img/Halloween.png')") { echo "#464646"; } else { echo $background_color; } ?> !important;
}

.table td, .table th {
  <?php if ($background_color == "url('./inc/img/Halloween.png')") { echo "border-bottom-color: #616161 !important"; } ?>
}

.btn.btn-primary {
  <?php if ($background_color == "url('./inc/img/Halloween.png')") { echo "background: #616161 !important; border-color: #464646 !important"; } ?>
}
</style>
