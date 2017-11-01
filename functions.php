<?php
$db = mysqli_connect('localhost', 'ninawb', 'Nina2014!', 'cochranguitars');
$Name = "";
$price    = "";
$imgThumb = "";
$img1    = "";
$img2 = "";
$img3    = "";
$img4 = "";
$img5   = "";
$paragraph1 = "";
$paragraph2    = "";


if (isset($_POST['submit_btn'])) {


	// call these variables with the global keyword to make them available in function
	global $db, $errors, $name, $price,
  $imgThumb, $img1, $img2, $img3, $img4, $img5, $paragraph1, $paragraph2;

  $Name = e($_POST['Name']);
  $price = e($_POST['price']);
  $imgThumb = e($_POST['imgThumb']);
  $img1 = e($_POST['img1']);
  $img2 = e($_POST['img2']);
  $img3 = e($_POST['img3']);
  $img5 = e($_POST['img5']);
  $paragraph1 = e($_POST['paragraph1']);
  $paragraph2 = e($_POST['paragraph2']);




			$query = "INSERT INTO stock (Name, price, imageThumb, img1,
        img2, img3, img4, img5, paragraph1, paragraph2)
					  VALUES('$Name', '$price', '$imgThumb', '$img1',
              '$img2', '$img3', '$img4', '$img5', '$paragraph1', '$paragraph2')";
			mysqli_query($db, $query);

			header('location: admin.php');

	}

  function e($val){
  	global $db;
  	return mysqli_real_escape_string($db, trim($val));
  }
