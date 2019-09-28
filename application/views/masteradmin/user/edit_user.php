<?php
//notifikasi kalau ada error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

//open form
echo form_open(base_url('masteradmin/user/edit_user/'.$user->id_user));
?>
<div class="box box-success">
<div class="box-body">
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="nama" class="form-control" placeholder="Name" value="<?php echo
    $user->nama ?>" required>
    </div>

    <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo
    $user->username ?>" required>
    </div>

    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo
    set_value('password')?>" >
    </div>


    <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="no_hp" class="form-control" placeholder="No HP" value="<?php echo
      $user->no_hp ?>" required>
    </div>

    
    <div class="form-group">
    <label>Access Level</label>
    <select name="level" class="form-control">
        <option value="1">Admin</option>
        <option value="2" <?php if ($user->level=="2") {echo "selected";}?>>Master Admin</option>
    </select>
    </div>
  
    <div class="form-group">
    <input type="submit" name="submit" class="btn btn-success btn-md" value="Add Data">
    &nbsp;&nbsp;
    <a href="<?php echo base_url('masteradmin/user')?>" class="btn btn-primary btn md">Cancel</a>
    </div>

</div>
</div>


<?php
// form close
echo form_close();

?>




