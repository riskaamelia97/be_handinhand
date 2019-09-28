<?php
$tgl_upload = date("d-m-Y");

//notifikasi kalau ada error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>  ','</div>');

//open form
echo form_open_multipart(base_url('masteradmin/gallery/tambah_video'));
?>
<div class="box box-danger">
<div class="box-body ">
    <div class="form-group">
    <label>Video Title</label>
    <input type="text" name="judul_video" class="form-control" placeholder="Videos Title" value="<?php echo
    set_value('judul_video')?>" required>
    </div>

    <div class="form-group">
    <label>Video Description</label>
        <div class="box-body pad">
        <form>

        <textarea name="deskripsi_video" class="textarea" placeholder="Place some text here"
        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
        <?php echo set_value('deskripsi_video') ?></textarea>
        </form>
    </div>
    

    <div class="form-group">
    <label>Upload Video</label>
    <input type="file" id="video" name="video" class="form-control" placeholder="Video" required>
    </div>

    <div class="form-group">
    <label>Upload Date</label>
    <input type="text" name="tgl_upload" class="form-control" placeholder="Upload Date" value="<?php echo $tgl_upload;?>" readonly required disabled>
    </div>
  
    <div class="form-group">
    <input type="submit" name="submit" class="btn btn-success btn-md" value="Add Data">
    &nbsp;&nbsp;
    <a href="<?php echo base_url('masteradmin/gallery')?>" class="btn btn-primary btn md">Cancel</a>
    </div>

</div>
</div>

<?php
// form close
echo form_close();

?>




