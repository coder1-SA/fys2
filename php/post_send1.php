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
   $mail->Username = 'egovernance@bmsce.ac.in';
   $mail->Password = 'bmscell@123';
   $mail->setFrom('egovernance@bmsce.ac.in');
   $mail->addAddress($to);
   $mail->Subject = 'Results of '.$test;
   $mail->Body = $body;
   if(!$mail->send())
   {

   }

 }

 function send_sms($mob, $b)
 {
   $contact=$mob;
   $sms = $b;
   $sms = urlencode($sms);
   $username = "FIRSTYEARDEAN";
   $pass = "123456";
   $senderid = "BMSFYB";
   $priority = "ndnd";
   $stype = "normal";
   //$sms_url = "http://bhashsms.com/api/sendmsg.php?user=".$username."&pass=".$pass."&sender=".$senderid."&phone=".$contact."&text=".$sms."&priority=".$priority."&stype=".$stype;
   require __DIR__ . '\twilio-php-main\src\Twilio\autoload.php';
   $sid = getenv('TWILIO_ACCOUNT_SID');
   $token = getenv('TWILIO_AUTH_TOKEN');
   $client = new Twilio\Rest\Client($sid, $token);
   // Use the client to do fun stuff like send text messages!
   $client->messages->create(
       // the number you'd like to send the message to
       $mob,
       [
           // A Twilio phone number you purchased at twilio.com/console
           'from' => '+14122654309',
           // the body of the text message you'd like to send
           'body' => $b
       ]
   );
  //  $ch=curl_init();
  //  curl_setopt($ch,CURLOPT_URL,$sms_url);
  //  curl_setopt($ch, CURLOPT_POST, 1);
  //  curl_setopt($ch,CURLOPT_POSTFIELDS,1);
  //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  //  curl_setopt($ch,CURLOPT_TIMEOUT, '3000');
  //  $content = trim(curl_exec($ch));
  //  curl_close($ch);
 }

 if($_GET['test1'] == 't1' && $_GET['test2'] == 'q1')
 {$test="Test 1 & Quiz 1";}
 else if($_GET['test1'] == 't2' && $_GET['test2'] == 'q2')
 {$test="Test 2 & Quiz 2";}
 else if($_GET['test1'] == 't3' && $_GET['test2'] == 'lab')
 {$test="Test 3 & Lab";}
 else if($_GET['test1'] == 'cie' && $_GET['test2'] == 'att')
 {$test="Test 3 & Lab";}
 else if($_GET['test1'] == 'q2')
 {$test="Quiz 2";}
 else if($_GET['test1'] == 'see')
 {$test="Sem End Examination";}
 else
 {$test='';}

     $data = array();

     $i=0;
     $sql2 = "SELECT * FROM stu_master WHERE year='".$_POST['year']."' AND section='".$_POST['sec']."';";
     $res2 = mysqli_query($conn, $sql2);
     while($row2 = mysqli_fetch_array($res2, MYSQLI_ASSOC))
     {
       $sql3 = "SELECT ".$_GET['test1']." AS M1, ".$_GET['test1']."_out_of AS O1, ".$_GET['test2']." AS M2, ".$_GET['test2']."_out_of AS O2, subject, sub_abr
                FROM ".$_POST['year']."_".$_POST['sec']."
                WHERE usn='".$row2['usn']."' AND ".$_GET['test1']." IS NOT NULL AND ".$_GET['test1']."_check=0 AND
                ".$_GET['test2']." IS NOT NULL AND ".$_GET['test2']."_check=0;";
       $res3 = mysqli_query($conn, $sql3);
       $body = "Results of ".$row2['name']." in ".$test." :\nUSN : ".$row2['usn']."\nFormat : (".strtoupper($_GET['test1']).", ".strtoupper($_GET['test2']).")\n";
       $body1 = $body;
       $body2 = $body;
       while($row3 = mysqli_fetch_array($res3, MYSQLI_ASSOC))
       {
        //  if(is_null($row3['M']))
        //  {
        //    $row3['M']='Abs';
        //  }
         $body1 = $body1.$row3['subject']." : (".$row3['M1']."/".$row3['O1'].", ".$row3['M2']."/".$row3['O2'].")\n";
         $body2 = $body2.$row3['sub_abr']." : (".$row3['M1']."/".$row3['O1'].", ".$row3['M2']."/".$row3['O2'].")\n";

         $sql81 = "UPDATE ".$_POST['year']."_".$_POST['sec']." SET ".$_GET['test1']."_check=1 WHERE usn='".$row2['usn']."' AND subject='".$row3['subject']."' AND ".$_GET['test1']."='".$row3['M1']."' ;";
         $sql82 = "UPDATE ".$_POST['year']."_".$_POST['sec']." SET ".$_GET['test2']."_check=1 WHERE usn='".$row2['usn']."' AND subject='".$row3['subject']."' AND ".$_GET['test2']."='".$row3['M2']."' ;";
         if($conn->query($sql81) == TRUE && $conn->query($sql82) == TRUE)
         {}
       }

      //  send_mail($row2['email'], $body, $test);
       $sql4 = "SELECT smob, pmob FROM stu_master WHERE year='".$_POST['year']."' AND section='".$_POST['sec']."' AND usn='".$row2['usn']."';";
       $res4 = mysqli_query($conn, $sql4);
       $row4 = mysqli_fetch_array($res4, MYSQLI_ASSOC);
       $data[$i]=array($body1,$row2['email'],$row4['smob'],$row4['pmob'],$body2);
        send_sms($row4['smob'], $body);
        send_sms($row4['pmob'], $body);
       $i=$i+1;
     }

     $sql7 = "SELECT count(*) AS C FROM stu_master WHERE year='".$_POST['year']."' AND section='".$_POST['sec']."';";
     $res7 = mysqli_query($conn,$sql7);
     $row7 = mysqli_fetch_array($res7, MYSQLI_ASSOC);
     $count = $row7['C'];

     $j=0;
     foreach($data as $a)
      {
          send_mail($a[1],$a[0],$test);
          send_sms($a[2],$a[4]);
          send_sms($a[3],$a[4]);
          $j=$j+1;
      }

     if($j==$count)
     {
       header ("location:../success.php");
     }
     else
     {
       header ("location:../failure.php");
     }
?>
