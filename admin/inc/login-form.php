<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<?php include('head.php'); ?>
</head>
<body>
	<div class="ui two column middle aligned relaxed fitted stackable grid">
  <div class="column">
    <div class="ui form segment">
      <div class="field">
        <label>Username</label>
        <div class="ui left icon input">
          <input type="text" placeholder="Username">
          <i class="user icon"></i>
        </div>
      </div>
      <div class="field">
        <label>Password</label>
        <div class="ui left icon input">
          <input type="password">
          <i class="lock icon"></i>
        </div>
      </div>
      <div class="ui blue submit button">Login</div>
    </div>
  </div>
  <div class="ui vertical divider">
    Or
  </div>
  <div class="center aligned column">
    <div class="huge green ui labeled icon button">
      <i class="signup icon"></i>
      Sign Up
    </div>
  </div>
</div
</body>
</html>