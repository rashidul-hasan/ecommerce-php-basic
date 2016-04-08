<?php 
  
  require_once('scripts/dbconnect.php');
  global $conn;

  $action = isset($_GET['action']) ? $_GET['action'] : "";
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE product_id=$id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
  }
  
  if(isset($_GET['status'])){
    $status = $_GET['status'];
  } else {
    $status = "";
  }

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gadget Land | Product Details</title>
  <?php include 'inc/head.php'; ?>
  <style>
    .ui.card, .ui.cards>.card {
      width: 100%;
    }
  </style>
</head>
<body>
  <?php include 'inc/header.php' ?>
  
  <div class="container" id="main-content">

     <div class="message_box">
    <?php 
      if ($status=='true') { ?>
        <div class="ui info message center aligned">
          <div class="header">
            <?php echo 'Your review has been posted!'; ?>
          </div>
        </div>  
    <?php }
    if ($status=='false') { ?>
        <div class="ui warning message">
          <div class="header">
            <?php echo 'Something wrong! please try again'; ?>
          </div>
        </div>  

  <?php }  ?>
  </div>

     <div class="message_box">
    <?php 
      if ($action=='added') { ?>
        <div class="ui info message center aligned">
          <div class="header">
            <?php echo 'Product added to your cart!'; ?>
          </div>
        </div>  
    <?php }
    if ($action=='exists') { ?>
        <div class="ui warning message">
          <div class="header">
            <?php echo 'Product already exists in your cart!'; ?>
          </div>
        </div>  

  <?php }  ?>
  </div>
  

    <div class="ui grid">

      <div class="eight wide column">
        <img src="media/<?php echo $row['product_image']; ?>" alt="" class="ui image rounded huge">
      </div>

      <div class="eight wide column">
        <div class="ui segment">
          <h2 class="ui header">
            <?php echo $row['product_title']; ?>
            <div class="sub header">$<?php echo $row['product_price']; ?></div>
          </h2>
          <a class="ui button teal" href="<?php echo 'scripts/add_to_cart.php?id=' . $id . '&title=' . $row['product_title'] . '&price=' . $row['product_price'] . '&ref=single'; ?>">
              <i class="shop icon"></i>
              Add to cart
          </a>

          <h4 class="ui horizontal header divider">
            <i class="bar chart icon"></i>
            Description
          </h4>
          <p><?php echo $row['product_desc']; ?></p>

          <h4 class="ui horizontal header divider">
            <i class="tag icon"></i>
            Keywords
          </h4>

          <?php 
            $keywords = explode(' ' , $row['product_keywords']);
            foreach($keywords as $keyword) {
              echo "<a class='ui tag label'>$keyword</a>";  
            }
           ?>
          
        </div> <!--  end segment  --> 

      </div> <!--  end eight wide column  --> 
	  
    </div> <!--  end ui grid  --> 
	
	<div class="ui grid">
		<div class="eight wide column">
    
      <h3 class="ui dividing header">User Review</h3>  
      <?php 
        $sql_fetch_review = "SELECT * FROM review WHERE product_id = $id";
        $reviews = mysqli_query($conn, $sql_fetch_review); 
        if( mysqli_num_rows($reviews)){
            while($row = mysqli_fetch_array($reviews)){ ?>
                <div class="ui card">
                <div class="content">
                  <div class="header"><?php echo $row['title']; ?></div>
                  <div class="meta"><?php echo $row['email']; ?></div>
                  <div class="description">
                    <p><?php echo $row['fullreview']; ?></p>
                  </div>
                </div>
                <div class="extra content">
                  <i class="user icon"></i>
                  By <?php echo $row['name']; ?>
                </div>
              </div>

            <?php }
          } else { ?>

            <div class="ui message">
              <div class="header">
                No Review Yet!
              </div>
            </div>

          <?php }
         ?>
        
    
    </div>
		<div class="eight wide column">
			<div class="ui segment">
				<h1 class="ui header">Write a review</h1>
				<form action="review.php" class="ui form" method="post">
					<div class="field">
					  <label>Name</label>
					  <input placeholder="Name" type="text" name="fullname">
					</div>
					<div class="field">
					  <label>Email</label>
					  <input placeholder="Email" type="email" name="email">
					</div>
					<div class="field">
					  <label>Title</label>
					  <input placeholder="Title" type="text" name="title">
					</div>
					<div class="field">
						<label>Review</label>
						<textarea name="review"></textarea>
					</div>
          <input type="hidden" name="product_id" value="<?php echo $id; ?>">
					<input type="submit" class="ui submit teal button" value="Submit Review">
				</form>
			</div>
		</div>
	</div>
  
  </div>  
  <?php include 'inc/footer.php' ?>

  <script>
    $('.message').delay(3000).fadeOut('slow');
  </script>
</body>
</html>