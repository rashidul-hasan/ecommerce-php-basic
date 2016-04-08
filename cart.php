<?php
	require_once('scripts/functions.php');
	$totalPrice = 0;
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Your Cart</title>
	<?php include 'inc/head.php'; ?>
</head>
<body>
	<?php include 'inc/header.php' ?>
	
	<div class="container" id="main-content">
		<div class="ui grid">
			<div class="sixteen wide column">
			<!-- <h2 class="ui header dividing">Your Cart</h2> -->
							
				<?php 

					$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : "";

				?>

				<?php
					if( empty($cart) ) {  ?>
						<div class="ui icon message">
						  <i class="frown icon"></i>
						  <div class="content">
						    <div class="header">
						      Your cart is empty!
						    </div>
						  </div>
						</div>
				<?php	} else { ?>

					<a href="scripts/update_cart.php?action=empty" class="ui button orange right floated" style="margin-bottom:10px;">
						<i class="recycle icon"></i>
						Empty Cart
					</a>

					<table class="ui table celled">
					  <thead>
					  	<tr>
					  		<th colspan="5">Your Cart</th>
  						</tr>
					  </thead>
					  <thead>
					    <tr>
					      <th>Name</th>
					      <th>Price</th>
					      <th>Quantity</th>
					      <th>Sub Total</th>
					      <th>Action</th>
					    </tr>
					  </thead>  
			  <tbody>

				<?php
					foreach($cart as $id){  ?>

						<tr>
			      <td><?php echo $id['title']; ?></td>
			      <td>$<?php echo $id['price']; ?></td>
			      <td>
			      	<div class="ui input">
							<input type="text" placeholder="<?php echo $id['quantity']; ?>">
							</div>
						</td>
			      <td>$
			      	<?php
			       		$subTotal = $id['price'] * $id['quantity'];
			       		$totalPrice += $subTotal;
			       		echo $subTotal;
			        ?>
			       </td>
			      <td>
				      <a class="ui vertical animated button red" href="<?php echo 'scripts/update_cart.php?action=remove&id=' . $id['product_id']; ?>">
							  <div class="hidden content">
							  	Remove
							  </div>
							  <div class="visible content">
							    <i class="remove icon"></i>
							  </div> 
							 </a>
						</td>
			    </tr>

			<?php			
					}
				?>
				
				<tr>
					<td></td>
					<td></td>
					<td>Total</td>
					<td>$ <?php echo $totalPrice; ?></td>
					<td></td>
				</tr>
				  </tbody>
			</table>

			<a href="" class="ui button green right floated">
				<i class="share icon"></i>
				Checkout
			</a>


			<a href="" class="ui basic button right floated">
				<i class="refresh icon"></i>
				Update Cart
			</a>

			<a href="index.php" class="ui button green right floated">
				<i class="reply icon"></i>
				Continue Shopping
			</a>

			<?php	} ?>


			</div>
		</div> <!--  end ui.grid  --> 

	</div> <!--  end #main-content  --> 
	<?php //include 'inc/footer.php' ?>
</body>
</html>


