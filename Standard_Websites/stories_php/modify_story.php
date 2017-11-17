<html>
<head>
	<?php include 'head.php';?>
</head>
<body>
	<?php include 'topdocument.php';?>
		<?php 
			$cnx = @mysqli_connect('localhost','root','', 'db_stories');

			if ($cnx == TRUE){
				$requete  = "SELECT * FROM `stories`";
				$resultat = @mysqli_query($cnx, $requete);
				echo "<div id='storylistdiv'><ul>";
				while($stories = mysqli_fetch_assoc($resultat)){
					echo "<li><a href='./modify_story_form.php?id=". $stories['id_story'] ."'><i class='fa fa-book' aria-hidden='true'></i> ". $stories['story_title'] ."</a></li>";
				}		
				echo "</ul></div>";
			}
		?>
	<?php include 'bottomdocument.php';?>
	<?php include 'footer.php';?>
</body>
</html>
