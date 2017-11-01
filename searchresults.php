<!DOCTYPE html>
<?php include ("dbconnect.php");
if(!isset($_POST['search'])){
  header("Location:index.php");
}

$search_sql="SELECT * FROM stock WHERE Name LIKE '%".$_POST['search']."%' OR paragraph1 LIKE'%".$_POST['search']."%'";
$search_query=mysqli_query($dbconnect,$search_sql);
if(mysqli_num_rows($search_query) !=0){
  $search_rs=mysqli_fetch_assoc($search_query);
}



 ?>
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <title>Jeremy Cochran Cookie Tin Guitars | Cookie Tin Banjos Canton, Ga.</title>
   <meta name="description" content="Jeremy Cochran luthier of handmade Cookie Tin guitars and Cookie Tin banjos in Canton, Ga.">
   <meta name="keywords" content="Jeremy Cochran, Handmade cookie tin guitars and banjos, Canton, Ga.">
   <meta name="author" content="Jeremy Cochran">
   <link rel="stylesheet" href="Styles/main.css" />

<body>
 </head>
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

 <h1 class="lead display-4 mt-2">Search Results</h1>

 <?php if(mysqli_num_rows($search_query) !=0){
   do{ ?>
     <div class="mt-3" id="item">
       <div class="item_box">

     <a href="index.php?page=item&stockID=<?php echo $search_rs['stockID']; ?>">
       <p><img class="thumb" src="Images/<?php echo $search_rs['imgThumb']; ?>"/></p>
       <p class="lead"><?php echo $search_rs['Name']; ?></p>
       <p class="lead">$<?php echo $search_rs['price']; ?></p>
       </a>
              </div>
              </div>

<?php   } while ($search_rs=mysqli_fetch_assoc($search_query));
 } else {
   echo "No results found.";
 }
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
