    <div class="navbar-collapse collapse" id="navbar-collapse-01" style="height: 2px;background:#2C3E50;">
      <ul class="nav navbar-nav navbar-left">           
        <li><a href="<?php echo base_url(""); ?>">Inicio<span class="navbar-unread">1</span></a></li>
        <li class="dropdown">
        <li><a href="<?php echo base_url("index.php/aboutUs"); ?>">About Us</a></li>
        <?php if(!isset($this->session->userdata['nombre'])){ ?>
          <li><a href="<?php echo base_url("index.php/login"); ?>">Login</a></li>
        <?php }else{ ?>
         <li><a href="<?php echo base_url("index.php/dashboard"); ?>">Dashboard</a></li>
         <li><a href="<?php echo base_url("index.php/login/destroy"); ?>">Logout</a></li>
        <?php } ?>
      </ul>
    </div>
