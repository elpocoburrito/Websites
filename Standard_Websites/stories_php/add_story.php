<html>
<head>
	<?php include 'head.php';?>
</head>
<body>
<?php include 'topdocument.php';?>
	<form id="new_story" method="POST" action="">
	<?php
		//header('Content-Type: text/html; charset=ISO-8859-1');
		if (isset($_POST['titre']) && $_POST['mdp'] == "Password01"){
			if ($_POST['titre'] != "" && $_POST['story_text']){
				$cnx = @mysqli_connect('localhost','root','', 'db_stories');
				if ($cnx == TRUE){
					$titre = htmlentities(mysqli_real_escape_string($cnx, $_POST['titre']));
					$story_text = htmlentities(mysqli_real_escape_string($cnx, $_POST['story_text']));
					$requete = "INSERT INTO `stories` (`id_story`, `story_text`, `story_title`) VALUES (NULL, '". $story_text ."', '". $titre ."')";
					
					if (@mysqli_query($cnx, $requete))
					{
						echo "<h1>Votre Requete a fonctionnée</h1>";
					}
					else{
						echo "<h1>Exécution de requête impossible</h1>";
					}
					
					//$resultat = mysqli_query($cnx, $requete);
			
					//$res = mysqli_fetch_assoc($resultat);
				}
			}
		}
		

		
	?>
		<label for="titre">Titre :</label>
		<input class="forminput" type="text" name="titre" id="titre"/>
		<br>
		<label for="story_text">Histoire :</label>
		<textarea class="forminput" name="story_text" rows="13" form="new_story" required></textarea>
		<label for="mdp">Mot de passe :</label>
		<input class="forminput" type="password" name="mdp" id="mdp"/>
		<br>
		<input type="hidden" name="id" id="id" value=""/>
		<br>
		<input type="SUBMIT" value="Ajouter"/>
	</form>
	<?php include 'bottomdocument.php';?>
<?php include 'footer.php';?>
</body>
</html>
