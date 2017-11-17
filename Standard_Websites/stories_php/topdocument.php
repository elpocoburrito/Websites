<div id="wrapper">
      <div class="overlay"></div>

      <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
          <ul class="nav sidebar-nav">
			  <li class="sidebar-brand">
                  <a href="#"><i class="fa fa-slideshare"></i> The Horny Dwarf</a>
              </li>
              <li>
                  <a href="./index.php"><i class="fa fa-fw fa-home"></i> Home</a>
              </li>
			  <li>
                  <a href="#" class="bold"><i class="fa fa-square"></i><strong> Histoires</strong></a>
              </li>
			  
              <?php 
				$cnx = @mysqli_connect('localhost','root','', 'db_stories');

				if ($cnx == TRUE){
					$requete  = "SELECT `id_story`,`story_title` FROM `stories`";
					$resultat = @mysqli_query($cnx, $requete);
					while($stories = mysqli_fetch_assoc($resultat)){
						echo "<li><a href='./stories.php?id=". $stories['id_story'] ."'><i class='fa fa-book' aria-hidden='true'></i> ". $stories['story_title'] ."</a></li>";
					}					
				}
			  ?>
			  <li>
                  <a href="#" class="bold"><i class="fa fa-square"></i><strong> Others</strong></a>
              </li>
              <li>
                  <a href="./add_story.php"><i class="fa fa-pencil"></i> Add a story</a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-fw fa-twitter"></i> Contact Me</a>
              </li>
          </ul>
      </nav>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
          <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
          <span class="hamb-bottom"></span>
        </button>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
