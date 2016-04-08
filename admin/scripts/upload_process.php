<?php 

	require_once('dbconnect.php');

	if(isset($_POST['submit'])){

		// getting all the form data from POST superglobal
		$title = $_POST['product_title'];
		$price = $_POST['price'];
		$category = $_POST['category'];
		$brand = $_POST['brand'];
		$description = $_POST['description'];
		$keywords = $_POST['keywords'];
		$quantity = $_POST['product_quantity'];

		//getting the image
		$product_photo = $_FILES['product_photo']['name'];
		$product_photo_tmp = $_FILES['product_photo']['tmp_name'];

		move_uploaded_file($product_photo_tmp, "../../media/$product_photo");
		$sql_insert_product = "INSERT INTO product 
							  (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords,product_quantity)
							  VALUES($category,$brand,'$title',$price,'$description','$product_photo','$keywords',$quantity)";

		$insert_success = mysqli_query($conn,$sql_insert_product);
		if($insert_success){
			header("Location: ../index.php?page=add-new-product&status=true");
		} else {
			header("Location: ../index.php?page=add-new-product&status=false");
		}
		

	}

 ?>