<?php
//notifikasi
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success"> <i class="fa fa-check"></i> ';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}

?>

<!-- Halaman Sejarah-->
<div class="row">
<div class="col-xs-12">
<div class="box box-danger">
<div class="box-header ">
  <h3 class="box-title ">History</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">          
                   
                   
  <!-- --->
  <table  class="table table-bordered"  id="example1">
    <thead >
        <tr >
        <th>No.</th>
        <th>History</th>
        <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
            $no = 1;
            foreach ( $sejarah as $data) 
            {
                ?>
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td><?php echo $data->sejarah; ?></td>
                
                    <td>
                    <div class="btn-group">
                    <a href="<?php echo base_url('masteradmin/about/edit_sejarah/'.$data->id_sejarah)?>" class="btn btn-success">
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




<!-- Halaman Kontak --->
<div class="row">
<div class="col-xs-12">
<div class="box box-danger">
<div class="box-header with-border">
  <h3 class="box-title">Contact</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">          
                   
                   
  <!-- --->
  <table  class="table table-bordered"  id="example4">

    <thead >
        <tr >
        <th>No.</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
            $no = 1;
            foreach ( $kontak as $data) 
            {
                ?>
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td><?php echo $data->no_telp; ?></td>
                    <td><?php echo $data->alamat; ?></td>
                
                    <td>
                    <div class="btn">
                    <a href="<?php echo base_url('masteradmin/about/edit_kontak/'.$data->id_kontak)?>" class="btn btn-success">
                    <i class="fa fa-edit"></i> Edit</a>        
                    </div>

                   
                    <a href="<?php echo base_url('masteradmin/about/delete_kontak/'.$data->id_kontak)?>" class="btn btn-warning">
                    <i class="fa fa-trash"></i> Delete</a>        
                   
                    
                    </td>
                </tr>
            
    <?php  } ?>
    </tbody>
  </table>
  <br><br>
  <p><a href="<?php echo base_url('masteradmin/about/tambah_kontak') ?>" class="btn bg-red btn-flat">
  <i class="fa fa-plus"></i>  <b>Add Contact </b></a></p>



</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</div>



<div class="row">
<div class="col-xs-12">
<div class="box box-danger">
<div class="box-header with-border">
  <h3 class="box-title">Social Media</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">          
                                
  <!-- --->
  <table  class="table table-bordered"  id="example3">
    <thead >
        <tr >
        <th>No.</th>
        <th>Logo Social Media</th>
        <th>Social Media Username</th>
        <th>Social Media Type</th>
        <th>Link Social Media</th>
        <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
            $no = 1;
            foreach ( $sosmed as $data) 
            {
                ?>
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td><img src="<?php echo base_url('assets/upload/logo/'.$data->logo_sosmed); ?>" style="width:50px;
                    height:50px;"></td>
                    <td><?php echo $data->nama_sosmed; ?></td>
                    <td><?php echo $data->jenis_sosmed; ?></td>
                    <td><?php echo $data->link_sosmed; ?></td>
                
                    <td>
                 <!--   <div class="btn">
                    <a href="<?//php echo base_url('admin/about/edit_sosmed/'.$data->id_sosmed)?>" class="btn btn-success">
                    <i class="fa fa-edit"></i> Edit</a>        
                    </div> -->

                    <a href="<?php echo base_url('masteradmin/about/delete_sosmed/'.$data->id_sosmed)?>" class="btn btn-warning">
                    <i class="fa fa-trash"></i> Delete</a> 


                    <?php// include('delete_sosmed.php');?>  
                    </td>
                </tr>
            
    <?php  } ?>
    </tbody>
  </table>

  <br><br>
  <p><a href="<?php echo base_url('masteradmin/about/tambah_sosmed') ?>" class="btn bg-red btn-flat">
  <i class="fa fa-plus"></i>  <b>Add Social Media </b></a></p>


</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</div>



