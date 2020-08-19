<?php
set_time_limit(0);
ini_set('memory_limit','128M');
  include ("connection.php");
  include ('user_check.php');

  $sql1 = "UPDATE stu_master SET name='".$_POST['name']."', usn='".strtoupper($_POST['usnnew'])."', fname='".$_POST['fname']."',
           smob='".$_POST['smob']."', pmob='".$_POST['pmob']."', email='".$_POST['email']."' WHERE usn='".$_POST['usnold']."';";

  $sql2 = "UPDATE ".$_POST['year']."_".$_POST['sec']." SET usn='".strtoupper($_POST['usnnew'])."' WHERE usn='".$_POST['usnold']."';";

  if(mysqli_query($conn, $sql1) === TRUE && mysqli_query($conn, $sql2) === TRUE)
  {
    header ("location:../success.php");
  }
  else
  {
    header ("location:../failure.php?msg=");
  }
?>
