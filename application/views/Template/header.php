<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>GPS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Aplikasi</b> GPS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
   
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-gears"></i>
                <?php echo $this->session->userdata('username')?>
            </a>
               <?php if($this->session->userdata('level_users')==1)
{?>
            <ul class="dropdown-menu">
              
              <!-- Menu Footer-->
              <li class="user-footer">
              
                    <a href="<?php echo base_url()?>index.php/Login/logout" class="btn btn-default btn-flat">Sign out</a>
              </li>
            </ul>
<?php }else{?>
              <ul class="dropdown-menu">
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url()?>index.php/Profile/edit_profile/<?php echo $this->session->userdata('id_profile')?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                     <div class="pull-left">
                         <a href="<?php echo base_url()?>index.php/Profile/change_password/<?php echo $this->session->userdata('id')?>" class="btn btn-default btn-flat">Ubah Password</a>
                  </div>
                <div class="pull-left">
                    <a href="<?php echo base_url()?>index.php/Login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
<?php }?>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>

    </nav>
  </header>