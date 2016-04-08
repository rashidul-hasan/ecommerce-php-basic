<h1 class="ui header dividing">All Products</h1>

<?php 

	global $conn;
	$sql = "SELECT * FROM product";
	$result = mysqli_query($conn,$sql);

 ?>

<table class="ui celled striped table">
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Category</th>
      <th>Brand</th>
      <th>Quantity</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>

	<?php 

		while ( $row = mysqli_fetch_assoc($result) ) { ?>
			<tr>
				<td><?php echo $row['product_title']; ?></td>
				<td><?php echo $row['product_cat']; ?></td>
				<td><?php echo $row['product_brand']; ?></td>
				<td><?php echo $row['product_quantity']; ?></td>
				<td>
					<a href="<?php echo 'index.php?page=edit-product&id=' . $row['product_id']; ?>" class="ui animated fade button">
					  <div class="visible content"><i class="configure icon"></i></div>
					  <div class="hidden content">
					    Edit
					  </div>
					</a>
					<a class="ui animated fade button red">
					  <div class="visible content"><i class="remove icon"></i></div>
					  <div class="hidden content">
					    Remove
					  </div>
					</a>	
				</td>
			</tr>

<?php	} ?>

  </tbody>
 </table>