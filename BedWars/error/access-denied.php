<?php include('./inc/settings.php'); ?>
<?php include('./inc/color_palette.php'); ?>
<html>
<?php include('./inc/head.php'); ?>
  <head>
    <title>ERROR! Access Denied</title>
  </head>
  <body style="background: <?php if (isset($background_color) && $background_color != null) { echo $background_color; } else { echo '#5575d9'; } ?>">
    <div class="container centered" style="margin-top: -100px">
      <div class="columns">
                <div class="column col-12 col-xs-12">
                  <div class="brand" style="text-align: center">
                    <img src="./inc/img/logo_error.png" style="width: 295px;" class="brand-img" alt="">
                  </div>
                  <div class="panel" style="background: #fff">
                    <nav class="panel-nav" style="background: #fff; position: sticky; top: 0; z-index: 200">
                      <ul class="tab tab-block">
                        <li class="tab-item active">
                          <a style="cursor: default">
                            Errors
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <div class="panel-body" style="margin-top: 5px; margin-bottom: 15px">
                      <div class="toast toast-error" style="margin-bottom: 20px">
                        The web interface was unable to connect the database using the configuration provided.
                      </div>
                      <div class="columns">
                        <div class="column col-12 col-xs-12">
                          <hr>
                          <h4>Configuration provided:</h4>
                          <ul>
                            <li><b>Hostname:</b> <code><?php echo $hostname; ?></code></li>
                            <li><b>Port:</b> <code><?php echo $port; ?></code></li>
                            <li><b>Database:</b> <code><?php echo $database; ?></code></li>
                            <li><b>Username:</b> <code><?php echo $username; ?></code></li>
                            <li><b>Password:</b> <code><?php echo $password; ?></code></li>
                          </ul>
                        </div>
                        <div class="column col-12 col-xs-12">

                        </div>
                      </div>
                      <script>
                        function refresh() {
                          location.reload();
                        }

                      </script>
                      <a style="width: 100%" onclick="refresh()" class="btn btn-primary">Refresh and Check</a>
                    </div>
                  </div>
                </div>
              </div>
    </div>
  </body>
</html>
