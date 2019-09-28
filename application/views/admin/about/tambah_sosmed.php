<?php
//notifikasi kalau ada error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>  ','</div>');

//open form
echo form_open_multipart(base_url('masteradmin/about/tambah_sosmed'));
?>
<div class="box box-danger">
<div class="box-body ">
    <div class="form-group">
    <label>Logo Social Media</label>
    <input type="file"  name="logo_sosmed" class="form-control"  required>
    </div>

    <div class="form-group">
    <label>Social Media Username</label>
    <input type="text" name="nama_sosmed" class="form-control" placeholder="Social Media Username" value="<?php echo
    set_value('nama_sosmed')?>" required>
    </div>

    <div class="form-group">
    <label>Social Media Type</label>
    <input type="text" name="jenis_sosmed" class="form-control" placeholder="Social Media Type" value="<?php echo
    set_value('jenis_sosmed')?>" required>
    </div>

    <div class="form-group">
    <label>Link Social Media</label>
    <input type="text" name="link_sosmed" class="form-control" placeholder="Link Social Media" value="http://<?php 
     echo set_value('link_sosmed')?>" required>
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




