<?php

  $year = $_GET['q'];

  include ('../connection.php');

  $sql = "SELECT DISTINCT(section) AS y FROM stu_master WHERE year='".$year."';";
  $result = mysqli_query($conn, $sql);

  echo "<option value='' disabled selected>Select Section</option>";
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    echo "<option value='".$row['y']."'>".$row['y']."</option>";
  }
?>
