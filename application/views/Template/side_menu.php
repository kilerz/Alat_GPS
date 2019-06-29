<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php if($this->session->userdata('level_users')==1)
{?>
       <li class="<?php echo $active_1?>">><a href="<?php echo base_url() ?>index.php/Home"><i class="fa fa-dashboard"></i> <span>Dasboard</span></a></li>
       <li class="<?php echo $active_2?>"><a href="<?php echo base_url() ?>index.php/Manage_GPS"><i class="fa fa-user"></i> <span>Manage GPS</span></a></li>
       <li class="<?php echo $active_3?>">><a href="<?php echo base_url() ?>index.php/Manage_user"><i class="fa fa-book"></i> <span>Manage Users</span></a></li>
<?php }else{?>
       <li class="<?php echo $active_1?>">><a href="<?php echo base_url() ?>index.php/Home"><i class="fa fa-dashboard"></i> <span>Dasboard</span></a></li>
       <li class="<?php echo $active_2?>"><a href="<?php echo base_url() ?>index.php/Manage_GPS"><i class="fa fa-user"></i> <span>Manage GPS</span></a></li>
     
       
<?php }?>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

