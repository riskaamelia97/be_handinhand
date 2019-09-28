<?php
//notifikasi kalau ada error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>  ','</div>');

//open form
echo form_open(base_url('masteradmin/about/tambah_kontak'));
?>
<div class="box box-danger">
<div class="box-body ">
    <div class="form-group">
    <label>Phone Number</label>
    <input type="text" name="no_telp" class="form-control" placeholder="Phone Number" value="<?php echo
    set_value('no_telp')?>" required>
    </div>

    <div class="form-group">
    <label>Address</label>
        <div class="box-body pad">
        <form>

        <textarea name="alamat" class="textarea" placeholder="Place some text here"
        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
        <?php echo set_value('alamat') ?></textarea>
        </form>
    </div>

    
  
  
    <div class="form-group">
    <input type="submit" name="submit" class="btn btn-success btn-md" value="Add Data">
    &nbsp;&nbsp;
    <a href="<?php echo base_url('masteradmin/about')?>" class="btn btn-primary btn md">Cancel</a>
    </div>

</div>
</div>

<?php
// form close
echo form_close();

?>




