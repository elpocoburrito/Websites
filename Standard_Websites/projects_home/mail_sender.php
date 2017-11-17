<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="DC.Language" content="fr">
<meta name="geo.placename" content="Joliette, québec">
<meta name="geo.region" content="ca-qc">
<meta property="og:type" content="article">
<meta property="og:title" content="Linuks Mail">
<meta property="og:url" content="http://www.youplay.duckdns.org">
<meta property="og:site_name" content="Linuks">
<meta property="og:description" content="Mail Sender for Linuks">
<title>Linuks Mail Sender</title>
<meta name="title" content="Linuks Mail Sender">
<link rel="icon" href="./favicon.ico">
</head>
<body>
<?php
	require './libs/phpmailerautoload.php';
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$subject = mb_encode_mimeheader($subject,"UTF-8");
	
	$mail = new PHPMailer;
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'linukswebsite@gmail.com';
	$mail->Password = 'LinuxDay';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->setFrom($email, $name);
	$mail->addAddress('linukswebsite@gmail.com');

	$mail->Subject = $subject.' - '.$email;
	$mail->Body    = $message;

	if(!$mail->send()) {
		header('Location: messages.php?msg=email-notsent&task=goto-mailform');
	} else {
		header('Location: messages.php?msg=email-sent&task=goto-index');
	} 
?>
</body>
</html> 