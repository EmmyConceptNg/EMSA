<!-- Add -->
<div class="modal fade" id="addNewPost">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Post</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="posts_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Post Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="author" class="col-sm-3 control-label">Post Author</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="author" value="<?php echo $_SESSION['username'] ?>" name="author" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Post Category</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="category" id="category">
                          <option value="">Select Category...</option>
                        <?php 
                            $sql = "SELECT * FROM categories";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                        ?>
                            <option value="<?php echo $row['cat_title'] ?>"><?php echo $row['cat_title'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" class="col-sm-3 control-label">Post Image</label>

                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="content" class="col-sm-3 control-label">Post Content</label>

                    <div class="col-sm-9">
                        <textarea class="form-control" id="content" name="content" required></textarea>
                    </div>
                </div>  

                <div class="form-group">
                    <label for="tags" class="col-sm-3 control-label">Post Tags</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tags" name="tags" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="keywords" class="col-sm-3 control-label">META Keywords</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="keywords" name="keywords" required>
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
<div class="modal fade" id="post_edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Position</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="posts_edit.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                  <label for="title" class="col-sm-3 control-label">Post Title</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_title" name="title" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="author" class="col-sm-3 control-label">Post Author</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_author" name="author" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="category" class="col-sm-3 control-label">Post Category</label>

                  <div class="col-sm-9">
                    <select class="form-control" name="category" id="edit_category">
                      <option value="">Select Category...</option>
                      <?php 
                            $sql = "SELECT * FROM categories";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                        ?>
                      <option value="<?php echo $row['cat_title'] ?>"><?php echo $row['cat_title'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="image" class="col-sm-3 control-label">Post Image</label>

                  <div class="col-sm-9">
                    <input type="file" class="form-control" id="edit_image" name="image" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="content" class="col-sm-3 control-label">Post Content</label>

                  <div class="col-sm-9">
                    <textarea class="form-control" id="edit_content" name="content" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tags" class="col-sm-3 control-label">Post Tags</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_tags" name="tags" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="keywords" class="col-sm-3 control-label">META Keywords</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_keywords" name="keywords" required>
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
              <form class="form-horizontal" method="POST" action="posts_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE POST</p>
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

<?php include "scripts.php"; ?>