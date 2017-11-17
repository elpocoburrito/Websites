<html>
<head>
	<?php include 'head.php';?>
</head>
<body>
<?php include 'topdocument.php';?>
	<?php
	$cnx = @mysqli_connect('localhost','root','', 'db_stories');

	if ($cnx == TRUE){
		$story_id = $_GET['id'];
		//$story_title = "SELECT `story_title` FROM `stories` where `id` = ". $story_id;
		//$story_text = "SELECT `story_text` FROM `stories` where `id` = ". $story_id;
		//$result_title = @mysqli_query($cnx, $story_title);
		//$result_text = @mysqli_query($cnx, $story_text);
		
		$story = "SELECT * FROM `stories` where `id_story` = ". $story_id;
		if ($result = @mysqli_query($cnx, $story))
		{
			$result2 = mysqli_fetch_assoc($result);
			echo "<h1 class='page-header'>". $result2["story_title"] ."</h1>";
			echo "<pre>". $result2["story_text"] ."</pre>";
			//print_r($res1);
		}
		else
		{
			echo "<p>2222222222222222222</p>";
		}			
	}
	?>
<?php include 'bottomdocument.php';?>
<?php include 'footer.php';?>
</body>
</html>
