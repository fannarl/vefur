<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php
      session_start();
      //include "loadprofile.php";
      
    ?>
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

   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

  
  
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="c01.css">
    <link rel="stylesheet" href="profile.css">
    
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

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="http://lorempixel.com/180/180/people/9/" alt="Profile image example"/>
        <div class="fb-profile-text">
        <?php
          //$_SESSION["Name"] = $row['Name'];
          echo $_SESSION["Username"]."<br>";
          echo $_SESSION['Name']."<br>";
          echo $_SESSION['Email']."<br>";
          echo $_SESSION['Phone']."<br>";
        ?>
        </div>      
    </div>
</div> <!-- /container -->  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="accordion.js"></script>
  </body>
</html>
