<?php 
	require_once('scripts/dbconnect.php');
	// $_SESSION['username'] = 'test';
	// $_SESSION['user_id'] = 'test';
	//session_destroy();
 ?>

<!doctype html>
<html lang="en">
<head>
	<title>
		<?php 
					if(isset($_GET['page'])){
						$page = $_GET['page'];
						switch($page){
							case 'add-new-product' :
								echo 'Add New Product';
								break;
							case 'view-all-product' :
								echo 'View All Product';
								break;
							case 'add-new-category' :
								echo 'Add New Category';
								break;
							case 'view-all-category' :
								echo 'View All Category';
								break;
							case 'add-new-brand' :
								echo 'Add New Brand';
								break;
							case 'edit-product' :
								echo 'Edit Product';
								break;	
							case 'view-all-brand' :
								echo 'View All Brand';
								break;
							default :
												
						} 
					} else {
							echo 'Admin Panel Home';
						}
				 ?>
	</title>
	<?php include('inc/head.php'); ?>
</head>
<body>

<?php 

	//if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
		 include('inc/header.php') ?>

	<div class="container" id="main-content">
		<div class="ui grid">
			<div class="three wide column">
				<?php include('inc/side-menu.php'); ?>
			</div>
			<div class="ten wide column">
				<?php 
					if(isset($_GET['page'])){
						$page = $_GET['page'];
						switch($page){
							case 'add-new-product' :
								include('inc/add-new-product.php');
								break;
							case 'view-all-product' :
								include('inc/view-all-product.php');
								break;
							case 'add-new-category' :
								include('inc/add-new-category.php');
								break;
							case 'view-all-category' :
								include('inc/view-all-category.php');
								break;
							case 'add-new-brand' :
								include('inc/add-new-brand.php');
								break;
							case 'edit-product' :
								include('inc/edit-product.php');
								break;	
							case 'view-all-brand' :
								include('inc/view-all-brand.php');
								break;
							default :
								echo 'Woops! something wrong!';				
						}
					} else{
						include('inc/admin-home.php');
					}
				 ?>
			</div>
			<div class="three wide column">
				<?php include('inc/sidebar-summary.php'); ?>
			</div>
		</div>
	</div> <!--  end container  --> 
	<?php include('inc/footer.php') ?>  
	
	<?php	//} else { ?>
		<!-- <div class="ui six column centered grid" id="login-form">
		  <div class="column">
		  	<div class="ui pointing below big label">
		 			Please login here to access admin area
		 		</div>
		    <form class="ui form segment" action="scripts/login_process.php" method="post">
		      <div class="field">
		        <label>Username</label>
		        <div class="ui left icon input">
		          <input type="text" placeholder="Username" name="username">
		          <i class="user icon"></i>
		        </div>
		      </div>
		      <div class="field">
		        <label>Password</label>
		        <div class="ui left icon input">
		          <input type="password" name="password">
		          <i class="lock icon"></i>
		        </div>
		      </div>
		        <div class="inline field">
					    <div class="ui toggle checkbox">
					      <input type="checkbox" name="remember" value="on">
					      <label>Remember me</label>
					    </div>
					  </div>
		      <input type="submit" class="ui teal button" value="Login">
		    </form>
			</div>
		</div> -->

<?php	//} ?>




	







	<script>
		$('.message').delay(3000).fadeOut('slow');
		$('.ui.checkbox').checkbox();
	</script>
</body>
</html>
