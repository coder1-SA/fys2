<?php
  include ("connection.php");
  include ('user_check.php');
  set_time_limit(0);
  ini_set('memory_limit','128M');

  $grp_name=$_POST['grp_name'];

  $i=1;
  while(isset($_POST['sname'.$i]))
  {
    $_POST['sname'.$i]=str_replace("'","\'",$_POST['sname'.$i]);
    $_POST['smob'.$i]=str_replace("'","\'",$_POST['smob'.$i]);
    $_POST['pmob'.$i]=str_replace("'","\'",$_POST['pmob'.$i]);

    $sql1 = "INSERT INTO groups (grp_name, sname, smob, pmob) VALUES
            ('".$grp_name."', '".$_POST['sname'.$i]."',
            '".$_POST['smob'.$i]."','".$_POST['pmob'.$i]."');";
    if($conn->query($sql1) == false)
    {
      header("location:../failure.php");
    }
    $i=$i+1;
  }

  $sql2 = "SELECT COUNT(*) AS C FROM groups WHERE grp_name='".$grp_name."';";
  $res2 = mysqli_query($conn, $sql2);
  $row2 = mysqli_fetch_array($res2, MYSQLI_ASSOC);
  if($i==$row2['C']+1)
  {
    header("location:../success.php");
  }
  else
  {
    header("location:../failure.php");
  }


?>
