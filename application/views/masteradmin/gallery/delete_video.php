
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default-2">
 <i class="fa fa-trash-o"></i> Delete Video
</button>



<div class="modal fade" id="modal-default-2">
<div class="modal-dialog">
<div class="modal-content">
              <div class="modal-header bg-orange">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title ">Are you sure <b> Deleting </b>this Video ?</h4>
              </div>
              
              <div class="modal-footer bg-warning">
                <a href="<?php echo base_url('admin/gallery/delete_vid/').$data->id_video ?>" class="btn btn-warning">
                <i class="fa fa-trash"></i> Delete Video</a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                <i class="fa fa-times"></i> Cancel</button>
              </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->