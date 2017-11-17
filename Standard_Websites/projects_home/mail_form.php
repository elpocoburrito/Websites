<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Linuks">
    <meta name="robots" content="index, follow">
    <meta name="DC.Language" content="fr">
    <meta name="geo.placename" content="Joliette, québec">
    <meta name="geo.region" content="ca-qc">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Linuks">
	<meta property="og:url" content="http://www.youplay.duckdns.org">
	<meta property="og:site_name" content="Linuks">
	<meta property="og:description" content="Linuks">
	<title>Linuks</title>
	<meta name="title" content="Linuks">
	<link rel="icon" href="./favicon.ico">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row main-menu" id="form">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 logoside">
				<img src="./img/linuks.png" class="logo" align="middle"/>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6s">
				<div class="textinput">
					<form onsubmit="return verifiydata()" action="./mail_sender.php" method="POST" autocomplete="off" autocapitalize="off">
					<p class="bookspan"><b><span>Nom</span><span>Name</span></b></p>
					<input class="bookspan" type="text" name="name" id="name" size=40>
					<p class="bookspan"><b><span>Courriel</span><span>Email</span></b></p>
					<input class="bookspan" type="text" name="email" id="email" size=40>
					<p class="bookspan"><b><span>Sujet</span><span>Subject</span></b></p>
					<input class="bookspan" type="text" name="subject" id="subject" size=40>
					<p class="bookspan"><b>Commentaire</b></p>
					<textarea class="bookspan" cols=40 rows=10 name="message" id="message"></textarea>
					<button class="buttons" type="Button" onclick="location.href='index.php';" value="cancel">Cancel</button>
					<button class="buttons" type="submit" value="send" style="float: right;">send</button>
					</form>
					<script>
					function verifiydata(){
						var name = document.getElementById("name").value;
						var email = document.getElementById("email").value;
						var subject = document.getElementById("subject").value;
						var message = document.getElementById("message").value;
						
						
						var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
						var emailbool = re.test(email);
						if (name != "" && emailbool == true && subject != "" && message != "")
						{
							return true;
						}
						else
							return false
					}
					</script>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container-fluid navbar-nav">
			<a href="./"><span id="back-arrow-btn" class="glyphicon glyphicon-arrow-left"></span></a>
			<div class="navlogo border">
				<img src="./img/linuks.png" align="middle"/>
			</div>
		</div>
	</nav>  
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</body>
</html>