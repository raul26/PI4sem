<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/flat-ui.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/demo.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/images/favicon.ico'); ?>" rel="stylesheet" />

  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/application.js'); ?>"></script>
</head>
<body>
  <div class="container">
    <div class="navbar-collapse collapse" id="navbar-collapse-01" style="height: 2px;background:#2C3E50;">
      <ul class="nav navbar-nav navbar-left">           
        <li><a href="#fakelink">Menu Item<span class="navbar-unread">1</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
          <span class="dropdown-arrow"></span>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><a href="#fakelink">About Us</a></li>
      </ul>
    </div>
<div class="login">
        <div class="login-screen">
          <div class="login-icon">
            <img src="images/login/icon.png" alt="Welcome to Mail App">
            <h4>Welcome to <small>Mail App</small></h4>
          </div>

          <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name">
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass">
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

            <a class="btn btn-primary btn-lg btn-block" href="#">Log in</a>
            <a class="login-link" href="#">Lost your password?</a>
          </div>
        </div>
      </div>
  <div>
</body>
</html>
