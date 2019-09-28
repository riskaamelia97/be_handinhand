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
  <h3 class="box-title">Salesforce</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">          

  <!-- --->
  <table  class="table table-bordered"  id="example1">

    <thead >
        <tr >
        <th>No.</th>
        <th>Salesforce</th>
        <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
            $no = 1;
            foreach ( $salesforce as $salesforce) 
            {
                ?>
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td><?php echo $salesforce->deskripsi; ?></td>
                
                    <td>
                    <div class="btn-group">
                    <a href="<?php echo base_url('admin/salesforce/edit_salesforce/'.$salesforce->id_salesforce)?>" class="btn btn-success">
                    <i class="fa fa-edit"></i> Edit</a>
                    </div>
                    
                    <a href="<?php echo base_url('admin/salesforce/delete_salesforce/').$salesforce->id_salesforce ?>" class="btn btn-warning">
                    <i class="fa fa-trash"></i> Delete </a>

                           
                    
                   
                    </td>
                </tr>
            
    <?php  } ?>
    </tbody>
  </table>

  <br><br>
  <p><a href="<?php echo base_url('admin/salesforce/tambah_salesforce') ?>" class="btn bg-red btn-flat">
    <i class="fa fa-plus"></i>  <b>Add Salesforce </b></a></p>

  </div>


<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</div>