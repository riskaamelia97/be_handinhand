<?php
$tgl_upload = date("d-m-Y");

//notifikasi kalau ada error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>  ','</div>');

//open form
echo form_open_multipart(base_url('admin/gallery/tambah_foto'));
?>
<div class="box box-danger">
<div class="box-body ">
    <div class="form-group">
    <label>Photos Title</label>
    <input type="text" name="judul_foto" class="form-control" placeholder="Photos Title" value="<?php echo
    set_value('judul_foto')?>" required>
    </div>

    <!-- <div class="form-group">
    <label>Photos Description</label>
        <div class="box-body pad">
        <form>

        <textarea name="deskripsi_foto" class="textarea" placeholder="Place some text here"
        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
        </?php echo set_value('deskripsi_foto') ?></textarea>
        </form>
    </div> -->

    <div class="form-group">
    <label>Upload Photo</label>
    <input type="file" name="foto" class="form-control"  required>
    </div>

    <div class="form-group">
    <label>Event Tittle</label>
    <select class="form-control" name="id_event">
  
    <?php
		foreach ($judul_event as $data) {
 
			echo "<option value='".$data->id_event."'>".$data->judul_event."</option>";
		}
	?>
  </select>
  
    </div> 

    <div class="form-group">
    <label>Upload Date</label>
    <input type="text" name="tgl_upload" class="form-control" placeholder="Upload Date" value="<?php echo $tgl_upload;?>" readonly required disabled>
    </div>
  
    <div class="form-group">
    <input type="submit" name="submit" class="btn btn-success btn-md" value="Add Data">
    &nbsp;&nbsp;
    <a href="<?php echo base_url('admin/gallery')?>" class="btn btn-primary btn md">Cancel</a>
    </div>

</div>
</div>

<?php
// form close
echo form_close();

?>




