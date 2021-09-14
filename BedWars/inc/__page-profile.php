</div></div>
<?php

$table = $table_name[$i];
$sql = "SELECT * FROM $database.$table WHERE name='$username';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
?>
<div class="panel" style="">
  <div class="panel-header text-center">
    <div class="panel-title h5 mt-10" style="color: <?php echo $font_color; ?>"><?php echo $username . "'s Profile"; ?></div>
  </div>
  <div class="columns">
            <div class="column col-6 col-xs-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title h5">Statistics</div>
                </div>
                <div class="card-body">
                  <style>
                    .result {
                      width: 300px;
                      text-align: right;
                    }
                  </style>
                    <div class="columns">
                      <div class="columns">
                        <div class="column col-12 col-xs-12">
                          <table class="table table-striped table-hover">
                            <tbody style="">
                              <tr class="">
                                <td style="width: 200px;"><b>First Play</b></td>
                                <td class="result"><?php echo date("d F, Y - H:i", strtotime($row["first_play"])); ?></td>
                              </tr>
                              <tr class="">
                                <td><b>Last Play</b></td>
                                <td class="result"><?php echo date("d F, Y - H:i", strtotime($row["last_play"])); ?></td>
                              </tr>
                              <tr class="">
                                <td><b>Wins</b></td>
                                <td class="result"><?php if (isset($row['wins'])) { echo $row['wins']; } else { echo "0"; } ?></td>
                              </tr>
                              <tr class="">
                                <td><b>Kills</b></td>
                                <td class="result"><?php if (isset($row['kills'])) { echo $row['kills']; } else { echo "0"; } ?></td>
                              </tr>
                              <tr class="">
                                <td><b>Final Kills</b></td>
                                <td class="result"><?php if (isset($row['final_kills'])) { echo $row['final_kills']; } else { echo "0"; } ?></td>
                              </tr>
                              <tr class="">
                                <td><b>Losses</b></td>
                                <td class="result"><?php if (isset($row['looses'])) { echo $row['looses']; } else { echo "0"; } ?></td>
                              </tr>
                              <tr class="">
                                <td><b>Deaths</b></td>
                                <td class="result"><?php if (isset($row['deaths'])) { echo $row['deaths']; } else { echo "0"; } ?></td>
                              </tr>
                              <tr class="">
                                <td><b>Final Deaths</b></td>
                                <td class="result"><?php if (isset($row['final_deaths'])) { echo $row['final_deaths']; } else { echo "0"; } ?></td>
                              </tr>
                              <tr class="">
                                <td><b>Beds Destroyed</b></td>
                                <td class="result"><?php if (isset($row['beds_destroyed'])) { echo $row['beds_destroyed']; } else { echo "0"; } ?></td>
                              </tr>
                              <tr class="">
                                <td><b>Games Played</b></td>
                                <td class="result"><?php if (isset($row['games_played'])) { echo $row['games_played']; } else { echo "0"; } ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="column col-6 col-xs-12">
              <style>
                @media (max-width: 880px) {
                  .card.profile-img {
                    display: none;
                  }
                }
              </style>
              <div style="" class="card profile-img">
                <div class="columns">
                  <div class="column col-6 col-xs-12">
                    <img style="margin-left: 35px; margin-top: 20px; margin-bottom: 20px; width: 139px"class="img-responsive" src="https://crafatar.com/renders/body/<?php echo $row["uuid"]; ?>?overlay">
                  </div>
                  <div class="column col-6 col-xs-12">
                    <div class="centered" style="margin-top: 30px">
                      <h3>Username</h3>
                      <p><?php echo $username; ?></p><br>
                      <h3>UUID</h3>
                      <p style="font-size: 10px"><code><?php echo $row["uuid"]; ?></code></p><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
<div class="panel-subtitle" style="text-align:center;margin-top:20px;<?php echo "color: " . $font_color; ?>"><a style="<?php echo "color: " . $font_color; ?>" href="https://www.spigotmc.org/resources/bedwars1058-the-most-modern-bedwars-plugin-bungee-multiarena-shared.50942/">Plugin</a> by <a style="<?php echo "color: " . $font_color; ?>" href="https://www.spigotmc.org/members/andrei1058.39904/">andrei1058</a> - WebInterface by <a style="<?php echo "color: " . $font_color; ?>" href="https://www.spigotmc.org/members/mrduckboy_xx.478040/">MrDuckBoy_Xx</a></div>
<?php
} else {
  header("location: ?p=search&error=true");
}

?>
