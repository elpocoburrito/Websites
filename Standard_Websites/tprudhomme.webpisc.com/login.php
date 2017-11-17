<!DOCTYPE html>
<html lang="fr-CA"> 												<!-- Set page Language to french canadian -->
	<head>
		<meta charset="UTF-8">
		<title>Compagnons Mignons & Co</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<meta http-equiv="refresh" content="6">
	</head>
	<body>
		<div class='topnav' id='topnav'> 							<!-- navigation bar at the top -->
			<a href="index.php" class="head-class" title='Home'>Home</a>
			<a href="supportus.php" class="head-class" title='Donate'>Nous supporter!</a>
			<a href="download.php" class="head-class" title='Downloads'>Téléchargements</a>
		</div>
				<ul id="navul">										<!-- The Left Sidebar -->
			<li class="navli"><a href="sales.php"><b>En Rabais!</b></a></li>
			<li class="navli"><a href="licornes.php"><b>Licornes</b></a></li>
			<li class="navli"><a href="dragons.php"><b>Dragons</b></a></li>
			<li class="navli"><a href="moutons.php"><b>Moutons Souriants</b></a></li>
			<li class="navli"><a href="chevaux.php"><b>Chevaux Heureux</b></a></li>
			<li class="navli"><a href="happystudent.php"><b>Élèves Heureux</b></a></li>
			<li class="navli"><a href="cochons.php"><b>Cochons Bleus</b></a></li>
			<li class="navli"><a href="poneys.php"><b> Petits Poneys</b></a></li>
			<li class="navli"><a><br><br></a></li>
			<li class="navli"><a><br>Tests Pages<br><br></a></li>
			<li class="navli"><a href="buy.php"><b>Buy!</b></a></li>
			<li class="navli"><a class="active" href="acheter.php"><b>achat</b></a></li>
		</ul>
		<div id="downloadtablediv">
		</div>
		
		
		<form method="POST" action="connectivity.php">
			User
			<br>
			<input type="text" name="user" size="40"><br>
			Password <br>
			<input type="password" name="pass" size="40">
			<br>
			<input id="button" type="submit" name="submit" value="Log-In">
		</form>
		
		
	</body>
</html>