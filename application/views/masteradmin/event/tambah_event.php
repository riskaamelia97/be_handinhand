<?php
$tgl_post = date("d-m-Y");
//notifikasi kalau ada error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>  ','</div>');

//open form
echo form_open_multipart(base_url('masteradmin/event/tambah_event'));
?>
<div class="box box-danger">
<div class="box-body ">


   

    <div class="form-group">
    <label>Event Title</label>
    <input type="text" name="judul_event" class="form-control" placeholder="Event Title" value="<?php echo
    set_value('judul_event')?>" required>
    </div>

    <div class="form-group">
    <label>Event Description</label>
        <div class="box-body pad">
        <form>

        <textarea name="deskripsi_event" class="textarea" placeholder="Place some text here"
        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
        <?php echo set_value('deskripsi_event') ?></textarea>
        </form>
    </div>

  <div class="form-group">
    <label>Event Photo</label>
    <input type="file"  name="foto_event" class="form-control"  required>
  </div>

    <div class="form-group">
        <label>Date of the Event</label>
        <input class="form-control" name="tgl_event" type="date" value="<?php echo
    set_value('judul_event')?>"/>
        
    </div>

    <div class="form-group">
    <label>Post Date</label>
    <input type="text" name="tgl_post" class="form-control" 
    value="<?php echo $tgl_post;?>" readonly required disabled>
    </div>


    <!-- <div class="form-group">
    <label>Category</label>
    <select class="form-control" name="kategori">
  
   // <//?//php
	//	foreach ($kategori as $data) {
 
	//		echo "<option value='".$data->kategori."'>".$data->kategori."</option>";
	//	}
	?>
  </select>
  
    </div>  -->

 


    <div class="form-group">
    <label>Event Status</label>
    <select name="status_event" class="form-control">
        <option value="coming_soon">Coming Soon</option>
        <option value="completed">Completed</option>
    </select>
    </div>

   
    
  
  
    <div class="form-group">
    <input type="submit" name="submit" class="btn btn-success btn-md" value="Add Data">
    &nbsp;&nbsp;
    <a href="<?php echo base_url('masteradmin/event')?>" class="btn btn-primary btn md">Cancel</a>
    </div>

</div>
</div>



<?php
// form close
echo form_close();

?>




