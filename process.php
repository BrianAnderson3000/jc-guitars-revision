
<?php
include 'database.php';


$target_dir = "C:\\xampp\htdocs\Jeremy Cochran Guitars\Images\\";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {

        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}










$target_dir1 = "C:\\xampp\htdocs\Jeremy Cochran Guitars\Images\\";
$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check1 = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check1 !== false) {

        $uploadOk1 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk1 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file1)) {
    echo "Sorry, file already exists.";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["fileToUpload1"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}
// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}





$target_dir2 = "C:\\xampp\htdocs\Jeremy Cochran Guitars\Images\\";
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$uploadOk2 = 1;
$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check2 = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    if($check2 !== false) {

        $uploadOk2 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk2 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file2)) {
    echo "Sorry, file already exists.";
    $uploadOk2 = 0;
}
// Check file size
if ($_FILES["fileToUpload2"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk2 = 0;
}
// Allow certain file formats
if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
&& $imageFileType2 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk2 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk2 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$target_dir3 = "C:\\xampp\htdocs\Jeremy Cochran Guitars\Images\\";
$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$uploadOk3 = 1;
$imageFileType3 = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check3 = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
    if($check3 !== false) {

        $uploadOk3 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk3 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file3)) {
    echo "Sorry, file already exists.";
    $uploadOk3 = 0;
}
// Check file size
if ($_FILES["fileToUpload3"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk3 = 0;
}
// Allow certain file formats
if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
&& $imageFileType3 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk3 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk3 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$target_dir4 = "C:\\xampp\htdocs\Jeremy Cochran Guitars\Images\\";
$target_file4 = $target_dir . basename($_FILES["fileToUpload4"]["name"]);
$uploadOk4 = 1;
$imageFileType4 = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check4 = getimagesize($_FILES["fileToUpload4"]["tmp_name"]);
    if($check4 !== false) {

        $uploadOk4 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk4 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file4)) {
    echo "Sorry, file already exists.";
    $uploadOk4 = 0;
}
// Check file size
if ($_FILES["fileToUpload4"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk4 = 0;
}
// Allow certain file formats
if($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg"
&& $imageFileType4 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk4 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk4 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file4)) {

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$target_dir5 = "C:\\xampp\htdocs\Jeremy Cochran Guitars\Images\\";
$target_file5 = $target_dir . basename($_FILES["fileToUpload5"]["name"]);
$uploadOk5 = 1;
$imageFileType5 = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check5 = getimagesize($_FILES["fileToUpload5"]["tmp_name"]);
    if($check5 !== false) {

        $uploadOk5 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk5 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file5)) {
    echo "Sorry, file already exists.";
    $uploadOk5 = 0;
}
// Check file size
if ($_FILES["fileToUpload5"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk5 = 0;
}
// Allow certain file formats
if($imageFileType5 != "jpg" && $imageFileType5 != "png" && $imageFileType5 != "jpeg"
&& $imageFileType5 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk5 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk5 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_file5)) {

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


// create a variable
$catergoryID=$_POST['catergoryID'];
$Name=$_POST['Name'];
$price=$_POST['price'];
$imgThumb=$_POST['imgThumb'];
$img1=$_POST['img1'];
$img2=$_POST['img2'];
$img3=$_POST['img3'];
$img4=$_POST['img4'];
$img5=$_POST['img5'];
$paragraph1=$_POST['paragraph1'];
$paragraph2=$_POST['paragraph2'];





if($Name == ""){
  echo "Please enter an item name.</br><a href='admin.php'>Go Back</a>";
  return false;
}

if($price == ""){
  echo "Please enter an item price.</br><a href='admin.php'>Go Back</a>";
  return false;
}

//Execute the query
else{

mysqli_query($connect,"INSERT INTO stock (catergoryID,Name,price,imgThumb,img1,img2,img3,img4,img5,
paragraph1,paragraph2)
		        VALUES ('$catergoryID','$Name','$price','$imgThumb','$img1','$img2','$img3','$img4','$img5',
            '$paragraph1','$paragraph2')");

	if(mysqli_affected_rows($connect) > 0){
	echo "Item Added</br>";

} else {
	echo 'Item NOT Added</br><a href="admin.php">Go Back</a>';
	echo mysqli_error ($connect);
}
}




?>

<a href="admin.php">Go Back</a></br>

<p><a href="admin.php?page=admin&logout=true">Logout</a></p>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</html>
