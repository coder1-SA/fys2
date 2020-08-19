<?php
  include ("connection.php");
  include ('user_check.php');
  set_time_limit(0);
  ini_set('memory_limit','128M');

  $year=$_POST['year'];
  $sec=$_POST['sec'];

  $i=1;
  $check = 1;

  while(isset($_POST['name'.$i]))
  {
    $_POST['name'.$i]=str_replace("'","\'",$_POST['name'.$i]);
    $_POST['fname'.$i]=str_replace("'","\'",$_POST['fname'.$i]);
    $_POST['usn'.$i]=str_replace("'","\'",$_POST['usn'.$i]);
    $_POST['smob'.$i]=str_replace("'","\'",$_POST['smob'.$i]);
    $_POST['pmob'.$i]=str_replace("'","\'",$_POST['pmob'.$i]);
    $_POST['email'.$i]=str_replace("'","\'",$_POST['email'.$i]);

    $sql1 = "INSERT INTO stu_master (year, name, fname, section, usn, smob, pmob, email) VALUES
            ('".$_POST['year']."', '".$_POST['name'.$i]."',
            '".$_POST['fname'.$i]."', '".$_POST['sec']."',
            '".$_POST['usn'.$i]."','".$_POST['smob'.$i]."','".$_POST['pmob'.$i]."',
            '".$_POST['email'.$i]."');";
    if($conn->query($sql1) === true)
    {
    }

    $sql2 = "SELECT * FROM subs;";
    $res2 = mysqli_query($conn, $sql2);

    while($row2=mysqli_fetch_array($res2, MYSQLI_ASSOC))
    {
      $sql4 = "INSERT INTO ".$_POST['year']."_".$_POST['sec']."
               (name, usn, smob, pmob, subject, sub_abr) VALUES ('".$_POST['name'.$i]."',
               '".$_POST['usn'.$i]."', '".$_POST['smob'.$i]."','".$_POST['pmob'.$i]."','".$row2['sub_name']."', '".$row2['abr']."');";
     if($conn->query($sql4) === true)
     {
       $check = $check+1;
     }
    }
    $i=$i+1;
  }

  if($check = $i)
  {
    header("location:../success.php");
  }
  else
  {
    header("location:../failure.php");
  }



?>
