<?php
set_time_limit(0);
ini_set('memory_limit','128M');
  set_time_limit(0);

 include ("connection.php");
 include ('user_check.php');
 $flag=1;

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

  //  $ch=curl_init();
  //  curl_setopt($ch,CURLOPT_URL,$sms_url);
  //  curl_setopt($ch, CURLOPT_POST, 1);
  //  curl_setopt($ch,CURLOPT_POSTFIELDS,1);
  //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  //  curl_setopt($ch,CURLOPT_TIMEOUT, '3000');
  //  $content = trim(curl_exec($ch));
  //  curl_close($ch);
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
 }

 $mobile = $_POST['mob'];

 $mob_array = explode(",",$mobile);

 $text = $_POST['txt'];

 foreach ($mob_array as $i) {
    send_sms($i, $text);
 }

 header ("location:../success.php");

?>
