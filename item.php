<?php
if(!isset($_GET['stockID'])) {
    header("Location: index.php");
}

$item_sql="SELECT * FROM stock WHERE stockID=".$_GET['stockID'];
if($item_query=mysqli_query($dbconnect, $item_sql)) {
    $item_rs=mysqli_fetch_assoc($item_query);
    ?>
<div class="mt-3" id="item">




  <div id="slider2" class="carousel slide m-auto" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="Images/<?php echo $item_rs['img1']; ?>" alt="First Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="Images/<?php echo $item_rs['img2']; ?>" alt="Second Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="Images/<?php echo $item_rs['img3']; ?>" alt="Third Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="Images/<?php echo $item_rs['img4']; ?>" alt="Second Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="Images/<?php echo $item_rs['img5']; ?>" alt="Third Slide">
      </div>
    </div>
    <a href="#slider2" class="carousel-control-prev" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>

    <a href="#slider2" class="carousel-control-next" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <div class="col-sm-6 m-auto"id="itemDes">
<h2  class="display-4 text-left mb-2 mt-3" id="name" id="name"><?php echo $item_rs['Name']; ?></h2>
<p id="price" class="lead mb-4 text-left">$<?php echo $item_rs['price']; ?></p>
<p class="lead text-left"><?php echo $item_rs['paragraph1']; ?></p>
<p class="lead text-left"><?php echo $item_rs['paragraph2']; ?></p>
</div>






</div>
    <?php
}




?>
