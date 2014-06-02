<?php $this->load->view('head')?>
<body>
  <div class="container">
    <?php $this->load->view("navbar"); ?>
    <div class="login">
        <div class="login-screen">
          <div class="login-icon">
            <img src="images/login/icon.png" alt="Welcome to Mail App">
            <h4>Welcome to <small>Mail App</small></h4>
          </div>

          <div class="login-form">
            <?php echo form_open('/login/doLogin'); ?>
        
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name" name="correo">
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" name="password">
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Entrar">
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
      </div>
</body>
</html>
