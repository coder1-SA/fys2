<?php

  sleep(2);

  set_time_limit(0);
  ini_set('memory_limit','128M');
  include ("connection.php");
  include ('user_check.php');

  $sql1 = "SELECT count(*) AS C FROM stu_master WHERE year='".$_GET['year']."' AND section='".$_GET['sec']."';";
  $res1 = mysqli_query($conn,$sql1);
  $row1 = mysqli_fetch_array($res1, MYSQLI_ASSOC);
  $count = $row1['C'];

  if(strcmp($_GET['mtype'],'t1,q1')==0 || strcmp($_GET['mtype'],'t2,q2')==0 || strcmp($_GET['mtype'],'t3,lab')==0 || strcmp($_GET['mtype'],'cie,att')==0)
  {
    $disptype = 2;
    $mt = explode(',',$_GET['mtype']);
  }
  else
  {
    $disptype = 1;
  }

  $flag=1;
  $i=1;

  if($disptype==1)
  {
    while(isset($_POST['m'.$i]) )
    {
      if(strcmp($_POST['m'.$i],'')!=0)
      {
        $sql = "UPDATE ".$_GET['year']."_".$_GET['sec']." SET ".$_GET['mtype']."='".$_POST['m'.$i]."', ".$_GET['mtype']."_out_of=".$_POST['out_of'].", ".$_GET['mtype']."_mcheck=1
                WHERE usn='".$_POST['usn'.$i]."' AND sub_abr='".$_GET['sub']."';";
        if($conn->query($sql) == false)
        {
          header("location: ../failure1.php");
        }
        $flag=$flag+1;
      }
      $i=$i+1;
    }

    if($flag <= $count+1)
    {
      header("location: ../success.php");
    }
    else
    {
      header("location: ../failure.php");
    }
  }
  elseif($disptype==2)
  {
    while(isset($_POST['m'.$i]) && isset($_POST['q'.$i]))
    {
      if(strcmp($_POST['m'.$i],'')!=0 && strcmp($_POST['m'.$i],'Already Entered')!=0)
      {
        $sql5 = "UPDATE ".$_GET['year']."_".$_GET['sec']." SET
                       ".$mt[0]."='".$_POST['m'.$i]."', ".$mt[0]."_out_of=".$_POST['t_out_of'].", ".$mt[0]."_mcheck=1
                WHERE usn='".$_POST['usn'.$i]."' AND sub_abr='".$_GET['sub']."';";
        if($conn->query($sql5) == false)
        {
          header("location: ../failure1.php");
        }
      }
      if(strcmp($_POST['q'.$i],'')!=0 && strcmp($_POST['q'.$i],'Already Entered')!=0)
      {
        $sql6 = "UPDATE ".$_GET['year']."_".$_GET['sec']." SET
                       ".$mt[1]."='".$_POST['q'.$i]."', ".$mt[1]."_out_of=".$_POST['q_out_of'].", ".$mt[1]."_mcheck=1
                WHERE usn='".$_POST['usn'.$i]."' AND sub_abr='".$_GET['sub']."';";
        if($conn->query($sql6) == false)
        {
          header("location: ../failure1.php");
        }
      }
      $flag=$flag+1;
      // echo $_POST['m'.$i]." - ".$_POST['q'.$i]."<br>";
      $i=$i+1;

    }

    if($flag <= $count+1)
    {
      header("location: ../success.php");
    }
    else
    {
      header("location: ../failure.php");
    }
  }

?>
