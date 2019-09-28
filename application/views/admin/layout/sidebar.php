<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/images/icon_hih.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        
          <p>Admin HiH</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?=$this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '' ? 'class="active"' : ''?>>
          <a href="<?php echo base_url('admin/dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <!--<li <?//=$this->uri->segment(2) == 'user' || $this->uri->segment(2) == '' ? 'class="active"' : ''?>>
          <a href="<?//php echo base_url('admin/user')?>">
            <i class="fa fa-user"></i> <span>User</span>
         -->   
          </a>
        </li>
          <li <?=$this->uri->segment(2) == 'home' || $this->uri->segment(2) == '' ? 'class="active"' : ''?>>
          <a href="<?php echo base_url('admin/home')?>">
            <i class="fa fa-home"></i> <span>Home</span>
            
          </a>
        </li>
        <li <?=$this->uri->segment(2) == 'gallery' || $this->uri->segment(2) == '' ? 'class="active"' : ''?>>
          <a href="<?php echo base_url('admin/gallery')?>">
            <i class="fa fa-image"></i> <span>Image Scroller</span>
            
          </a>
        </li>
        <li <?=$this->uri->segment(2) == 'event' || $this->uri->segment(2) == '' ? 'class="active"' : ''?>>
          <a href="<?php echo base_url('admin/event')?>">
            <i class="fa fa-calendar"></i> <span>Event</span>
            
          </a>
        </li>
        <li <?=$this->uri->segment(2) == 'about' || $this->uri->segment(2) == '' ? 'class="active"' : ''?>>
          <a href="<?php echo base_url('admin/about')?>">
            <i class="fa fa-sticky-note-o"></i> <span>About</span>
            
          </a>
        </li>
        </section>
    <!-- /.sidebar -->
  </aside>
   
  

  