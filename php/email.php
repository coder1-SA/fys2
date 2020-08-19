 <?php
  include ('user_check.php');
	function send_mail($to, $body, $test_type)
	{
		require '../PHPMailer-master/PHPMailerAutoload.php';
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
		$mail->Subject = 'Results of '.$test_type;
		$mail->Body = $body;
		if (!$mail->send())
		{
			header ("location:../failure.php");
		}
		else
		{
			header ("location:../success.php");
		}
  }

	$body = "Mathematics : 38";
	$test_type = "Test 1";
	$to = "sidd112008@gmail.com";

	send_mail($to, $body, $test_type);
?>
<html>
<body>
 <img src="../img/loader.gif" alt="">
</body>
</html>s
