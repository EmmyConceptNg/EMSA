<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Quiz</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="quiz_add.php" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="total" class="col-sm-3 control-label">Number of Questions</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="total" name="total" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="right" class="col-sm-3 control-label">Enter Mark on Right Answers</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="right" name="right" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="wrong" class="col-sm-3 control-label">Enter Mark on Wrong Answers</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="wrong" name="wrong" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="time" class="col-sm-3 control-label">Enter Time Limit for test in Minutes</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="time" name="time" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="time" class="col-sm-3 control-label">Enter Quiz Description</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i
                      class="fa fa-save"></i> Save</button>
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
              <h4 class="modal-title"><b>Edit Subject</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="quiz_edit.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                  <label for="description" class="col-sm-3 control-label">Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_name" name="name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="total" class="col-sm-3 control-label">Number of Questions</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="edit_total" name="total" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="right" class="col-sm-3 control-label">Enter Mark on Right Answers</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="edit_right" name="right" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="wrong" class="col-sm-3 control-label">Enter Mark on Wrong Answers</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="edit_wrong" name="wrong" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="time" class="col-sm-3 control-label">Enter Time Limit for test in Minutes</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="edit_time" name="time" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="time" class="col-sm-3 control-label">Enter Quiz Description</label>

                  <div class="col-sm-9">
                    <textarea class="form-control" id="edit_description" name="description" required></textarea>
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
              <form class="form-horizontal" method="POST" action="subjects_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE SUBJECT</p>
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



     