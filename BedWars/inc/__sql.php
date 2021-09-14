<?php

include("./inc/settings.php");
$conn = new mysqli("$hostname", "$username", "$password", "$database", "$port");

if ($conn->connect_error) {
  if ($nstlld == true) {
    die( include('./error/access-denied.php') );
  } else {
    die( include('./error/unconfigured.php') );
  }
} else {
  $table_exists = "SHOW TABLES FROM $database WHERE Tables_in_$database ='global_stats';";
  $table_exists_result = $conn->query($table_exists);
  if ($table_exists_result->num_rows > 0) {
    $i = 0;
    while ($table_exists_row = $table_exists_result->fetch_assoc()) {
      $table_name = array('global_stats');
      if ($table_exists_row["Tables_in_$database"] != $table_name[ $i ]) {
        $i++;
        $table = $table_name[ $i ];
        if ($table_exists_row["Tables_in_$database"] != $table_name[ $i ]) {
          $table = $table_name[ $i ];
        }
      }
    }
  } else {
    die( include('./error/tables-not-found.php') );
  }
}

?>
