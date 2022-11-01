<div class="navbar">
    <div class="navbar-inner">
        <div class="sidebar-pusher">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="logo-box">
            <a href="./" class="logo-text"><img src="kashipara.png" alt="" height="76" width="130"></span></a>
        </div>
        <div class="search-button">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
        </div>
        <div class="topmenu-outer">
            <div class="top-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>	
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                            <span class="user-name"><?php echo $_SESSION['username']; ?><i class="fa fa-angle-down"></i></span>
                            <?php 
                            if ($_SESSION['avatar'] == NULL) {
                            print' <img class="img-circle avatar"  width="40" height="40" src="../assets/images/'.$mygender.'.png" alt="'.$myfname.'">';
                            }else{
                            echo '<img width="40" height="40" src="'.$_SERVER['DOCUMENT_ROOT'].'/emsa/admin/images/admin/'.$_SESSION['avatar'].'" title="'.$myfname.'" class="img-circle avatar"  alt="'.$myfname.'"/>';	
                            }
            
                            ?>
                        </a>
                        <ul class="dropdown-menu dropdown-list" role="menu">
                            <li role="presentation"><a href="profile.php"><i class="fa fa-user"></i>Profile</a></li>
                            <li role="presentation"><a href="logout.php"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php" class="log-out waves-effect waves-button waves-classic">
                            <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                        </a>
                    </li>
                    <li>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>