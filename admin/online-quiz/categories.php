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
                    <h3>Manage Categories</h3>



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
                                                <li role="presentation" class="active"><a href="#tab5" role="tab" data-toggle="tab">Categories</a></li>
                                                <li role="presentation"><a href="#tab6" role="tab" data-toggle="tab">Add Categories</a></li>
                                            </ul>
                                    
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active fade in" id="tab5">
                                           <div class="table-responsive">
										   <?php
										   include '../includes/conn.php';
										   $sql = "SELECT * FROM tbl_categories";
                                           $result = $conn->query($sql);

                                           if ($result->num_rows > 0) {
										print '
										<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
												<th>Category ID</th>
												<th>Status</th>
                                                <th>Department</th>
                                                <th>Date Registered</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
												<th>Category ID</th>
												<th>Status</th>
                                                <th>Department</th>
                                                <th>Date Registered</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>';
     
                                           while($row = $result->fetch_assoc()) {
											   $status = $row['status'];
											   if ($status == "Active") {
											   $st = '<p class="text-success">ACTIVE</p>';
											   $stl = '<a href="pages/make_ct_in.php?id='.$row['category_id'].'">Make Inactive</a>';
											   }else{
											   $st = '<p class="text-danger">INACTIVE</p>'; 
                                               $stl = '<a href="pages/make_ct_ac.php?id='.$row['category_id'].'">Make Active</a>';											   
											   }
                                          print '
										       <tr>
                                                <td>'.$row['name'].'</td>
												<td>'.$row['category_id'].'</td>
                                                <td>'.$st.'</td>
                                                <td>'.$row['department'].'</td>
												<td>'.$row['date_registered'].'</td>
                                                <td><div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Select Action
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>'.$stl.'</li>
                                                    <li><a'; ?> onclick = "return confirm('Drop <?php echo $row['name']; ?> ?')" <?php print ' href="pages/drop_ct.php?id='.$row['category_id'].'">Drop Category</a></li>
                                                </ul>
                                            </div></td>
          
                                            </tr>';
                                           }
										   
										   print '
									   </tbody>
                                       </table>  ';
                                            } else {
												print '
												<div class="alert alert-info" role="alert">
                                        Nothing was found in database.
                                    </div>';
    
                                           }
                                           $conn->close();
										   
										   ?>


                 

                                    </div>
                                                       
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab6">
                                         <form action="pages/add_category.php" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <input type="text" class="form-control" placeholder="Enter category name" name="category" required autocomplete="off">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Select Department</label>
                                            <select class="form-control" name="department" required>
											<option value="" selected disabled>-Select department-</option>
											<?php
											include '../includes/conn.php';
											$sql = "SELECT * FROM tbl_departments WHERE status = 'Active' ORDER BY name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
    
                                            while($row = $result->fetch_assoc()) {
                                            print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                            }
                                           } else {
                          
                                            }
                                             $conn->close();
											 ?>
											
											</select>
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
		<script src="../../online-quiz/assets/plugins/select2/js/select2.min.js"></script>
        
		<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
    </body>

</html>