<?php 
	if(isset($_GET['status'])){
			$status = $_GET['status'];
			if($status == 'true'){
					$class = "success";
					$msg = "<i class='checkmark box icon'></i>New product added succesfully! 
	  							<p>this message will automatically be dismissed in a moment</p>";		
			} else {
					$class = "error";
					$msg = "<i class='warning sign icon'></i>Sorry! Something went wrong 
	  							<p>please check everything and try again.</p>";				
			}

	} else{
		$class = "hidden";
	}
?>
	<div class="ui <?php echo $class; ?> message">
	  <div class="header">
	  	<?php echo $msg; ?> 
	  </div>
	</div>

		<h1 class="ui header dividing">Add New Product</h1>
<form action="scripts/upload_process.php" method="post" enctype="multipart/form-data">
	<div class="ui form">
		<div class="two fields">
			<div class="field">
				<label for="product_title">Product Title</label>
				<input type="text" id="product_title" name="product_title">
			</div>
			<div class="field">
				<label for="product_quantity">Quantity</label>
				<input type="number" value="1" min="1" id="product_quantity" name="product_quantity">
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
			<div class="field"><label for="price">Price</label><input type="number" id="price" name="price" step="0.01" min="0"></div>
			</div>
			<div class="field">
				<label for="description">Description</label>
				<textarea name="description" id="description"></textarea>
			</div>
			<div class="field">
				<label for="product_photo">Image (Max size 1MB)</label>
				<input type="file" id="product_photo" name="product_photo" accept="image/jpeg">
			</div>
			<div class="field">
				<label for="keywords">Keywords</label>
				<input type="text" id="keywords" name="keywords">
			</div>
	</div>

	<input type="submit" class="ui button green right floated" value="Add" name="submit">
</form>

