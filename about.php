<!DOCTYPE HTML>
<?php
include("dbconnect.php");
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <title>Jeremy Cochran Cookie Tin Guitars | Cookie Tin Banjos Canton, Ga.</title>
  <meta name="description" content="Jeremy Cochran Cookie Tin Guitars and Cookie Tin Banjos in Canton, Ga.">
  <meta name="keywords" content="Jeremy Cochran, cookie tin guitars, cookie tin banjos, Canton, Ga.">
  <meta name="author" content="Jeremy Cochran">
<link rel="stylesheet" href="Styles/main.css" />

</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-sm navbar-dark
    bg-dark mb-3">
    <div class="container">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto text-uppercase">
          <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
      </li>

  </li>
      <?php
    include("catergoryList.php");
    ?>
    <li class="nav-item">
<a class="nav-link" href="contact.php">Contact</a>
</li>
<li class="nav-item">
<a class="nav-link" href="about.php">About</a>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <input type="text" class="form-control mr-sm-2" placeholder="Search">
    <button class="btn btn-outline-info my-2 my-sm-0">Search</button>
    </form>

    </div>
    </div>
    </nav>






  </header>
  <div class="container">
    <div class="about">
      <h1>Meet Jeremy Cochran</h1>
      <br/>
      <p id="aboutp" class="lead">Jeremy Cochran is a guitar and voice
        teacher from Woodstock Georgia.</p>

      <p id="aboutp"class="lead">In addition to working as a luthier, Jeremy is a local performing musician.</p><br>
      <p  id="aboutp"class="lead">Here's Jeremy performing a demo at Ponier Music-               </p>
      <br/>
      <br/>
      <iframe align="middle" src="https://www.youtube.com/embed/z4mLJk5PgE4" allowfullscreen>
      </iframe>
    </br>
  </br>

      <p id="aboutp" class="lead">And here Jeremy performs with The Simple Beats-</p>
      <br/>
      <br/>
      <iframe align="middle" src="https://www.youtube.com/embed/rUdyBo-6FmU" allowfullscreen></iframe>
    </div>
</div>

  <footer class="text-center">
    <p class="lead">&copy; Jeremy Cochran Guitars</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>



</html>
