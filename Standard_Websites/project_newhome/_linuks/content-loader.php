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
    <link rel="stylesheet" href="./css/font-awesome.min.css">
</head>
<body id="loader-body">
<iframe id="loader-iframe" src="<?php $type = $_GET['type']; $name = $_GET['name']; if ($name != "" && $type == "pdf") {echo "./files/".$name;} else if ($name != "" && $type == "link") {echo $name;} else {header('Location: index.php');} ?>" style="width:100%;height:100%;"></iframe>
<nav class="navbar navbar-inverse navbar-fixed-bottom">
	<div class="container-fluid navbar-nav">
		<a href="./"><span id="back-arrow-btn" class="glyphicon glyphicon-arrow-left"></span></a>
		<div class="navlogo border">
			<img src="./img/linuks.png" align="middle"/>
		</div>
	</div>
</nav> 
</body>
</html>