<?php
    if(!isset($_GET['catergoryID'])) {
        header("Location:index.php");
    }

    $stock_sql="SELECT stock.stockID, stock.Name, stock.price, stock.imgThumb,
    stock.img1, stock.img2, stock.img3, stock.img4, stock.img5, stock.paragraph1,
    stock.paragraph2,
    cochran_catergory.name AS catname FROM stock
    JOIN cochran_catergory ON stock.catergoryID=cochran_catergory.catergoryID
    WHERE stock.catergoryID=".$_GET['catergoryID'];
if($stock_query=mysqli_query($dbconnect, $stock_sql)) {
    $stock_rs=mysqli_fetch_assoc($stock_query);
}

if(mysqli_num_rows($stock_query)==0) {
    echo "Sorry, no items to display";
}

else {
   do {
        ?>
    <body>
        <a href="index.php?page=item&stockID=<?php echo $stock_rs['stockID']; ?>">

        <div class="mt-3" id="item">
        <div class="item_box">
        <p><img class="thumb" src="Images/<?php echo $stock_rs['imgThumb']; ?>"/></p>
        <p class="lead"><?php echo $stock_rs['Name']; ?></p>
        <p class="lead">$<?php echo $stock_rs['price']; ?></p></a>
        </div>
        </div>
      </body>
<?php
    } while($stock_rs=mysqli_fetch_assoc($stock_query));
    ?>


    <?php
}
?>
