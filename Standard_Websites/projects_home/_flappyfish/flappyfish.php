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
	<meta property="og:title" content="FlappyFish">
	<meta property="og:url" content="http://www.youplay.duckdns.org">
	<meta property="og:site_name" content="Linuks">
	<meta property="og:description" content="FlappyFish">
	<meta name="title" content="Linuks">
	<title>FlappyFish</title>
	<meta name="title" content="FlappyFish">
	<link rel="icon" href="./favicon.ico">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
	<script src="TemplateData/UnityProgress.js"></script>  
	<script src="Build/UnityLoader.js"></script>
	<script>
	  var gameInstance = UnityLoader.instantiate("gameContainer", "Build/FlappyFish WebGL.json", {onProgress: UnityProgress});
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="row main-menu border3">
			<div class="webgl-content">
			  <div id="gameContainer" style=""></div><!--width: 960px; height: 600px-->
			  <div class="footer">
				<div class="webgl-logo"></div>
				<div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
				<div class="title">FlappyFish</div>
			  </div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container-fluid navbar-nav">
			<a href="../"><span id="back-arrow-btn" class="glyphicon glyphicon-arrow-left"></p></a>
			<div class="navlogo border">
				<img src="../img/linuks.png" align="middle"/>
			</div>
		</div>
	</nav>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
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
