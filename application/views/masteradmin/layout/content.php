
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <?php echo $title  ?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th-large"></i><?php echo $title  ?></a></li>
        <li class="active"><?php echo $title  ?></li>
      </ol>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <?php
        //ambil data isi yang ada di controller
        if ($isi) {
            $this->load->view($isi);
        }
    ?>
    </section>
  
    
    <!-- /.content -->
  </div>

  
