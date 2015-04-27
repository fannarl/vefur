
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
    <link rel="stylesheet" href="css/createEvent.css">
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

    <div class="InsertEvent">
      <form action="InsertEvent.php" method="post">
        <div><label>Name:</label><br>
          <input type="text" name="name"></div><br>
        <div><label>Date:</label><br>
          <input data-format='dd/MM/yyyy hh:mm:ss' type='text' name="date" maxlength="19"></div><br>
        <div><label>Location:</label><br>
          <input type="text" name="location"></div><br>
          <div><label>Category:</label><br>
            <select name="Category" size="1">
              <option value="europe">europe</option>
              <option value="namerica">n. america</option>
              <option value="samerica">s. america</option>
              <option value="asia">asia</option>
              <option value="africa">africa</option>
              <option value="oz">the other one</option>
            </select><br><br>
          </div>
        <div><label>Description:</label><br>
          <textarea cols="19" rows="10" name="Description"></textarea><br>
        </div>
      </form>
      <form class="navbar-form navbar-right" action="createEvent.html.php" method="post">
          <button type="submit" class="btn btn-success">Create Event</button>
        </form>

    </div>


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
