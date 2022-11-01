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
                    Test List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Quiz</li>
                    <li class="active">Test</li>
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
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th class="hidden"></th>
                                        <th>Name</th>
                                        <th>Total Questions</th>
                                        <th>Mark</th>
                                        <th>Time Limit</th>
                                        <th>Actions </th>
                                    </thead>
                                    <tbody>
                                        <?php
                    $sql = "SELECT * FROM quiz";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$row['title']."</td>
                          <td>".$row['total']."</td>
                          <td>".$row['sahi']."</td>
                          <td>".$row['time']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
                            <a href='questions.php?quizid=".$row['id']."' class='btn btn-primary btn-sm btn-flat' data-id='".$row['id']."'><i class='fa fa-sign-in'></i> Questions</a>
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
        <?php include 'includes/quiz_modal.php'; ?>
        <?php include 'includes/questions_modal.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
        $(function () {
            $(document).on('click', '.edit', function (e) {
                e.preventDefault();
                $('#edit').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.questions', function (e) {
                e.preventDefault();
                $('#questionsaddnew').modal('show');
                var id = $(this).data('id');
                var question_number = $(this).data('num');
                getRow(id);
            });

            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                $('#delete').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.photo', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.platform', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                getRow(id);
            });

        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'quiz_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function (response) {
                    $('.id').val(response.id);
                    $('#edit_test_question_course').val(response.subject_id);
                    $('#edit_test_question').val(response.question);
                    $('#edit_test_answer_1').val(response.answer1);
                    $('#edit_test_answer_2').val(response.answer2);
                    $('#edit_test_answer_3').val(response.answer3);
                    $('#edit_test_answer_4').val(response.answer4);
                    $('#edit_test_question_answer').val(response.answer_id);
                    $('.num').val(response.total);
                }
            });
        }
    </script>
</body>

</html>
