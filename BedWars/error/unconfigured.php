<?php include('./inc/settings.php'); ?>
<?php include('./inc/color_palette.php'); ?>
<html>
<?php include('./inc/head.php'); ?>
  <head>
    <title>ERROR! Unconfigured</title>
  </head>
  <body style="background: <?php if (isset($background_color) && $background_color != null) { echo $background_color; } else { echo '#5575d9'; } ?>">
    <div class="container centered" style="margin-top: -100px">
      <div class="columns">
                <div class="column col-12 col-xs-12">
                  <div class="brand" style="text-align: center">
                    <img src="./inc/img/logo_error.png" style="width: 295px;" class="brand-img" alt="">
                  </div>
                  <div class="panel" style="<?php if ($background_color == "url('./inc/img/Halloween.png')") { echo "background: #464646"; } else { echo "background: #fff"; }?>">
                    <nav class="panel-nav" style="background: #fff; position: sticky; top: 0; z-index: 200">
                      <ul class="tab tab-block">
                        <li class="tab-item active">
                          <a style="cursor: default; <?php echo "color: " . $font_color; ?>; <?php echo "border-bottom-color: " . $font_color; ?>">
                            Errors
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <div class="panel-body" style="margin-top: 5px; margin-bottom: 15px">
                      <div class="toast toast-error" style="margin-bottom: 20px">
                        The page is unconfigured! Please follow the instructions to continue.
                      </div>
                      <div class="columns">
                        <div class="column col-12 col-xs-12">
                          <hr>
                          <h2 style="<?php echo "color: " . $font_color; ?>">Frecuently Asked Questions</h2>
                          <div class="accordion">
                            <input type="checkbox" id="howtoinstall" name="howtoinstall-checkbox" hidden="">
                            <label class="accordion-header c-hand" for="howtoinstall">
                              <h4 style="<?php echo "color: " . $font_color; ?>"><i class="icon icon-arrow-right mr-1"></i> How to install?</h4>
                            </label>
                            <div class="accordion-body" style="<?php echo "color: " . $font_color; ?>">
                              <p>Follow the instructions to install correctly the web addon:</p>
                              <li>
                                First, go to <code><?php echo $_SERVER['REQUEST_URI'] . "<b>inc/settings.php</b>"; ?></code> and edit the following:
                                <ol>
                                  <li>Change the database information</li>
                                  <li>
                                    Change the page title
                                    <ul>
                                      <li>Current: <code><?php echo $page_title; ?></code></li>
                                    </ul>
                                  </li>
                                  <li>
                                    Change the page favicon url
                                    <ul>
                                      <li>Current: <code><?php echo $_SERVER['REQUEST_URI'] . "<b>" . str_replace('./', '', $page_favicon) . "</b>"; ?></code> <img src="<?php echo $page_favicon; ?>" style="vertical-align: middle; width: 30px"></li>
                                    </ul>
                                  </li>
                                </ol>
                              </li>
                              </div>
                            </div>
                          </div>
                        <div class="column col-12 col-xs-12">

                        </div>
                      </div>
                      <script>
                        function refresh() {
                          location.reload();
                        }

                      </script>
                      <a style="width: 100%;" onclick="refresh()" class="btn btn-primary">Refresh and Check</a>
                    </div>
                  </div>
                </div>
              </div>
    </div>
  </body>
</html>
