<?php
//notifikasi kalau ada error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

//open form
echo form_open(base_url('masteradmin/home/edit_visi/'.$visi->id_visi));
?>
<div class="box box-success">

        <div class="box">
        <div class="box-header">
        <h5 class="box-title">Vision
        <small>please edit below</small>
        </h5>

        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
        <form>

        <textarea name="visi" class="textarea" placeholder="Place some text here"
        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
        <?php echo
        $visi->visi ?></textarea>
        </form>
        </div>

        <div class="box-footer">
        <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success btn-md" value="Add Data">
        &nbsp;&nbsp;
        <a href="<?php echo base_url('masteradmin/home')?>" class="btn btn-primary btn md">Cancel</a>
        </div>
        </div>
        

        </div>
        </div>

        

    
    

</div>






<?php
// form close
echo form_close();

?>




