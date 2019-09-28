<?php
//notifikasi kalau ada error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>  ','</div>');

//open form
echo form_open(base_url('admin/user/tambah_user'));
?>
<div class="box box-danger">
<div class="box-body ">
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="nama" class="form-control" placeholder="Name" value="<?php echo
    set_value('nama')?>" required>
    </div>

    <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo
    set_value('username')?>" required>
    </div>

    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo
    set_value('password')?>" required>
    </div>


    <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="no_hp" class="form-control" placeholder="Phone Number" value="<?php echo
        set_value('no_hp')?>" required>
    </div>

    
    <div class="form-group">
    <label>Level Access</label>
    <select name="level" class="form-control">
        <option value="1">Admin</option>
        <option value="2">Master Admin</option>
    </select>
    </div>
  
    <div class="form-group">
    <input type="submit" name="submit" class="btn btn-success btn-md" value="Add Data">
    &nbsp;&nbsp;
    <a href="<?php echo base_url('admin/user')?>" class="btn btn-primary btn md">Cancel</a>
    </div>

</div>
</div>

<?php
// form close
echo form_close();

?>




