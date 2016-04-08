<?php 
	require_once('scripts/functions.php');
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gadget Land | Home</title>
	<?php include 'inc/head.php'; ?>
</head>
<body>
	<?php include 'inc/header.php' ?>
	
	<div class="container" id="main-content">
		<div class="ui grid">
			<div class="four wide column">
				<div class="ui vertical menu">
					<div class="header item">
    					<i class="user icon"></i>
    					Categories
  					</div>
					<?php get_category(); ?>
				</div>

				<div class="ui vertical menu">
					<div class="header item">
    					<i class="user icon"></i>
    					Brands
  					</div>
					<?php get_brand(); ?>
				</div>


			</div> 
			<div class="twelve wide column">
				
				<?php 

					global $conn;
					if (isset($_GET['brand_id'])) {
						$brand_id = $_GET['brand_id'];
					}
					$sql = "SELECT brand_name FROM brand WHERE brand_id = $brand_id";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);

				 ?>
				<h2 class="ui header dividing">Brand : <?php echo $row['brand_name']; ?></h2>
				<div class="ui three column grid">

					<?php 

						$sql = "SELECT * FROM product WHERE product_brand = $brand_id";
						$result = mysqli_query($conn,$sql);
						if ($result) {
							if (mysqli_num_rows($result) != 0) {

								while($row = mysqli_fetch_array($result)){ ?>
							
								<div class="column">
									<div class="ui card">

										<div class="image">
											<img src="media/<?php echo $row['product_image']; ?>">
										</div>

										<div class="content">
											<a class="header"><?php echo $row['product_title']; ?></a>
										    <div class="meta">
										    	<span class="price">$<?php echo $row['product_price']; ?></span>
										    </div>
										    <div class="description">
										    	<?php 
										    		$description = $row['product_desc'];
										    		$pos = strpos( $description , ' ' , 50 );
														$description = substr($description , 0 , $pos );
														echo $description . '[...]';
										    	?>
										    </div>
										</div>
										
										<div class="extra content">
									    	<a class="ui button right floated" href="single.php?product_id=<?php echo $row['product_id']; ?>">
									        	Details
									    	</a>
										    <a class="ui button teal">
										        <i class="shop icon"></i>
										        Buy Now
										    </a>
									    </div>

									</div> <!--  end ui.card  --> 
								</div> <!--  end column  --> 

						<?php } 

							} else {  ?>
								<div class="column">
									<div class='ui icon message'>
										<i class='frown icon'></i>
										<div class='content'>
										    <div class='header'>
										      Sorry! No Products in this Brand.
										    </div>
										</div>
									</div>
								</div>
						<?php	}
						}
					?>	
						

				</div> <!--  three.column.grid  -->

			</div> <!--  end .tweleve.wide.column  --> 

		</div> <!--  end ui.grid  --> 

	</div> <!--  end #main-content  --> 
	<?php include 'inc/footer.php' ?>
</body>
</html>


