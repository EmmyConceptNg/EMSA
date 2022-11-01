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
                    Questions List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Quiz</li>
                    <li class="active">Questions</li>
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
                                <button class="btn btn-primary addnew btn-sm btn-flat" data-id="<?php echo $_GET['quizid'] ?>"><i
                                        class="fa fa-plus"></i> New</button>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th class="hidden"></th>
                                        <th>Questions</th>
                                        <th>Course</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(isset($_GET['quizid'])){
                                            $quizid = $_GET['quizid'];
                                        
                    $sql = "SELECT * FROM questions WHERE quizid = '$quizid'";
                    $query = $conn->query($sql);
                    }else{
                        $sql = "SELECT * FROM questions";
                        $query = $conn->query($sql);
                    }
                    while($row = $query->fetch_assoc()){ ?>
                      
                        
                        <tr>
                            <td class='hidden'></td>
                            <td><?php echo $row['questions'] ?></td>
                            <?php
                            $quizid = $row['quizid'];
                                $sql2 = "SELECT * FROM quiz WHERE id ='$quizid'";
                                $query2 = $conn->query($sql2);
                                while($row2 = $query2->fetch_assoc()){ ?>
                                    <td><?php echo $row2['title'] ?></td>
                                <?php } ?>

                            <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['questionid'] ?>"><i class='fa fa-edit'></i> Edit</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['questionid'] ?>"><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      
                    <?php }
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
        <?php include 'includes/questions_modal.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
        $(function () {
            $(document).on('click', '.addnew', function (e) {
                e.preventDefault();
                $('#addnew').modal('show');
                var id = $(this).data('id');
                getQuizRow(id);
            });

            $(document).on('click', '.edit', function (e) {
                e.preventDefault();
                $('#edit').modal('show');
                var id = $(this).data('id');
                getRow(id);
                getOptionsRow(id);
                getAnswersRow(id);
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

        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'questions_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function (response) {
                    $('.id').val(response.questionid);
                    $('#edit_question').val(response.questions);
                }
            });
        }

        function getAnswersRow(id) {
            $.ajax({
                type: 'POST',
                url: 'questions_answers_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function (response) {
                    $('.id').val(response.questionid);
                    $('#edit_question').val(response.questions);
                }
            });
        }

        function getOptionsRow(id) {
            $.ajax({
                type: 'POST',
                url: 'questions_options_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function (response) {
                    $('#edit_answer_1').val(response.options);
                    $('#edit_answer_2').val(response.options);
                    $('#edit_answer_3').val(response.options);
                    $('#edit_answer_4').val(response.options);
                }
            });
        }

        function getQuizRow(id) {
            $.ajax({
                type: 'POST',
                url: 'questions_quiz_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function (response) {
                    $('.id').val(response.id);
                    $('.num').val(response.total);
                }
            });
        }
    </script>
</body>

</html>
