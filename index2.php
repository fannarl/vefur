<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
      session_start();
  ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Make an Event</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index2.php">Eventr</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <form class="navbar-form navbar-right" action="search" method="post">
          <input id="submit" type="submit" class="btn btn-success navbar-right" value="Search">
        </form>
        <form class="navbar-form navbar-right" action="" method="post">
          <input id="search" type="text" class="form-control" placeholder="Type here">
        </form>
        <form class="navbar-form navbar-right" action="logout.php" method="post">
          <button type="submit" class="btn btn-success">Sign out</button>
        </form>
        <form class="navbar-form navbar-right" action="profile.html.php" method="post">
          <button type ="submit" class="btn btn-success">My page</button>
        </form>
        <form class="navbar-form navbar-right" action="createEvent.html.php" method="post">
          <button type="submit" class="btn btn-success">Create Event</button>
        </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <section id="cd-timeline" class="cd-container">
    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="img/AvatarNoImg.jpg" alt="Picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Title of section 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <span class="cd-date">Jan 14</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-movie">
        <img src="img/AvatarNoImg.jpg" alt="Movie">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Title of section 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <span class="cd-date">Jan 18</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="img/AvatarNoImg.jpg" alt="Picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Title of section 3</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <span class="cd-date">Jan 24</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-location">
        <img src="img/AvatarNoImg.jpg" alt="Location">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Title of section 4</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <span class="cd-date">Feb 14</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-location">
        <img src="img/AvatarNoImg.jpg" alt="Location">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Title of section 5</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <span class="cd-date">Feb 18</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-movie">
        <img src="img/AvatarNoImg.jpg" alt="Movie">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Final Section</h2>
        <p>This is the content of the last section</p>
        <span class="cd-date">Feb 26</span>
      <div class="cd-timeline-ig cdm-movie">
        <img src="img/AvatarNoImg" alt="Location">
      </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->
  </section> <!-- cd-timeline -->
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->
  </body>
</html>
