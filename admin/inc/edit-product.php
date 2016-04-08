<?php 

	global $conn;
	if (isset( $_GET['id'] )) {
		$id = $_GET['id'];
		$sql = 'SELECT * FROM product WHERE product_id = ' . $id;
		$result = mysqli_query($conn, $sql);
		$product = mysqli_fetch_assoc($result);
	}
	

 ?>


<h1 class="ui header dividing">Edit Product</h1>
<form action="scripts/update_product.php" method="post" enctype="multipart/form-data">
	<div class="ui form">
		<div class="two fields">
			<div class="field">
				<label for="product_title">Product Title</label>
				<input type="text" id="product_title" name="product_title" value="<?php echo $product['product_title']; ?>">
			</div>
			<div class="field">
				<label for="product_quantity">Quantity</label>
				<input type="number" value="<?php echo $product['product_quantity']; ?>" min="1" id="product_quantity" name="product_quantity">
			</div>		
		</div>
		<div class="three fields">
			<div class="field">
				<label>Category</label>				
				<select name="category">
					<option value="">Select One</option>
						<?php 
							$sql = "SELECT * FROM category";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_array($result)){
								$category_id = $row['category_id'];
								$category_name = $row['category_name'];
								echo "<option value='$category_id'>$category_name</option>";
							}
						?>
				</select>
			</div>		
			<div class="field">
				<label>Brand</label>
				<select name="brand">
					<option value="">Or Select</option>
					<?php 
							$sql = "SELECT * FROM brand";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_array($result)){
								$brand_id = $row['brand_id'];
								$brand_name = $row['brand_name'];
								echo "<option value='$brand_id'>$brand_name</option>";
							}
						?>
				</select>
			</div>
			<div class="field">
				<label for="price">Price</label>
				<input type="number" id="price" name="price" step="0.01" min="0" value="<?php echo $product['product_price']; ?>">
			</div>
			</div>
			<div class="field">
				<label for="description">Description</label>
				<textarea name="description" id="description"><?php echo $product['product_desc']; ?></textarea>
			</div>
			<div class="field">
				<label for="product_photo">Image (Max size 1MB)</label>
				<input type="file" id="product_photo" name="product_photo" accept="image/jpeg" required>
			</div>
			<div class="field">
				<label for="keywords">Keywords</label>
				<input type="text" id="keywords" name="keywords" value="<?php echo $product['product_keywords']; ?>">
			</div>
	</div>

	<input type="hidden" name="product_id" value="<?php echo $id ?>">
  <input type="submit" class="ui button green right floated" value="Save" name="submit">	
</form>

