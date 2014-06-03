    <div class="navbar-collapse collapse" id="navbar-collapse-01" style="height: 2px;background:#2C3E50;">
      <ul class="nav navbar-nav navbar-left">           
        <li><a href="<?php echo base_url(""); ?>">Inicio<span class="navbar-unread">1</span></a></li>
        <li class="dropdown">
        <li><a href="<?php echo base_url("index.php/aboutUs"); ?>">About Us</a></li>
        <?php if(!isset($this->session->userdata['nombre'])){ ?>
          <li><a href="<?php echo base_url("index.php/login"); ?>">Login</a></li>
        <?php }else{ ?>
         <li><a href="<?php echo base_url("index.php/dashboard"); ?>">Dashboard</a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata['nombre']; ?> <b class="caret"></b></a>
          <span class="dropdown-arrow"></span>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/login/destroy"); ?>">LogOut</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
    </div>
