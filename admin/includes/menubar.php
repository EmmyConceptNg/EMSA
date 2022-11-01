<?php

  function num($num){
    global $conn;
    $sql = "SELECT * FROM " . $num;
    $query = $conn->query($sql);
    echo $number = $query->num_rows;
    return $number;
  }

  function post_num (){
    return num('posts');
  }

  function materials_num (){
    return num('materials');
  }

  /* function quiz_num (){
    return num('quiz');
  } */

  function executive_num(){
    global $conn;
    $sql = "SELECT * FROM users WHERE role = 'executive'";
    $query = $conn->query($sql);
    $num = $query->num_rows;
    echo $num;
  }

  function imsec_num (){
    global $conn;
    $sql = "SELECT * FROM users WHERE role = 'imsec'";
    $query = $conn->query($sql);
    $num = $query->num_rows;
    echo $num;
  }

  function cand_num (){
    return num('candidates');
  }

  function votes_num (){
    return num('votes');
  }

  function voters_num (){
    return num('users');
  }

  function pos_num (){
    return num('positions');
  }

  function gallery_num (){
    return num('gallery');
  }

?>


<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['avatar'])) ? './images/admin/'.$user['avatar'] : './images/admin/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['first_name'].' '.$user['last_name']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <!-- dashboard -->
      <li class=""><a href="home.php"><i class="header fa fa-dashboard"></i> <span>Dashboard</span></a></li>

      <!-- posts -->
      <?php if($_SESSION['user'] !== 'imsec'){ ?>
        <li class="header">POSTS</li>
        <li class=""><a href="posts.php"><span class="glyphicon glyphicon-lock"></span> <span>Posts</span> <span
              class="text-danger pull-right"><?php post_num(); ?></span> </a></li>
        <li class=""><a href="gallery.php"><span class="glyphicon glyphicon-lock"></span> <span>Gallery</span> <span
              class="text-danger pull-right"><?php gallery_num(); ?></span> </a></li>
        <!-- <li class=""><a href="comments.php"><span class="glyphicon glyphicon-lock"></span> <span>Comments</span><span
        class="text-danger pull-right"><?php post_num(); ?></span></a></li> -->
      <?php } ?>
      
      
      
      
            <!-- USERS -->
      <li class="header">USERS</li>
      <?php if($_SESSION['user'] !== 'imsec'){ ?>
        <li class=""><a href="executives.php"><span class="glyphicon glyphicon-user"></span> <span>Executives</span>
            <span class="text-danger pull-right"><?php executive_num(); ?></span> </a></li>
      <?php } ?>

      <?php if($_SESSION['user'] !== 'executive'){ ?>
        <li class=""><a href="imsec.php"><span class="glyphicon glyphicon-user"></span> <span>IMSEC</span> <span
              class="text-danger pull-right"><?php imsec_num(); ?></span> </a></li>
      <?php } ?>

      <!-- academics -->
      <?php if($_SESSION['user'] !== 'imsec'){ ?>
        <li class="header">ACADEMICS</li>
        <li class=""><a href="materials.php"><span class="glyphicon glyphicon-lock"></span> <span>Materials</span> <span class="text-danger pull-right"><?php materials_num(); ?></span> </a></li>
        <li class=""><a href="online-quiz/"><span class="glyphicon glyphicon-lock"></span> <span>Quiz</span> <span class="text-danger pull-right"></span> </a></li>
      <?php } ?>
      

            <!-- voting -->
      <?php if($_SESSION['user'] !== 'executive'){ ?>
      <li class="header">VOTING</li>
      <li class=""><a href="votes.php"><span class="glyphicon glyphicon-lock"></span> <span>Votes</span><span
            class="text-danger pull-right"><?php votes_num(); ?></span></a></li>
      <li class=""><a href="voters.php"><i class="fa fa-users"></i> <span>Voters</span><span
            class="text-danger pull-right"><?php voters_num(); ?></span></a></li>
      <li class=""><a href="positions.php"><i class="fa fa-tasks"></i> <span>Positions</span><span
            class="text-danger pull-right"><?php pos_num(); ?></span></a></li>
      <li class=""><a href="candidates.php"><i class="fa fa-black-tie"></i> <span>Candidates</span><span
            class="text-danger pull-right"><?php cand_num(); ?></span></a></li>
      <li class=""><a href="ballot.php"><i class="fa fa-file-text"></i> <span>Ballot Position</span></a></li>
      <li class=""><a href="#config" data-toggle="modal"><i class="fa fa-cog"></i> <span>Election Title</span></a></li>
      <?php } ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>