<html>
<head>
	<?php include 'head.php';?>
</head>
<body>
<?php include 'topdocument.php';?>
<?php 
	header('Content-Type: text/html; charset=ISO-8859-1');
	$cnx = @mysqli_connect('localhost','root','', 'db_stories');

	if ($cnx == TRUE){
		$story_id = $_GET['id'];
		
		$story = "SELECT * FROM `stories` where `id_story` = ". $story_id;
		if ($result = @mysqli_query($cnx, $story))
		{
			$result = mysqli_fetch_assoc(@mysqli_query($cnx, $story));
			//echo "<h1 class='page-header'>". $result2["story_title"] ."</h1>";
			//echo "<pre>". $result2["story_text"] ."</pre>";
		}
		else
		{
			echo "<p>2222222222222222222</p>";
		}			
	}
	?>

<div id="formdiv">
	<form id="modify_story" method="POST" action="">
		<?php
			if (isset($_POST['titre']) && isset($_POST['story_text']) /*&& $_POST['mdp'] == "Password01"*/){
				if ($_POST['titre'] != "" && $_POST['story_text'] != ""){
					$cnx = @mysqli_connect('localhost','root','', 'db_stories');
					if ($cnx == TRUE){
						$titre = htmlentities(mysqli_real_escape_string($cnx, $_POST['titre']));
						$story_text = htmlentities(mysqli_real_escape_string($cnx, $_POST['story_text']));
						$requete = "UPDATE stories SET story_text =".$story_text.", story_title = ". $titre ." WHERE id_story = ". $_POST['id'] ."";
						
						$res = mysqli_fetch_assoc($resultat);
					}
				}
			}
			else if (isset($_POST['titre']) && isset($_POST['story_text']) && isset($_POST['id'])){
				$cnx = @mysqli_connect('localhost','root','', 'db_stories');
				if ($cnx == TRUE){
					$titre = htmlentities(mysqli_real_escape_string($cnx, $_POST['titre']));
					$story_text = htmlentities(mysqli_real_escape_string($cnx, $_POST['story_text']));
					$requete = "UPDATE `stories` SET story_title = '". $titre ."' WHERE id_story = '". $_POST['id'] ."'";
					
					if (@mysqli_query($cnx, $requete))
					{
						echo "<h1>Votre Requete a fonctionnée</h1>";
					}
					else{
						echo "<h1>Exécution de requête impossible</h1>";
					}
				}
				
				
			}
		?>
		<label for="titre">Titre :</label>
		<input class="forminput" type="text" name="titre" id="titre" value="<?php  
		$cnx = @mysqli_connect('localhost','root','', 'db_stories');

		if ($cnx == TRUE){
		$story = "SELECT * FROM `stories` where `id_story` = ". $_GET['id'];
		$result = mysqli_fetch_assoc(@mysqli_query($cnx, $story));
		echo $result['story_title'];
		}
		?>"/>
		<br>
		<label for="story_text">Histoire :</label>
		<textarea class="forminput" name="story_text" rows="13" form="new_story" required>
		<?php  
		$cnx = @mysqli_connect('localhost','root','', 'db_stories');

		if ($cnx == TRUE){
		$story = "SELECT * FROM `stories` where `id_story` = ". $_GET['id'];
		$result = mysqli_fetch_assoc(@mysqli_query($cnx, $story));
		echo $result['story_text'];
		}
		?>
		</textarea>
		<label for="mdp">Mot de passe :</label>
		<input class="forminput" type="password" name="mdp" id="mdp"/>
		<br>
		<input type="hidden" name="id" id="id" value="<?php echo "" . $_GET['id']; ?>"/>
		<br>
		<input type="SUBMIT" value="Ajouter"/>
	</form>
</div>
<?php include 'bottomdocument.php';?>
<?php include 'footer.php';?>
</body>
</html>
