
  <nav class="navbar navbar-expand-lg navbar-dark
  bg-dark">
  <div class="container">
  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
    <h1 id="brand">Jeremy Cochran Guitars</h1><div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto text-left text-uppercase">
        <li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
    </li>

    <?php
  include("catergoryList.php");
  ?>
  <a class="nav-link" href="contact.php">Contact</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="about.php">About</a>
  </li>
  </ul>
  <form class="form-inline my-2 my-lg-0"  method="POST" action="searchresults.php" >
  <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search">
  <button type="submit" name="submit" class="btn btn-outline-info my-2 my-sm-0">Search</button>
  </form>

  </div>
  </div>
  </nav>
