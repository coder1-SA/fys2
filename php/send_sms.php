<?php
set_time_limit(0);
ini_set('memory_limit','128M');
if(isset($_POST['submit']))
  {
  $phone ='9945449190';
  $email='sidd7523@gmail.com';
  // $msg = urlencode('www.tools4noobs.com/dsaf');
  $msg = 'Hello! This is a trial SMS.';
  $dest_mobileno='9742235745';
 $sms = urlencode(htmlspecialchars("Welcome to EMANHR Your Username ".$phone." Password ".$phone." and www.kothuram.com/eastmanhr"));
 $username = "marii"; //use your sms api username
 $pass = "123"; //enter your password
 $senderid = "EMANHR";//BTOYOU use your sms api sender id
 $priority = "ndnd";//BTOYOU use your sms api sender id
 $stype = "normal";//BTOYOU use your sms api sender id
        $sms_url = sprintf("http://bhashsms.com/api/sendmsg.php?user=$username&pass=$pass&sender=$senderid&phone=$dest_mobileno&text=$sms&priority=$priority&stype=$stype");

 $ch=curl_init();
 curl_setopt($ch,CURLOPT_URL,$sms_url);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch,CURLOPT_POSTFIELDS,1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch,CURLOPT_TIMEOUT, '3');
 $content = trim(curl_exec($ch));
 curl_close($ch);
?>
