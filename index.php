<?php 

	require_once('scripts/functions.php');

	$action = isset($_GET['action']) ? $_GET['action'] : "";
	$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
	$product_title = isset($_GET['name']) ? $_GET['name'] : "";
 
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
	 
	 <div class="message_box">
  	<?php 
  		if ($action=='added') { ?>
  			<div class="ui info message center aligned">
  				<div class="header">
    				<?php echo 'Product added to your cart!'; ?>
    			</div>
    		</div>	
		<?php	}
		if ($action=='exists') { ?>
		    <div class="ui warning message">
  				<div class="header">
    				<?php echo 'Product already exists in your cart!'; ?>
    			</div>
    		</div>	

	<?php	}  ?>
	</div>
  
      
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
				<div class="ui three column grid">

					<?php 
						global $conn;
						$sql = "SELECT * FROM product";
						$result = mysqli_query($conn,$sql);
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
								    	<a class="ui button right floated" href="single.php?id=<?php echo $row['product_id']; ?>">
								        	Details
								    	</a>

								    	<?php 
								    		$id = $row['product_id'];
								    		$title = $row['product_title'];
								    		$price = $row['product_price'];
								    	 ?>
									    <a class="ui button teal" href="<?php echo 'scripts/add_to_cart.php?id=' . $id . '&title=' . $title . '&price=' . $price . '&ref=index'; ?>">
									        <i class="shop icon"></i>
									        Buy Now
									    </a>
								    </div>

								</div> <!--  end ui.card  --> 
							</div> <!--  end column  --> 

					<?php } ?>

				</div> <!--  three.column.grid  --> 

			</div> <!--  end .tweleve.wide.column  --> 

		</div> <!--  end ui.grid  --> 

	</div> <!--  end #main-content  --> 
	<?php include 'inc/footer.php' ?>


	<script>
		$('.message').delay(3000).fadeOut('slow');
	</script>
</body>
</html>


