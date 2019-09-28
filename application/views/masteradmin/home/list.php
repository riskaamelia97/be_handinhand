<?php
//notifikasi
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success"> <i class="fa fa-check"></i> ';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}

?>
<!-- Tabel Preview -->
<div class="row">
<div class="col-xs-12">
<div class="box box-danger">
<div class="box-header with-border">
  <h3 class="box-title">Preview</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">          

  <!-- --->
  <table  class="table table-bordered"  id="example1">

    <thead >
        <tr >
        <th>No.</th>
        <th>Preview</th>
        <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
            $no = 1;
            foreach ( $preview as $preview) 
            {
                ?>
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td><?php echo $preview->konten_prev; ?></td>
                
                    <td>
                    <div class="btn-group">
                    <a href="<?php echo base_url('masteradmin/home/edit_preview/'.$preview->id_preview)?>" class="btn btn-success">
                    <i class="fa fa-edit"></i> Edit</a>

                           
                    
                    </div>
                    </td>
                </tr>
            
    <?php  } ?>
    </tbody>
  </table>

  </div>


<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</div>

<!-- Tabel Visi misi -->

<div class="row">
<div class="col-xs-12">
<div class="box box-danger">
<div class="box-header with-border">
  <h3 class="box-title">Vision</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">          
          
  <!-- --->
  <table  class="table table-bordered"  id="example4">

    <thead >
        <tr >
        <th>No.</th>
        <th>Vision</th>
        <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
            $no = 1;
            foreach ( $visi as $data) 
            {
                ?>
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td><?php echo $data->visi; ?></td>
                 
                
                    <td>
                                        
                
                    <div class="btn-group">
                    <a href="<?php echo base_url('masteradmin/home/edit_visi/'.$data->id_visi)?>" class="btn btn-success">
                    <i class="fa fa-edit"></i> Edit</a>
                            
                            
                            </div>
                    </td>
                </tr>
            
    <?php  } ?>
    </tbody>
  </table>



</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</div>


<!-- Tabel Visi misi -->

<div class="row">
<div class="col-xs-12">
<div class="box box-danger">
<div class="box-header with-border">
  <h3 class="box-title">Mission</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">          

  <!-- --->
  <table  class="table table-bordered"  id="example3">

    <thead >
        <tr >
        <th>No.</th>
        <th>Mission</th>
        <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
            $no = 1;
            foreach ( $misi as $data) 
            {
                ?>
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td><?php echo $data->misi; ?></td>
                 
                
                    <td>
                                        
                
                    <div class="btn-group">
                    <a href="<?php echo base_url('masteradmin/home/edit_misi/'.$data->id_misi)?>" class="btn btn-success">
                    <i class="fa fa-edit"></i> Edit</a>
                            
                            
                            </div>
                    </td>
                </tr>
            
    <?php  } ?>
    </tbody>
  </table>



</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</div>
