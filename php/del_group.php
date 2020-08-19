<?php

  set_time_limit(0);
  ini_set('memory_limit','128M');
  include ("connection.php");
  include ('user_check.php');

  $grp_names = $_POST['grp_name'];

  $i=0;
  foreach ($grp_names as $g)
  {
    $sql = "DELETE FROM groups WHERE grp_name='".$g."'";
    if($conn->query($sql)==TRUE)
    {
      $i=$i+1;
    }
  }

  if($i == count($grp_names))
  {
    header("location: ../success.php");
  }
  else
  {
    header("location: ../failure.php");
  }

?>
