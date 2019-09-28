<?php
//notifikasi
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success"> <i class="fa fa-check"></i> ';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}

?>
<div class="row">
        <div class="col-xs-12">
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">          

                   <!-- --->
                   <table  class="table table-bordered"  id="example4">
              <!-- --->
        
                <thead >
                    <tr >
                    <th>No.</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Phone Number</th>
                    <th>Level Access</th>
                    <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php 
                        $no = 1;
                        foreach ( $user as $data) 
                        {
                            ?>
                            <tr>
                                <td ><?php echo $no++; ?></td>
                                <td><?php echo $data->nama; ?></td>
                                <td><?php echo $data->username; ?></td>
                                <td><?php echo $data->no_hp; ?></td>
                                <td><?php if($data->level =="1"){echo "Admin";}else{echo "Master Admin";} ?></td>
                            
                                <td>
                                                    
                            
                                <div class="btn">
                                <a href="<?php echo base_url('admin/user/edit_user/'.$data->id_user)?>" class="btn btn-success">
                                <i class="fa fa-edit"></i> Edit</a>
                                </div>
                                
                                <a href="<?php echo base_url('admin/user/delete_user/'.$data->id_user)?>" class="btn btn-warning">
                                <i class="fa fa-trash"></i> Delete </a>
                                <?php //include('delete_user.php');?>  
                                        
                                        
                                </td>
                            </tr>
                        
                <?php  } ?>
                </tbody>
              </table>

              <br><br>
              <p><a href="<?php echo base_url('admin/user/tambah_user') ?>" class="btn bg-red btn-flat">
                <i class="fa fa-plus"></i>  <b>Add User </b></a></p>
            

        
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </div>
