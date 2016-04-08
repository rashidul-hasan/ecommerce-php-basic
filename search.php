<?php 

	require_once('scripts/functions.php');

	$action = isset($_GET['action']) ? $_GET['action'] : "";
	$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
	$product_title = isset($_GET['name']) ? $_GET['name'] : "";
	$searchterm = isset($_GET['searchterm']) ? trim($_GET['searchterm']) : "";
 
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
				 
				<div class="ui divided items"> 

					<?php 
						global $conn;
						$sql = "SELECT * FROM product WHERE product_keywords LIKE '%$searchterm%'";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($result)){ ?>
							<div class="item">
						    <div class="image">
						      <img src="media/<?php echo $row['product_image']; ?>">
						    </div>
						    <div class="content">
						      <a class="header"><?php echo $row['product_title']; ?></a>
						      <div class="meta">
						        <span class="cinema">$<?php echo $row['product_price']; ?></span>
						      </div>
						      <div class="description">
						        <p>
							        <?php 
										    		$description = $row['product_desc'];
										    		$pos = strpos( $description , ' ' , 100 );
														$description = substr($description , 0 , $pos );
														echo $description . '[...]';
										    	?>
									  </p>
						      </div>
						      <div class="extra">
						        <a class="ui teal button right floated" href="single.php?product_id=<?php echo $row['product_id']; ?>">
								        	Details
								    </a>
						      </div>
						    </div>
						  </div>
					<?php	}


					 ?>

				  


			  </div> <!--  end items  --> 

			</div> <!--  end .tweleve.wide.column  --> 

		</div> <!--  end ui.grid  --> 

	</div> <!--  end #main-content  --> 
	<?php include 'inc/footer.php' ?>


	<script>
		$('.message').delay(3000).fadeOut('slow');
	</script>
</body>
</html>


