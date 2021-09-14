<div class="columns">
  <div class="column col-12 col-xs-12">
    <div class="brand" style="text-align: center">
      <img src="./inc/img/logo.png" style="width: 400px;margin-top: 20px;margin-bottom: 20px;" class="brand-img" alt="">
    </div>
    <div class="panel" style="<?php if ($background_color == "url('./inc/img/Halloween.png')") { echo "background: #464646; border-color: #616161"; } else { echo "background: #fff"; }?>">
      <div class="panel-header text-center">
        <div class="panel-title h5 mt-10" style="<?php echo "color: " . $font_color; ?>">XITE-MC - WEB_LEADER BOADRD</div>
      </div>
      <nav class="panel-nav" style="background: #fff; position: sticky; top: 0; z-index: 200">
        <ul class="tab tab-block">
          <?php include('./inc/__panel.nav.php'); ?>
        </ul>
      </nav>
      <div class="panel-body" style="margin-top: 5px; margin-bottom: 15px">
        <table class="table table-responsive" style="<?php echo "color: " . $font_color; ?>">
          <thead>
            <tr>
              <th>Username</th>
              <th>Wins</th>
              <th>Kills</th>
              <th>Final Kills</th>
              <th>Deaths</th>
              <th>Beds Destroyed</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              $table = $table_name[ $i ];
              $sql = "SELECT * FROM $database.$table ORDER by wins DESC;";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                  $i++;
              ?>
              <td>
                <figure class="<?php if ($i == 1 || $i == 2 || $i == 3) { echo "avatar badge"; } else { echo "avatar"; } ?>" data-badge="<?php echo $i; ?>º">
                  <img src="https://crafatar.com/avatars/<?php echo $row['uuid']; ?>?overlay&size=64" alt="Avatar">
                </figure>
                <a href="./?p=search&username=<?php echo $row["name"]; ?>" class="btn btn-link" style="color: <?php echo $font_color; ?> !important"><?php echo $row['name'] ?></a>
              </td>
              <td><?php echo $row['wins'] ?></td>
              <td><?php echo $row['kills'] ?></td>
              <td><?php echo $row['final_kills'] ?></td>
              <td><?php echo $row['deaths'] ?></td>
              <td><?php echo $row['beds_destroyed'] ?></td>
            </tr>
            <?php } } ?>
          </tbody>
        </table>
        <div class="panel-subtitle" style="text-align:center;margin-top:20px;<?php echo "color: " . $font_color; ?>"><a style="<?php echo "color: " . $font_color; ?>" href="https://www.spigotmc.org/resources/bedwars1058-the-most-modern-bedwars-plugin-bungee-multiarena-shared.50942/">Plugin</a> by <a style="<?php echo "color: " . $font_color; ?>" href="https://www.spigotmc.org/members/andrei1058.39904/">andrei1058</a> - WebInterface by <a style="<?php echo "color: " . $font_color; ?>" href="https://www.spigotmc.org/members/mrduckboy_xx.478040/">MrDuckBoy_Xx</a></div>
      </div>
    </div>
  </div>
        </div>
