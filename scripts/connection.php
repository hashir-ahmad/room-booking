<?php
  $servername = "kurmis.serveriai.lt";
  $username = "klotas_view";
  $password = "123456789123456"; //Good Luck Dropping all, this user only has SELECT permissions.
  $dbname = "klotas_rooms";

  $con = mysqli_connect($servername, $username, $password, $dbname);
  if (!$con) {
      die("Connection failed: " . $con->connect_error);
  }
?>
