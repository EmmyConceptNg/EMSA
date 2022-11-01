<?php include 'includes/session.php'; ?>
<?php if($_SESSION['admin_type'] == 'imsec'){
  header('location:home.php');
} ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Posts
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Posts</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addNewPost" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Author</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Image</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM posts ORDER BY post_id ASC";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$row['post_title']."</td>
                          <td>".substr($row['post_content'], 0, 25).'...'."</td>
                          <td>".$row['post_author']."</td>
                          <td>".$row['post_category']."</td>
                          <td>".$row['post_tags']."</td>
                          <td><img src='".$row['post_pic']."' width='60px' /></td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['post_id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['post_id']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/posts_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#post_edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'posts_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.post_id);
      $('#edit_title').val(response.post_title);
      $('#edit_slug').val(response.post_slug);
      $('#edit_author').val(response.post_author);
      $('#edit_category').val(response.post_category);
      $('#edit_content').val(response.post_content);
      $('#edit_tags').val(response.post_tags);
      $('#edit_keywords').val(response.post_seo_keywords);
      $('.title').html(response.post_title);
    }
  });
}
</script>
<script>
  (function () {
    document.getElementById('title').addEventListener('blur', function (e) {
      let slug = document.getElementById('slug');

      if (slug.value) {
        return;
      }

      slug.value = this.value
        .toLowerCase()
        .replace(/[^a-z0-9-]+/g, '-')
        .replace(/^-+|-+$/g, '');
    });
  })();
</script>
</body>
</html>
