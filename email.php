<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>Assignment Calculator</title>

</head><body>

<?php
require 'PHPMailerAutoload.php';

date_default_timezone_set('Etc/UTC');

if (isset($_POST['send'])) {
$mail = new PHPMailer(); 
//get user imput   
$email = $_POST['email'];
$time1 = $_POST['time1'];
$time2 = $_POST['time2'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$days = $_POST['days'];
$time= abs($time1-$time2);
$days = (int)$days;

//set dates
$format= "l M d, Y";
$stage1 = $time1;
$stage1 += ($time * .03);	
$step1 = date($format, $stage1);
$stage2 = $stage1 + ($time * .04);	
$step2 = date($format, $stage2);
$stage3 = $stage2 + ($time * .01);	
$step3 = date($format, $stage3);
$stage4 = $stage3 + ($time * .03);	
$step4 = date($format, $stage4);
$stage5 = $stage4 + ($time * .41);	
$step5 = date($format, $stage5);
$stage6 = $stage5 + ($time * .02);	
$step6 = date($format, $stage6);
$stage7 = $stage6 + ($time * .10);	
$step7 = date($format, $stage7);
$stage8 = $stage7 + ($time * .10);	
$step8 = date($format, $stage8);
$stage9 = $stage8 + ($time * .20);	
$step9 = date($format, $stage9);
$stage10 = $stage9 + ($time * .06);	
$step10 = date($format, $stage10);


//compose message
$message = file_get_contents('textonly.html'); 
$message = str_replace('%date1%', $date1, $message); 
$message = str_replace('%date2%', $date2, $message); 
$message = str_replace('%days%', $days, $message);
$message = str_replace('%step1%', $step1, $message); 
$message = str_replace('%step2%', $step2, $message); 
$message = str_replace('%step3%', $step3, $message); 
$message = str_replace('%step4%', $step4, $message); 
$message = str_replace('%step5%', $step5, $message); 
$message = str_replace('%step6%', $step6, $message); 
$message = str_replace('%step7%', $step7, $message); 
$message = str_replace('%step8%', $step8, $message); 
$message = str_replace('%step9%', $step9, $message); 
$message = str_replace('%step10%', $step10, $message); 

//send mail
$mail->isSMTP();
$mail->Host = 'host';
$mail->Port = 25;
$mail->setFrom('email_address', 'Assignment Calculator');
$mail->addReplyTo('email_address');
$mail->addAddress($email);
$mail->Subject  = 'Assignment Calculator Checklist';
$mail->Body = $message;
$mail->isHTML(true);
$mail->CharSet='utf-8';
$mail->WordWrap = 70;  

}


if(!$mail->send()) {
  $result = 'Mailer error: ' . $mail->ErrorInfo;
} else {
 $result = 'Your email has been sent.';
}

?>

<p><?php print $result ?></p><br>
<p>Return to the <a href="http://library.ollusa.edu/library" style="color: #005481;"><b>Library Homepage</b></a>.</p>

	</body></html>