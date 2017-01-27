<?php
  $servername = "194.135.87.136";
  $username = "klotas_view";
  $password = "123456789123456"; //Good Luck Dropping all, this user only has SELECT permissions.
  $dbname = "klotas_rooms";

  $con = new mysqli($servername, $username, $password, $dbname);
  if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
  }


  $q = $_GET['q'];

  $sql = "SELECT `id` FROM `buildings` WHERE `value` = '".$q."'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);
  $buildingID = $row['id'];

  $sql = "SELECT `id`, `number` FROM `rooms` WHERE `building_id` = '".$buildingID."'";
  $result = mysqli_query($con,$sql);

  while($row = mysqli_fetch_array($result)) {
      echo "<option id='" . $row['id'] . "'>" . $row['number'] . "</option>";
  }

  mysqli_close($con);

?>
