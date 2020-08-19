<?php
set_time_limit(0);
ini_set('memory_limit','128M');
  include ("connection.php");
  include ('user_check.php');

  $sql1 = "UPDATE ".$_POST['year']."_".$_POST['sec']." SET ".$_POST['mtype']."=".$_POST['marksnew']." WHERE usn='".$_POST['usn']."'
           AND sub_abr='".$_POST['sub']."';";

  if(mysqli_query($conn, $sql1) === TRUE)
  {
    header ("location:../success.php");
  }
  else
  {
    #header ("location:../failure.php?msg=");
    mysqli_error($conn);
  }
?>
