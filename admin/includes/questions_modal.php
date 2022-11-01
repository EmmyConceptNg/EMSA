<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Question</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="questions_add.php" enctype="multipart/form-data" >
              <input type="text" class="id" name="id">
              <input type="text" class="num" name="total">

<?php
    for($i=1;$i<=4;$i++) { ?>
        <div class="form-group">
            <label for="qns <?php echo $i; ?>" class="col-sm-3 control-label">Question <?php echo $i ?></label>

            <div class="col-sm-9">
                <textarea class="form-control" id="question<?php echo $i ?>" name="question<?php echo $i ?>"
                    required></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="<?php echo $i ?>1">Enter Option A</label>
            <div class="col-sm-9">
                <input type="text" id="<?php echo $i ?>1" name="<?php echo $i ?>1" placeholder="Enter option a" class="form-control">

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="<?php echo $i ?>2">Enter Option B</label>
            <div class="col-sm-9">
                <input type="text" id="<?php echo $i ?>2" name="<?php echo $i ?>2" placeholder="Enter option b" class="form-control">

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="<?php echo $i ?>3">Enter Option C</label>
            <div class="col-sm-9">
                <input type="text" id="<?php echo $i ?>3" name="<?php echo $i ?>3" placeholder="Enter option c" class="form-control">

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="<?php echo $i ?>4">Enter Option D</label>
            <div class="col-sm-9">
                <input type="text" id="<?php echo $i ?>4" name="<?php echo $i ?>4" placeholder="Enter option d" class="form-control">

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="ans <?php echo $i ?>">Choose Correct Answer</label>
            <div class="col-sm-9">
                <select id="answer<?php echo $i ?>" name="answer<?php echo $i; ?>" placeholder="Choose Correct Answer for <?php echo $i ?>" class="form-control">
                    <option value="">Select answer for question <?php echo $i; ?></option>
                    <option value="a">option a</option>
                    <option value="b">option b</option>
                    <option value="c">option c</option>
                    <option value="d">option d</option>
                </select>

            </div>
        </div>

<br>
<hr>
    <?php }
?>
        
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
              <form class="form-horizontal" method="POST" action="questions_edit.php" enctype="multipart/form-data">
                <input type="text" class="id" name="id">
                <input type="text" class="qid" name="qid">
        
        <div class="form-group">
            <label for="question" class="col-sm-3 control-label">Question</label>

            <div class="col-sm-9">
                <textarea class="form-control" id="edit_question" name="question"
                    required></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="Option A">Enter Option A</label>
            <div class="col-sm-9">
                <input type="text" id="edit_answer_1" name="answer_1" placeholder="Enter option a"
                    class="form-control">

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="2">Enter Option B</label>
            <div class="col-sm-9">
                <input type="text" id="edit_answer_2" name="answer_2" placeholder="Enter option b"
                    class="form-control">

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="3">Enter Option C</label>
            <div class="col-sm-9">
                <input type="text" id="edit_answer_3" name="answer_3" placeholder="Enter option c"
                    class="form-control">

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="4">Enter Option D</label>
            <div class="col-sm-9">
                <input type="text" id="edit_answer_4" name="answer_4" placeholder="Enter option d"
                    class="form-control">

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="ans <?php echo $i ?>4">Choose Correct Answer</label>
            <div class="col-sm-9">
                <select id="edit_correct_answer" name="correct_answer"
                    placeholder="Choose Correct Answer for the Question" class=" form-control">
                    <option value="">Select answer for question</option>
                    <option value="a">option a</option>
                    <option value="b">option b</option>
                    <option value="c">option c</option>
                    <option value="d">option d</option>
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
              <form class="form-horizontal" method="POST" action="question_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE QUESTION</p>
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



     