<?php
//notifikasi
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success"> <i class="fa fa-check"></i> ';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}

?>
<!-- Halaman Foto -->
<div class="row">
<div class="col-xs-12">
<div class="box box-danger">
<div class="box-header with-border">
  <h3 class="box-title">Image Scroller</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">                         
  <!-- --->
  <table  class="table table-bordered"  id="example1">

    <thead >
        <tr >
        <th>No.</th>
        <th>Photos Title</th>
        <!-- <th>Photos Description</th> -->
        <th>Photos</th>
        <th>Event Title</th>
        <th>Uploaded Date</th>
        <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
            $no = 1;
            foreach ( $gallery as $data) 
            {
                ?>
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td><?php echo $data->judul_foto; ?></td>
                    <!-- <td><?php echo $data->deskripsi_foto; ?></td> -->
                    <td><center><img src="<?php echo base_url('assets/upload/image/'.$data->foto); ?>" 
                    style="width:150px;
                    height:100px;"></center></td>
                    <td><?php echo $data->judul_event; ?></td>
                    <td><?php echo $data->tgl_upload; ?></td>

                  <td>
                  <a href="<?php echo base_url('masteradmin/gallery/delete_foto/'.$data->id_galeri)?>" class="btn btn-warning">
                  <i class="fa fa-trash"></i> Delete Photo</a>
                    
                    <?php //include('delete_foto.php');?>  
          
                  </td>
                </tr>
            
    <?php  } ?>
    </tbody>
  </table>

  <br><br>
  <p><a href="<?php echo base_url('masteradmin/gallery/tambah_foto') ?>" class="btn bg-red btn-flat">
    <i class="fa fa-plus"></i>  <b>Add Photos Collection </b></a></p>



</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</div>


<!-- Halaman Video -->

<div class="row">
<div class="col-xs-12">
<div class="box box-danger">
<div class="box-header with-border">
  <h3 class="box-title">Video</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">          

  <!-- --->
  <table  class="table table-bordered"  id="example4">

    <thead >
        <tr >
        <th>No.</th>
        <th>Videos Title</th>
        <th>Videos Description</th>
        <th>Videos</th>
        <th>Uploaded Date</th>
        <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
            $no = 1;
            foreach ( $video as $data) 
            {
                ?>
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td><?php echo $data->judul_video; ?></td>
                    <td><?php echo $data->deskripsi_video; ?></td>
                    <td><?php echo $data->video; ?></td>
                    <td><?php echo $data->tgl_upload; ?></td>

                  <td>
                 
                  <a href="<?php echo base_url('masteradmin/gallery/delete_vid/').$data->id_video ?>" class="btn btn-warning">
                  <i class="fa fa-trash"></i> Delete Video</a>

                  <!--//<?php //include('delete_video.php');?> --->       
                  </td>
                </tr>
            
    <?php  } ?>
    </tbody>
  </table>

  <br><br>
  <p><a href="<?php echo base_url('masteradmin/gallery/tambah_video') ?>" class="btn bg-red btn-flat">
    <i class="fa fa-plus"></i>  <b>Add Videos Collection </b></a></p>



</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</div>