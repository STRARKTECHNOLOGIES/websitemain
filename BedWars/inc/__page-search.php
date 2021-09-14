<?php $error = false; ?>
<div class="columns">
  <div class="column col-12 col-xs-12">
    <div class="brand" style="text-align: center">
      <img src="./inc/img/logo.png" style="width: 400px;margin-top: 20px;margin-bottom: 20px;" class="brand-img" alt="">
    </div>
    <div class="panel" style="<?php if ($background_color == "url('./inc/img/Halloween.png')") { echo "background: #464646; border-color: #616161"; } else { echo "background: #fff"; };?>; margin-bottom: 0px">
      <div class="panel-header text-center">
        <div class="panel-title h5 mt-10" style="<?php echo "color: " . $font_color; ?>">BedWars1058 - WebInterface</div>
      </div>
      <nav class="panel-nav" style="background: #fff; position: sticky; top: 0; z-index: 200">
        <ul class="tab tab-block">
          <?php include('./inc/__panel.nav.php'); ?>
        </ul>
      </nav>
      <div class="panel-body" style="margin-top: 5px; margin-bottom: 15px">
        <div class="panel centered" style="max-width: 500px; margin-top: 20px; margin-bottom: 20px">
          <div class="panel-header text-center">
            <div class="panel-title h5 mt-10" style="<?php echo "color: " . $font_color; ?>">
              Search Player
            </div>
          </div>
          <div class="panel-body">
            <?php

            if (isset($_POST['username']) && $_POST['username'] != null) {
              $username = $_POST['username'];
              die( include('./inc/__page-profile.php') );
            } elseif (isset($_GET['username']) && $_GET['username'] != null) {
              $username = $_GET['username'];
              die( include('./inc/__page-profile.php') );
            } else {
              $error = true;
            }

            ?>

            <?php if ($_GET['error'] == true): ?>
              <div class="toast toast-error" style="margin-bottom: 20px">
                The username doesn't exists in our database!
              </div>
            <?php endif; ?>
            <form action="" method="post">
              <div class="form-group">
                <label class="form-label" style="<?php echo "color: " . $font_color; ?>" for="username">Username</label>
                <input class="form-input" required type="text" id="username" name="username" placeholder="RubberDucky23_">
              </div>
              <div class="form-group">
                <button type="submit" name="enviar" class="btn btn-primary centered" style="margin-top: 20px">Search Player</button>
              </div>
            </form>
          </div>
        </div>
        <div class="panel-subtitle" style="text-align:center;margin-top:20px;<?php echo "color: " . $font_color; ?>"><a style="<?php echo "color: " . $font_color; ?>" href="https://www.spigotmc.org/resources/bedwars1058-the-most-modern-bedwars-plugin-bungee-multiarena-shared.50942/">Plugin</a> by <a style="<?php echo "color: " . $font_color; ?>" href="https://www.spigotmc.org/members/andrei1058.39904/">andrei1058</a> - WebInterface by <a style="<?php echo "color: " . $font_color; ?>" href="https://www.spigotmc.org/members/mrduckboy_xx.478040/">MrDuckBoy_Xx</a></div>
      </div>
    </div>
  </div>
        </div>
