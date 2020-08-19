 <?php
 set_time_limit(0);
 ini_set('memory_limit','128M');
  include ("connection.php");
  include ('user_check.php');
  $flag=1;

	function send_mail($to, $body, $test)
	{
    include ("connection.php");
		require_once '../PHPMailer-master/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->Username = 'bmsfyo@gmail.com';
		$mail->Password = 'BMSfyo@1';
		$mail->setFrom('bmsfyo@gmail.com');
    $mail->addAddress($to);
    $mail->Subject = 'Results of '.$test;
    $mail->Body = $body;
    if (!$mail->send())
    {
      header ("location:../failure.php?msg=".$mail->ErrorInfo."");
    }
    else
    {
      header ("location:../success.php");
    }
  }

  if($_GET['test'] == 't1')
  {$test="Test 1";}
  else if($_GET['test'] == 't2')
  {$test="Test 2";}
  else if($_GET['test'] == 't3')
  {$test="Test 3";}
  else if($_GET['test'] == 'q1')
  {$test="Quiz 1";}
  else if($_GET['test'] == 'q2')
  {$test="Quiz 2";}
  else if($_GET['test'] == 'see')
  {$test="Sem End Examination";}


    $sql1 = "SELECT distinct(section) AS S FROM stu_master WHERE year='".$_POST['year']."';";
    $res1 = mysqli_query($conn, $sql1);
    while($row1 = mysqli_fetch_array($res1, MYSQLI_ASSOC))
    {
      $sql2 = "SELECT * FROM stu_master WHERE year='".$_POST['year']."' AND section='".$row1['S']."';";
      $res2 = mysqli_query($conn, $sql2);
      while($row2 = mysqli_fetch_array($res2, MYSQLI_ASSOC))
      {
        $sql3 = "SELECT ".$_GET['test']." AS M, subject FROM ".$_POST['year']."_".$row1['S']." WHERE usn='".$row2['usn']."' AND ".$_GET['test']." IS NOT NULL;";
        $res3 = mysqli_query($conn, $sql3);
        $body = "Results of ".$row2['name']." :\nUSN : ".$row2['usn']."\n\n";
        while($row3 = mysqli_fetch_array($res3, MYSQLI_ASSOC))
        {
          $body = $body.$row3['subject']." : ".$row3['M']."\n";
        }
        send_mail($row2['email'], $body, $test);
      }
    }


      #{header ("location:../success.php");}

?>
