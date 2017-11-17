<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LOGIQ IT">
    <meta name="robots" content="index, follow">
    <meta name="DC.Language" content="fr">
    <meta name="geo.placename" content="Joliette, québec">
    <meta name="geo.region" content="ca-qc">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Linuks Mail Sender">
	<meta property="og:url" content="http://www.youplay.duckdns.org">
	<meta property="og:site_name" content="Linuks">
	<meta property="og:description" content="Linuks School Projects">
	<title>Linuks</title>
	<meta name="title" content="Linuks">
	<link rel="icon" href="./favicon.ico">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/font-awesome.min.css" rel="stylesheet">
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row main-menu">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 logoside">
			<img src="./img/linuks.png" class="logo" align="middle"/>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 listside vertical-center">
		<?php 
			$msg = $_GET['msg'];
			$task = $_GET['task'];
			echo "<h1 id='messagetext' class='boxbox'>";
			if ($msg == 'email-mail')
			{
				echo "The Email you entered is invalid.";
			}
			else if ($msg == 'email-sent')
			{
				echo "The message have been sent successfully!";
			}
			else if ($msg == 'email-notsent')
			{
				echo "The message did not send successfully, you may try again.";
			}
			echo "</h1>";
		?>
		<script type="text/javascript">                                     
		setTimeout(function(){
			window.location.href = "<?php 
			if ($task == 'goto-index') 
			{ 
				echo 'index.php';
			} 
			else if ($task == 'goto-mailform') 
			{ 
				echo './mail_form.php';
			} ?>";
		}, 5000);
		</script>
		</div>
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container-fluid navbar-nav">
			<a href="./"><span id="back-arrow-btn" class="glyphicon glyphicon-arrow-left"></p></a>
			<div class="navlogo border">
				<img src="./img/linuks.png" align="middle"/>
			</div>
		</div>
	</nav>
</div>
</body>
</html>