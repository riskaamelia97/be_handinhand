<?php
//notifikasi kalau ada error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

//open form
echo form_open(base_url('masteradmin/salesforce/edit_salesforce/'.$salesforce->id_salesforce));
?>
<div class="box box-success">

        <div class="box">
        <div class="box-header">
        <h5 class="box-title">Salesforce Description
        <small>please edit below</small>
        </h5>

        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
        <form>

        <textarea name="deskripsi" class="textarea" placeholder="Place some text here"
        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
        <?php echo
        $salesforce->deskripsi ?></textarea>
        </form>
        </div>

        <div class="box-footer">
        <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success btn-md" value="Add Data">
        &nbsp;&nbsp;
        <a href="<?php echo base_url('masteradmin/salesforce')?>" class="btn btn-primary btn md">Cancel</a>
        </div>
        </div>
        

        </div>
        </div>

        

    
    

</div>





<?php
// form close
echo form_close();

?>





