<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tommy Prud'homme">
    <meta name="robots" content="index, follow">
    <meta name="DC.Language" content="fr">
    <meta name="geo.placename" content="Joliette, québec">
    <meta name="geo.region" content="ca-qc">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Linuks">
	<meta property="og:url" content="http://www.youplay.duckdns.org">
	<meta property="og:site_name" content="Linuks">
	<meta property="og:description" content="A home for my school projects">
	<title>Linuks</title>
	<meta name="title" content="Linuks">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row main-menu border3">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 logoside">
				<img src="./img/linuks.png" class="logo" align="middle"/>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 listside border2">
				<div id="Box-div">
						<a href="./_flappyfish/flappyfish.php"><img src="./img/icons/flappyfish.png" align="middle" class="icon"/></a>
						<div class="text">
							<p class="BoldSpan"><b>FlappyFish</b></p>
							<p class="BookSpan">Le FlappyBird Clone</p>
						</div>
						<br>
						<a href="./_ssb/ssb.php"><img src="./img/icons/student.png" align="middle" class="icon"/></a>
						<div class="text">
							<p class="BoldSpan"><b>Super School Brothers</b></p>
							<p class="BookSpan">Le Mario Bros Clone?</p>
						</div>
						<br>
						<a href="content-loader.php?type=link&name=./_licorne/index.html"><img src="./img/icons/licorne.png" align="middle" class="icon"/></a>
						<div class="text">
							<p class="BoldSpan"><b>Site de Licorne</b></p>
							<p class="BookSpan">Parce qu'on aime tous les licornes!</p>
						</div>
						<br>
						<!--
						<a href="content-loader.php?type=pdf&name=workinprogress.png"><img src="./img/icons/fireball.png" align="middle" class="icon"/></a>
						<div class="text">
							<p class="BoldSpan"><b>Ancien Site</b></p>
							<p class="BookSpan">Le site de licornes nettoyé</p>
						</div>
						<br>
						-->
						<a href="content-loader.php?type=link&name=./_league/index.php"><img src="./img/icons/fireball.png" align="middle" class="icon"/></a>
						<div class="text">
							<p class="BoldSpan"><b></b>Project FireBall</p>
							<p class="BookSpan">Nouveau Site en cours de développement</p>
						</div>
						<br>
						<a href="content-loader.php?type=pdf&name=workinprogress.png"><img src="./img/icons/download.png" class="icon"/></a>
						<div class="text">
							<p class="BoldSpan"><b>Downloads</b></p>
							<p class="BookSpan">La section téléchargement</p>
						</div>
						<br>
						<a href="./mail_form.php"><img src="./img/icons/contactus.png" class="icon"/></a>
						<div class="text">
							<p class="BoldSpan"><b>Nous contacter</b></p>
							<p class="BookSpan">Pour du feedback!</p>
						</div>
				</div>
			</div>
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
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script>
	$(function() {
	  $('.center-it').css({
        'position' : 'absolute',
        'top' : '50%',
        'margin-top' : function() {return -$(this).outerHeight()/2}
    });
	});
	</script>
</body>
</html>
