<?php 
require_once('scripts/dbconnect.php');
global $conn;

$name = $_POST['fullname'];
$email = $_POST['email'];
$title = $_POST['title'];
$review = $_POST['review'];

$product_id = $_POST['product_id'];

echo $name;
echo $title;
echo $review;
echo $product_id;
echo $email;

$sql = "INSERT INTO review (name, email, title, fullreview, product_id)
				VALUES ('$name', '$email', '$title', '$review', $product_id)";

echo '<br>'.$sql;

$post_review =  mysqli_query($conn,$sql);

if ($post_review) {
	header("Location: single.php?id=$product_id&status=true");
}	else {
	header("Location: single.php?id=$product_id&status=false");
}

 ?>