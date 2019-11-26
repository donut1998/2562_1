<?php
  session_start();
  $var_value = $_SESSION['varname'];
  
  $last_lat = $_SESSION['last_lat'];
  $last_long = $_SESSION['last_long'];
  $last_time_update = $_SESSION['last_time_update'];
//   echo $var_value; 
  echo $last_lat;
  echo "\n";
  echo $last_long;
  echo "\n";
  echo $last_time_update;
  
?>
 