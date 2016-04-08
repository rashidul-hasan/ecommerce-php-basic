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
		$id = $_POST['product_id'];

		//getting the image
		$product_photo = $_FILES['product_photo']['name'];
		$product_photo_tmp = $_FILES['product_photo']['tmp_name'];

		move_uploaded_file($product_photo_tmp, "../../media/$product_photo");
		$sql_update_product = "UPDATE product SET
							  product_cat=$category,product_brand=$brand,product_title='$title',product_price=$price,
							  product_desc='$description',product_image='$product_photo',product_keywords='$keywords',product_quantity=$quantity WHERE product_id=$id";

		$insert_success = mysqli_query($conn,$sql_update_product);
		if($insert_success){
			header("Location: ../index.php?page=edit-product&id=$id&status=true");
		} else {
			header("Location: ../index.php?page=edit-product&id=$id&status=false");
		}
		

	}

 ?>
