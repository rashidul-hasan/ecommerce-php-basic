<?php 

  session_start();
  //session_destroy();

?>

<div class="container" id="top-header">
  <div class="ui grid">

    <div class="three wide column">
      <a href="index.php"><img src="img/logo.png" alt="Control Panel"></a>
    </div>
    
  	<div class="three wide column right floated top-right-menu">
  		<div class="ui feed">
    	  <div class="event">
      		<div class="label">
      		  <img src="users/steve.jpg">
      		</div>
      		<div class="content padding-zero">
      		  <a href="">Rashidul Hasan</a>
      		  <div class="summary">Log Out</div>
      		</div>
    	  </div>
  	 </div>
    </div>

    <div class="two wide column right floated top-right-menu">
      <div class="ui compact menu">
        <a class="item" href="cart.php">
          <i class="icon shop large"></i>Cart
          <?php 
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) != 0) { ?>
              <div class="floating ui teal label"><?php echo count($_SESSION['cart']); ?></div> <?php
            }
           ?>
        </a>
      </div>
    </div>

  </div>  
</div>




<div class="container" id="top-nav-menu">
  <div class="ui menu teal inverted">
    <a class="item" href="index.php">
      <i class="home icon"></i> Home
    </a>
    <a class="item" href="about.php">
      <i class="user icon"></i> About
    </a>
    <a class="item" href="contact.php">
      <i class="mail icon"></i> Contact
    </a>
    <div class="right menu">
      <div class="item">
        <i class="gift icon"></i> Sell Online
      </div>
      <div class="item">

      <form id="searchbox" action="search.php" method="get">
          <input id="search" type="text" name="searchterm" placeholder="Search...">
          <input id="submit" type="submit" value="Search">
      </form>

      </div>
    </div>
  </div>
</div>