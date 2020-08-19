<?php

  sleep(5);

  include ("connection.php");
  include ('user_check.php');
  set_time_limit(0);
  ini_set('memory_limit','128M');

  $fc=1;
  $flag1=1;
  $check1=1;
  $check2=1;
  $check3=1;

  $year=$_POST['year'];
  $sec=$_POST['sec'];

  $sql = "SELECT count(*) AS C FROM information_schema.tables WHERE table_schema = 'fys1' AND table_name = '".$year."_".$sec."' LIMIT 1;";
  $res = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($res, MYSQLI_ASSOC);

  if($row["C"] >= 1)
  {
    header("location:../failure.php?msg=Fatal Error! Section Already Exists");
    exit();
  }

  $i=1;
  $create_sql = "CREATE TABLE IF NOT EXISTS ".$_POST['year']."_".$_POST['sec']."
                 (slno INTEGER PRIMARY KEY AUTO_INCREMENT, name varchar(150), usn varchar(10),
                  smob varchar(15), pmob varchar(15),
                 subject varchar(100), sub_abr varchar(3),
                 t1 varchar(5) DEFAULT NULL, t1_out_of integer(2), t1_check integer(1) DEFAULT 0, t1_mcheck integer(1) DEFAULT 0,
                 q1 varchar(5) DEFAULT NULL, q1_out_of integer(2), q1_check integer(1) DEFAULT 0, q1_mcheck integer(1) DEFAULT 0,
                 t2 varchar(5) DEFAULT NULL, t2_out_of integer(2), t2_check integer(1) DEFAULT 0, t2_mcheck integer(1) DEFAULT 0,
                 q2 varchar(5) DEFAULT NULL, q2_out_of integer(2), q2_check integer(1) DEFAULT 0, q2_mcheck integer(1) DEFAULT 0,
                 lab varchar(5) DEFAULT NULL, lab_out_of integer(2), lab_check integer(1) DEFAULT 0, lab_mcheck integer(1) DEFAULT 0,
                 cie varchar(5) DEFAULT NULL, cie_out_of integer(2), cie_check integer(1) DEFAULT 0, cie_mcheck integer(1) DEFAULT 0,
                 att varchar(5) DEFAULT NULL, att_out_of integer(2), att_check integer(1) DEFAULT 0, att_mcheck integer(1) DEFAULT 0,
                 see varchar(5) DEFAULT NULL, see_out_of integer(2), see_check integer(1) DEFAULT 0, see_mcheck integer(1) DEFAULT 0);";
  if($conn->query($create_sql) === false)
  {
    $flag1=0;
    $check3=0;
  }
  else
  {
    $flag1=1;
  }

  if($check3==0)
  {
    $check1=0; $check2=0;
    echo 'agalla';
    #header("location:../failure.php?msg=Data");
  }

  while(isset($_POST['name'.$i]) & $check1!=0)
  {
    $_POST['name'.$i]=str_replace("'","\'",$_POST['name'.$i]);
    $_POST['fname'.$i]=str_replace("'","\'",$_POST['fname'.$i]);
    $_POST['usn'.$i]=str_replace("'","\'",$_POST['usn'.$i]);
    $_POST['smob'.$i]=str_replace("'","\'",$_POST['smob'.$i]);
    $_POST['pmob'.$i]=str_replace("'","\'",$_POST['pmob'.$i]);
    $_POST['email'.$i]=str_replace("'","\'",$_POST['email'.$i]);

    $sql1 = "INSERT INTO stu_master (year, name, fname, section, usn, smob, pmob, email, dept) VALUES
            ('".$_POST['year']."', '".$_POST['name'.$i]."',
            '".$_POST['fname'.$i]."', '".$_POST['sec']."',
            '".$_POST['usn'.$i]."','".$_POST['smob'.$i]."','".$_POST['pmob'.$i]."',
            '".$_POST['email'.$i]."', '".$_POST['dept'.$i]."');";
    if($conn->query($sql1) === false)
    {
      $flag1=0;
      $check1=0;
    }
    $i=$i+1;
  }

  if($check1==0)
  {
    $del1_sql = "DELETE FROM stu_master WHERE year='".$_POST['year']."' AND sec='".$_POST['sec']."';";
    if($conn->query($del1_sql) === false)
    {
      header("location:../failure.php?msg='Fatal Error! Please contact administrator!'&type=sec&year=$year&sec=$sec");
    }
    header("location:../failure.php?msg='Please Check the Details Entered!'&type=sec&year=$year&sec=$sec");
  }

  $sql2 = "SELECT * FROM subs;";
  $res2 = mysqli_query($conn, $sql2);

  if($check2!=0)
  {
    while($row2=mysqli_fetch_array($res2, MYSQLI_ASSOC))
    {
      $sql3 = "SELECT * FROM stu_master WHERE year='".$_POST['year']."' AND section='".$_POST['sec']."';";
      $res3 = mysqli_query($conn, $sql3);
      while($row3=mysqli_fetch_array($res3, MYSQLI_ASSOC))
      {
        $sql5 = "SELECT smob, pmob FROM stu_master WHERE name='".$row3['name']."' AND usn='".$row3['usn']."'";
        $res5 = mysqli_query($conn, $sql5);
        $row5=mysqli_fetch_array($res5, MYSQLI_ASSOC);
        $rname = str_replace("'","\'",$row3['name']);
        $rusn = str_replace("'","\'",$row3['usn']);
        $sql4 = "INSERT INTO ".$_POST['year']."_".$_POST['sec']."
                 (name, usn, smob, pmob, subject, sub_abr) VALUES ('".$rname."',
                 '".$rusn."', '".$row5['smob']."','".$row5['pmob']."','".$row2['sub_name']."', '".$row2['abr']."');";
       if($conn->query($sql4) === false)
       {
         $flag1=0;
         break;
       }
      }
    }
  }

  if($check2==0)
  {
    $del1_sql = "DELETE FROM stu_master WHERE year='".$_POST['year']."' AND sec='".$_POST['sec']."';";
    $del2_sql = "DROP TABLE ".$_POST['year']."_".$_POST['sec'].";";
    if($conn->query($del1_sql) === false || $conn->query($del2_sql) === false)
    {
      header("location:../failure.php?msg='Fatal Error! Please contact administrator!'&type=sec&year=$year&sec=$sec");
    }
    header("location:../failure.php?msg='Oops! Something went wrong please try again!'&type=sec&year=$year&sec=$sec");
  }

  if($flag1 == 1)
  {
    header("location:../success.php");
  }
  else
  {
    header("location:../failure.php?year=$year&sec=$sec");
    // echo mysqli_error($conn);
  }

?>
