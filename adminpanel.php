<!DOCTYPE html>
<?php
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<html>

 <body>
  <h1>Submit a new Item</h1>
  <p>For step 1, type in the catergory ID based on the item catergory list below:
  <ul class="list-group">
<li class="list-group-item list-group-item-info">Cookie Tin Guitars catergory ID = 1</li>
<li class="list-group-item list-group-item-info">Cookie Tin Banjos catergory ID = 2</li>
<li class="list-group-item list-group-item-info">Cookie Tin Bass Guitars catergory ID = 3</li>
    </ul>

  <form method="post" action="process.php" enctype="multipart/form-data">

<div class="text-left">
      <div class="form-group">
      </br><label>1. Catergory ID:</label></br>
      <input class="form-control" type="number" name="catergoryID" />
      <br /></div>
  <div class="form-group"><label>2. Item Name:</label></br>
  <input class="form-control" type="text" name="Name" />
  <br /></div>
  <div class="form-group"<label>3. Item Price (do not include $):</label></br>
  <input class="form-control" type="text" name="price" />
  <br /></div>
  <div class="form-group"<label>4a. Select Thumbnail Image:</label></br></br>
  <input class="form-control-file" type="file" name="fileToUpload" id="fileToUpload">
</br>
<li class="list-group-item list-group-item-info">For database purposes, you must
  also type the exact file name of the thumbnail image below:</li></div>
  <div class="form-group"><label>4b. Thumbnail Image file name:</label></br>
  <input class="form-control" type="text" name="imgThumb" /></br></div>

  <div class="form-group"><label>5a. Select Image 1:</label></br>
  <input class="form-control-file" type="file" name="fileToUpload1" id="fileToUpload1">
  </br><li class="list-group-item list-group-item-info">For database purposes, you must
    also type the exact file name of Image 1 below:</li></div>
  <div class="form-group"><label>5b. Image 1 file name:</label></br>
  <input class="form-control" type="text" name="img1" />
</br></div>


  <div class="form-group"><label>6a. Select Image 2:</label></br>
  <input class="form-control-file" type="file" name="fileToUpload2" id="fileToUpload2">
  <br /><li class="list-group-item list-group-item-info">For database purposes, you must
    also type the exact file name of Image 2 below:</li></div>
  <div class="form-group"><label>6b. Image 2 file name:</label></br>
  <input class="form-control" type="text" name="img2" />
  <br /></div>

  <div class="form-group"><label>7a. Select Image 3:</label></br>
  <input class="form-control-file" type="file" name="fileToUpload3" id="fileToUpload3">
</br><li class="list-group-item list-group-item-info">For database purposes, you must
  also type the exact file name of Image 3 below:</li></div>
  <div class="form-group"><label>7b. Image 3 file name:</label></br>
  <input class="form-control" type="text" name="img3" />
  </br></div>
  <div class="form-group"><label>8a. Select Image 4:</label></br>
  <input class="form-control-file" type="file" name="fileToUpload4" id="fileToUpload4">
</br><li class="list-group-item list-group-item-info">For database purposes, you must
  also type the exact file name of Image 4 below:</li></div>
  <div class="form-group"><label>8b. Image 4 file name:</label></br>
  <input class="form-control" type="text" name="img4" />
</br></div>
  <div class="form-group"><label>9a. Select Image 5:</label></br>
  <input class="form-control-file" type="file" name="fileToUpload5" id="fileToUpload5">
</br><li class="list-group-item list-group-item-info">For database purposes, you must
  also type the exact file name of Image 1 below:</li></div>
  <div class="form-group"><label>9b. Image 5 file name:</label></br>
  <input class="form-control" type="text" name="img5" />
</br></div>
  <div class="form-group"><label>10. Item Description Paragraph 1</label></br>
  <input class="form-control" type="text" name="paragraph1" />
</br></div>
  <div class="form-group"><label>11. Item Description Paragraph 2</label></br>
  <input class="form-control" type="text" name="paragraph2" /></div>
</div>

  <button class="btn btn-primary" type="submit" name="submit" value="Add Item">Add Item</button>
  </form>
</br>
	<p><a href="admin.php?page=admin&logout=true">Logout</a></p>

</body>
</html>
