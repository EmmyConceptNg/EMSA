<?php 
include 'includes/session.php';
include 'includes/check_reply.php';
?>
<?php include 'includes/header.php' ?>
    <body <?php if ($ms == "1") { print 'onload="myFunction()"'; } ?>  class="page-header-fixed">
        <div class="overlay"></div>
        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile">
				<?php 
				if ($myavatar == NULL) {
				print' <img width="60" src="../assets/images/'.$mygender.'.png" alt="'.$myfname.'">';
				}else{
				echo '<img src="data:image/jpeg;base64,'.base64_encode($myavatar).'" width="60" alt="'.$myfname.'"/>';	
				}
						
				?>
				<span><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></span></div>
                <div class="profile-menu-list">
                    <a href="profile.php"><i class="fa fa-user"></i><span>Profile</span></a>
                    <a href="logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
        </div>
        <form class="search-form" action="search.php" method="GET">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control search-input" placeholder="Search student..." required>
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div>
        </form>
        <main class="page-content content-wrap">
            <?php include 'includes/navbar.php' ?>
            <?php include 'includes/sidebar.php' ?>
            <div class="page-inner">
                <div class="page-title">
                    <h3>Add Questions</h3>



                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
						<div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-white">
                                    <div class="panel-body">
                                        <div role="tabpanel">
                                   
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab5" role="tab" data-toggle="tab">Multiple Choice</a></li>
                                                <li role="presentation"><a href="#tab6" role="tab" data-toggle="tab">Filling Blanks</a></li>
                                            </ul>
                                    
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active fade in" id="tab5">
                                                <form action="pages/add_question2.php?type=mc" method="POST">
											<div class="form-group">
                                            <label for="exampleInputEmail1">Exam Name</label>
										    <select class="form-control" name="exam" required>
											<option value="" selected disabled>-Select exam</option>
										 	<?php
											include '../includes/conn.php';
											$sql = "SELECT * FROM tbl_examinations ORDER BY exam_name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
    
                                            while($row = $result->fetch_assoc()) {
                                            print '<option value="'.$row['exam_id'].'">'.$row['exam_name'].'</option>';
                                            }
                                           } else {
                          
                                            }
                                             $conn->close();
											 ?>
											
											</select></div>
												<div class="form-group">
                                                <label for="exampleInputEmail1">Question</label>
                                                <input type="text" class="form-control" placeholder="Enter question" name="question" required autocomplete="off">
                                                </div>
												
                                      <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="100">Option No.</th>
                                                <th>Option</th>
                                                <th  width="100" >Answer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" >1</th>
                                                <td>
												<div class="form-group">
                                                <label for="exampleInputEmail1">Option 1</label>
                                                <input type="text" class="form-control" placeholder="Enter option 1" name="opt1" required autocomplete="off">
                                                </div>
												</td>
                                                <td><input type="radio" name="answer" value="option1" required></td>
                            
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
												<div class="form-group">
                                                <label for="exampleInputEmail1">Option 2</label>
                                                <input type="text" class="form-control" placeholder="Enter option 2" name="opt2" required autocomplete="off">
                                                </div>
												</td>
                                                <td><input type="radio" name="answer" value="option2" required></td>
                
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>
												<div class="form-group">
                                                <label for="exampleInputEmail1">Option 3</label>
                                                <input type="text" class="form-control" placeholder="Enter option 3" name="opt3" required autocomplete="off">
                                                </div>
												</td>
                                                <td><input type="radio" name="answer" value="option3" required></td>
                                
                                            </tr>
											
											<tr>
                                                <th scope="row">3</th>
                                                <td>
												<div class="form-group">
                                                <label for="exampleInputEmail1">Option 4</label>
                                                <input type="text" class="form-control" placeholder="Enter option 4" name="opt4" required autocomplete="off">
                                                </div>
												</td>
                                                <td><input type="radio" name="answer" value="option4" required></td>
                                
                                            </tr>
                                        </tbody>
                                    </table>
							
									 <button type="submit" class="btn btn-primary">Submit</button>
												

												
												</form>
                                                       
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab6">
                                         <form action="pages/add_question2.php?type=fib" method="POST">
										 	<div class="form-group">
                                            <label for="exampleInputEmail1">Exam Name</label>
										    <select class="form-control" name="exam" required>
											<option value="" selected disabled>-Select exam</option>
										 	<?php
											include '../includes/conn.php';
											$sql = "SELECT * FROM tbl_examinations ORDER BY exam_name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
    
                                            while($row = $result->fetch_assoc()) {
                                            print '<option value="'.$row['exam_id'].'">'.$row['exam_name'].'</option>';
                                            }
                                           } else {
                          
                                            }
                                             $conn->close();
											 ?>
											
											</select></div>

												<div class="form-group">
                                                <label for="exampleInputEmail1">Question</label>
                                                <input type="text" class="form-control" placeholder="Enter question" name="question" required autocomplete="off">
                                                </div>
												<div class="form-group">
                                                <label for="exampleInputEmail1">Answer</label>
                                                <input type="text" class="form-control" placeholder="Enter answer" name="answer" required autocomplete="off">
                                                </div>
                                       
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                       </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>  
  
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
               
            </div>
        </main>
		<?php if ($ms == "1") {
?> <div class="alert alert-success" id="snackbar"><?php echo "$description"; ?></div> <?php	
}else{
	
}
?>

        <div class="cd-overlay"></div>

        <script src="../../online-quiz/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="../../online-quiz/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../../online-quiz/assets/plugins/pace-master/pace.min.js"></script>
        <script src="../../online-quiz/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../../online-quiz/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../online-quiz/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../../online-quiz/assets/plugins/switchery/switchery.min.js"></script>
        <script src="../../online-quiz/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="../../online-quiz/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="../../online-quiz/assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="../../online-quiz/assets/plugins/waves/waves.min.js"></script>
        <script src="../../online-quiz/assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="../../online-quiz/assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="../../online-quiz/assets/plugins/moment/moment.js"></script>
        <script src="../../online-quiz/assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="../../online-quiz/assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="../../online-quiz/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="../../online-quiz/assets/js/modern.min.js"></script>
        <script src="../../online-quiz/assets/js/pages/table-data.js"></script>
        
		<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
    </body>

</html>