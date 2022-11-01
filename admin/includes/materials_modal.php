<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Material</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="materials_add.php" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-3 control-label">Image</label>

                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="image" name="image" accept="image/x-png, image/gif, image/jpeg">
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-3 control-label">File</label>

                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="filename" name="filename"
                            accept="application/pdf, text/plain, application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Position</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="materials_edit.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="edit_description" name="description" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-3 control-label">Image</label>

                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="edit_image" name="image" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-3 control-label">File</label>

                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="edit_filename" name="filename" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="materials_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE Material</p>
                    <h2 class="bold description"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>



     