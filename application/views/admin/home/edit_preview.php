<?php
//notifikasi kalau ada error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

//open form
echo form_open(base_url('admin/home/edit_preview/'.$preview->id_preview));
?>
<div class="box box-success">

        <div class="box">
        <div class="box-header">
        <h5 class="box-title">Preview
        <small>please edit below</small>
        </h5>

        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
        <form>

        <textarea name="konten_prev" class="textarea" placeholder="Place some text here"
        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo
        $preview->konten_prev ?></textarea>
        </form>
        </div>

        <div class="box-footer">
        <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success btn-md" value="Add Data">
        &nbsp;&nbsp;
        <a href="<?php echo base_url('admin/home')?>" class="btn btn-primary btn md">Cancel</a>
        </div>
        </div>
        

        </div>
        </div>

        

    
    

</div>



<?php
// form close
echo form_close();

?>





