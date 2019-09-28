<?php
//notifikasi
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success"> <i class="fa fa-check"></i> ';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}

?>
<!-- Halaman Event -->
<div class="row">
<div class="col-xs-12">
<div class="box box-danger">
<div class="box-header with-border">
  <h3 class="box-title">Event Detail</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">          
                    
<!-- --->
<table  class="table table-bordered"  id="example1">

    <thead >
        <tr >
        <th>No.</th>
        <th>Event Title</th>
        <th>Event Description</th>
        <th>Event Photo</th>
        <th>Date of the Event</th>
        <th>Post Date</th>
        <!-- <th>Category</th> -->
        <th>Event Status</th>
        <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
            $no = 1;
            foreach ( $event as $data) 
            {
                ?>
                
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td><?php echo $data->judul_event; ?></td>
                    <td><?php echo $data->deskripsi_event; ?></td>
                   <td><center><img src="<?php echo base_url('assets/upload/event/'.$data->foto_event); ?>" style="width:150px;
                    height:100px;"></center></td>
                    <td><?php echo $data->tgl_event; ?></td>
                    <td><?php echo $data->tgl_post; ?></td>
                    <!-- <td><//?php echo $data->kategori; ?></td> -->
                    <td><?php if($data->status_event =="coming_soon"){echo "Coming Soon";}else{echo "Completed";} ?></td>

                  <td>
                                        
                
                   <div class="btn">
                    <a href="<?php echo base_url('masteradmin/event/edit_event/'.$data->id_event)?>" class="btn btn-success">
                    <i class="fa fa-edit"></i> Edit</a>
                    </div> 

                    <a href="<?php echo base_url('masteradmin/event/delete_event/'.$data->id_event)?>" class="btn btn-warning">
                    <i class="fa fa-trash"></i> Delete </a>

                    <?php// include('delete_event.php');?>  

                    
                            
                            
                            
                    </td>
                </tr>
                
    <?php  } ?>
    </tbody>
  </table>

  <br><br>
  <p><a href="<?php echo base_url('masteradmin/event/tambah_event') ?>" class="btn bg-red btn-flat">
  <i class="fa fa-plus"></i>  <b>Add Event </b></a></p>



</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</div>