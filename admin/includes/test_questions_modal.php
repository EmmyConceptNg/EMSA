<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Test Question</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="test_questions_add.php" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Course</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="test_question_course" name="test_question_course" required>
                        <option value="">...</option>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){ ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                           <?php }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Question</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="test_question" name="test_question" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Answer 1</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="test_answer_1" name="test_answer_1" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Answer 2</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="test_answer_2" name="test_answer_2" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Answer 3</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="test_answer_3" name="test_answer_3" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Answer 4</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="test_answer_4" name="test_answer_4" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Course</label>

                    <div class="col-sm-9">
                        <select class="form-control" id="test_question_answer" name="test_question_answer" required>
                            <option value="">--Select Answer--</option>
                            <option value="1">Answer1</option>
                            <option value="2">Answer2</option>
                            <option value="3">Answer3</option>
                            <option value="4">Answer4</option>
                        </select>
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
              <h4 class="modal-title"><b>Edit Subject</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="test_questions_edit.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Course</label>

                    <div class="col-sm-9">
                        <select class="form-control" id="edit_test_question_course" name="test_question_course" required>
                            <option value="">...</option>
                            <?php
                            $sql = "SELECT * FROM subjects";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){ ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="question" class="col-sm-3 control-label">Question</label>

                    <div class="col-sm-9">
                        <textarea class="form-control" id="edit_test_question" name="test_question" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="answer_1" class="col-sm-3 control-label">Answer 1</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="edit_test_answer_1" name="test_answer_1" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="answer_2" class="col-sm-3 control-label">Answer 2</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="edit_test_answer_2" name="test_answer_2" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="answer_3" class="col-sm-3 control-label">Answer 3</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="edit_test_answer_3" name="test_answer_3" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="answer_4" class="col-sm-3 control-label">Answer 4</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="edit_test_answer_4" name="test_answer_4" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Course</label>

                    <div class="col-sm-9">
                        <select class="form-control" id="edit_test_question_answer" name="test_question_answer" required>
                            <option value="">--Select Answer--</option>
                            <option value="1">Answer1</option>
                            <option value="2">Answer2</option>
                            <option value="3">Answer3</option>
                            <option value="4">Answer4</option>
                        </select>
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
              <form class="form-horizontal" method="POST" action="test_question_delete.php">
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



     