<?php
set_time_limit(0);
ini_set('memory_limit','128M');
  include ("connection.php");
  include ('user_check.php');

  $sql1 = "DELETE FROM ".$_POST['year']."_".$_POST['sec']." WHERE usn='".$_POST['usn']."';";

  $sql2 = "DELETE FROM stu_master WHERE year='".$_POST['year']."' AND section='".$_POST['sec']."' AND usn='".$_POST['usn']."';";

  if($conn->query($sql1)===TRUE && $conn->query($sql2)===TRUE)
  {
    header ("location:../success.php");
  }
  else
  {
    header ("location:../failure.php");
  }

?>
