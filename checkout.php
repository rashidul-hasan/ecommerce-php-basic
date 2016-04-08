<?php
  require_once('scripts/functions.php');
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
      

<form class="ui form">
  <h4 class="ui dividing header">Personal Information</h4>
  <div class="two fields">
    <div class="field">
      <label>Name</label>
      <div class="two fields">
        <div class="field">
          <input type="text" name="first-name" placeholder="First Name">
        </div>
        <div class="field">
          <input type="text" name="last-name" placeholder="Last Name">
        </div>
      </div>
    </div>
    <div class="field">
      <label>Gender</label>
      <div class="ui selection dropdown">
        <input type="hidden" name="gender">
        <div class="default text">Gender</div>
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item" data-value="male">Male</div>
          <div class="item" data-value="female">Female</div>
        </div>
      </div>
    </div>
  </div>

  <div class="field">
    <label>Biography</label>
    <textarea></textarea>
  </div>
  <h4 class="ui dividing header">Account Info</h4>
  <div class="two fields">
    <div class="required field">
      <label>Username</label>
      <div class="ui icon input">
        <input type="text" placeholder="Username">
        <i class="user icon"></i>
      </div>
    </div>
    <div class="required field">
      <label>Password</label>
      <div class="ui icon input">
        <input type="password">
        <i class="lock icon"></i>
      </div>
    </div>
  </div>
   <h4 class="ui top attached header">Import Settings</h4>
  <div class="ui bottom attached segment">
    <div class="grouped fields">
      <label for="alone">Would you like us to import your current settings?</label>
      <div class="field">
        <div class="ui radio checkbox checked">
          <input type="radio" checked="" name="import">
          <label>Yes</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox">
          <input type="radio" name="import">
          <label>No</label>
        </div>
      </div>
    </div>
  </div>
   <h4 class="ui dividing header">Settings</h4>
  <h5 class="ui header">Privacy</h5>
  <div class="field">
    <div class="ui toggle checkbox">
      <input type="radio" name="privacy">
      <label>Allow <b>anyone</b> to see my account</label>
    </div>
  </div>
  <div class="field">
    <div class="ui toggle checkbox">
      <input type="radio" name="privacy">
      <label>Allow <b>only friends</b> to see my account</label>
    </div>
  </div>
  <h5 class="ui header">Newsletter Subscriptions</h5>
  <div class="field">
    <div class="ui slider checkbox">
      <input type="checkbox" name="top-posts">
      <label>Top Posts This Week</label>
    </div>
  </div>
  <div class="field">
    <div class="ui slider checkbox">
      <input type="checkbox" name="hot-deals">
      <label>Hot Deals</label>
    </div>
  </div>
  <div class="ui hidden divider"></div>
  <div class="field">
    <div class="ui checkbox">
      <input type="checkbox" name="hot-deals">
      <label>I agree to the <a href="#">Terms of Service</a>.</label>
    </div>
  </div>
  <div class="ui error message">
    <div class="header">We noticed some issues</div>
  </div>
  <div class="ui submit button">Register</div>
</form>
       


      </div>
    </div> <!--  end ui.grid  --> 

  </div> <!--  end #main-content  --> 
  <?php //include 'inc/footer.php' ?>
</body>
</html>


