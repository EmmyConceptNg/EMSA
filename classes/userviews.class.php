<?php

class UserViews extends Dbh
{
    public $errors = [];
    public $profile_pic;
    public $user_id;
    public $firstname;
    public $lastname;
    public $username;
    public $user_type;
    public $email;
    public $password;
    public $post_num;
    public $query;
    public $post_title;
    public $post_author;
    public $post_category;
    public $post_category_id;
    public $post_content;
    public $post_status;
    public $post_id;
    public $row;
    public $rowz;
    public $error;
    public $user_status;




    /////////////////////////add Course Cat///////////////////


    public function addCourseCat($course_title)
    {
        if (empty($course_title)) {
            echo "<div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                <h4 style='color:red; text-align:center; font-weight:bold; display:block;'>Could Not Add Course Category. please, Insert a course Category</h4>
                </div>";
        } else {
            $query = $this->connect()->query("INSERT INTO course_cat VALUES ('', '$course_title')");
            if ($query) {
                
                echo "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                Course Category Added
                </div>";
            }
        }
    }

    /////////////////////// get from datatbase //////////////////////


    public function show($table)
    {
        $this->query = $this->connect()->query("SELECT * FROM $table");
        return $this->query;
    }

    /////////////////////// Add Post //////////////////////
    public function addPost($post_title, $post_author, $post_category, $post_content, $post_tags, $post_status)
    {
        $errors = [];
        $post_title = mysqli_real_escape_string($this->connect(), $post_title);
        $post_author = mysqli_real_escape_string($this->connect(), $post_author);
        $post_category = mysqli_real_escape_string($this->connect(), $post_category);

        $this->query = $this->connect()->query("SELECT cat_id FROM categories WHERE cat_title='$post_category' ");
        $row = mysqli_fetch_array($this->query);
        $post_category_id = $row['cat_id'];


        $post_content = mysqli_real_escape_string($this->connect(), $post_content);
        $post_tags = mysqli_real_escape_string($this->connect(), $post_tags);
        $post_status = mysqli_real_escape_string($this->connect(), $post_status);

        $dir = "images/";
        $target_file = $dir . basename($_FILES['post_pic']['name']);


        //validation
        if (!move_uploaded_file($_FILES['post_pic']['tmp_name'], $target_file)) {
            array_push($errors, "Could not upload picture");
        }
        if (empty($post_title)) {
            array_push($errors, "Enter Post Title");
        }
        if (empty($post_author)) {
            array_push($errors, "Enter Post Author");
        }
        if (empty($post_category)) {
            array_push($errors, "Select Post Category");
        }
        if (empty($post_content)) {
            array_push($errors, "Enter Post Content");
        }

        if (empty($post_tags)) {
            array_push($errors, "Enter Post Tags");
        }
        if (empty($post_status)) {
            array_push($errors, "Select Post Status");
        }

        if (count($errors) == 0) {
            $query = $this->connect()->query("INSERT INTO posts VALUES ('','$post_title','$post_author','$post_category','$post_content','$post_tags','$post_status','$target_file','$post_category_id', '')");
            echo "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                Post Added
                </div>";

            if ($query) {
                header('location add_post.php?post_Added');
            } else {
                die('could not add post');
                header('location: add_post.php?could_not_add_post');
            }
        }
        if (count($errors) > 0) { ?>

            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php foreach ($errors as $error) { ?>
                    <p><?php echo $error; ?></p>
                <?php } ?>
            </div>
        <?php }
    }


    /////////////////////// Show from database where //////////////////////
    public function showRow($table, $row)
    {
        $this->query = $this->connect()->query("SELECT * FROM $table ORDER BY $row ASC");
        $this->row = mysqli_fetch_assoc($this->query);
        return $this->row;
    }

    public function getWhere($table, $row, $value, $order)
    {
        $this->query = $this->connect()->query("SELECT * FROM $table WHERE $row = '$value' ORDER BY $order ASC");
        return $this->query;
    }



    /////////////////////// Approve Post //////////////////////
    public function approvePost($id)
    {
        $this->connect()->query("UPDATE posts SET post_status='publish' WHERE post_id = $id");
    }
    public function approveCourse($id)
    {
        $this->connect()->query("UPDATE courses SET course_status='approved' WHERE course_id = $id");
    }

    /////////////////////// Unapprove Post //////////////////////
    public function unapprovePost($id)
    {
        $this->connect()->query("UPDATE posts SET post_status='draft' WHERE post_id = $id");
    }

    public function unapproveCourse($id)
    {
        $this->connect()->query("UPDATE courses SET course_status='unapproved' WHERE course_id = $id");
    }

    /////////////////////// Edit Post //////////////////////
    public function editPost($post_title, $post_author, $post_category, $post_content, $post_tags, $post_status)
    {
        $errors = [];
        $post_id = $_GET['edit_post'];
        $post_title = mysqli_real_escape_string($this->connect(), $post_title);
        $post_author = mysqli_real_escape_string($this->connect(), $post_author);
        $post_category = mysqli_real_escape_string($this->connect(), $post_category);
        $post_content = mysqli_real_escape_string($this->connect(), $post_content);
        $post_tags = mysqli_real_escape_string($this->connect(), $post_tags);

        //validation

        if (empty($post_title)) {
            array_push($errors, "Enter Post Title");
        }
        if (empty($post_author)) {
            array_push($errors, "Enter Post Author");
        }
        if (empty($post_category)) {
            array_push($errors, "Select Post Category");
        }
        if (empty($post_category_id)) {
            array_push($errors, "Select Post Category ID");
        }
        if (empty($post_content)) {
            array_push($errors, "Enter Post Content");
        }
        if (empty($post_tags)) {
            array_push($errors, "Enter Post Tags");
        }

        if (count($errors) == 0) {
            $query = $this->connect()->query("UPDATE posts SET post_title ='$post_title', post_author =
            '$post_author', post_category = '$post_category', post_content = '$post_content', post_tags = '$post_tags' WHERE post_id = $post_id ");
            return $query;
            return header('location: view_post.php');
        }else{
            $this->errorFunc($errors);
        }
    }

    /////////////////////// Upload Image  (to be corrected) //////////////////////
    public function uploadProfileImage()
    {
        $dir = "images/";
        $target_file = $dir . basename($_FILES['profile_pic']['name']);

        move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_file);
    }


    /////////////////////// Register User //////////////////////
    public function registerUser($first_name, $last_name, $user_name, $email, $pass_1, $pass_2)
    {
        $errors = [];
        $this->firstname = mysqli_real_escape_string($this->connect(), $first_name);
        $this->lastname = mysqli_real_escape_string($this->connect(), $last_name);
        $this->username = mysqli_real_escape_string($this->connect(), $user_name);
        $this->email = mysqli_real_escape_string($this->connect(), $email);
        $this->pass_1 = mysqli_real_escape_string($this->connect(), $pass_1);
        $this->pass_2 = mysqli_real_escape_string($this->connect(), $pass_2);



        /* $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        if (strpos($url, 'admin') !== false) {
            $path = "images/user_profile/";
        } else {
            $path = "admin/images/user_profile/";
        }
        $dir = "images/user_profile/";
        $target_file = $dir . basename($_FILES['profile_pic']['name']);

        move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_file); */
         $target_file = 'images/user_profile/default_profile.png';
        //validation

        if (empty($this->firstname)) {
            array_push($this->errors, "Enter First Name");
        }
        if (empty($this->lastname)) {
            array_push($this->errors, "Enter Last Name");
        }
        if (empty($this->username)) {
            array_push($this->errors, "Choose Username");
        }
        if (empty($this->email) || (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))) {
            array_push($this->errors, "Enter a Valid Email Address");
        }
        if (empty($this->pass_1)) {
            array_push($this->errors, "Enter Password");
        }
        if ($this->pass_1 !== $this->pass_2) {
            array_push($this->errors, "Password Do Not Match");
        }

        if (count($this->errors) == 0) {
            $this->password = md5($this->pass_1);
            $this->connect()->query("INSERT INTO users VALUES ('', '$this->firstname', '$this->lastname', '$this->username', '$this->email', '$target_file', 'user', 'NO', '$this->password', '', '')");
            if($_SESSION['userLogged'] == false){
            $_SESSION['userLogged'] = $this->email;
            $_SESSION['username'] = $this->username;
            $_SESSION['profile_pic'] = $target_file;
            }
            if(isset($_SESSION['userLogged'])){
                
                

                $sql = $this->connect()->query("SELECT * FROM users WHERE email = '$this->email'");
                $row = mysqli_fetch_assoc($sql);

                $db_email = $row['email'];
                $db_username = $row['username'];
                $db_password = $row['password'];
                $profile_pic = $row['profile_pic'];
                $_SESSION['user_type'] = $row['user_type'];
                $user_id = $row['user_id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];




                header('location: index.php?welcome');
            }
            
        }else{
            $this->errorFunc($this->errors);
        }
        
    }


    /////////////////////// Edit User //////////////////////
    public function editUser($first_name, $last_name, $user_name, $profile_pics, $email, $pass_1, $pass_2)
    {
        $errors = [];
        $this->firstname = mysqli_real_escape_string($this->connect(), $first_name);
        $this->lastname = mysqli_real_escape_string($this->connect(), $last_name);
        $this->username = mysqli_real_escape_string($this->connect(), $user_name);
        $this->email = mysqli_real_escape_string($this->connect(), $email);
        $this->pass_1 = mysqli_real_escape_string($this->connect(), $pass_1);
        $this->pass_2 = mysqli_real_escape_string($this->connect(), $pass_2);

        $dir = "images/";
        $target_file = $dir . basename($_FILES['profile_pic']['name']);

        move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_file);

        //validation

        if (empty($this->firstname)) {
            array_push($this->errors, "Enter First Name");
        }
        if (empty($this->lastname)) {
            array_push($this->errors, "Enter Last Name");
        }
        if (empty($this->username)) {
            array_push($this->errors, "Choose Username");
        }
        if (empty($this->email) || (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))) {
            array_push($this->errors, "Enter a Valid Email Address");
        }
        if (empty($this->pass_1)) {
            array_push($this->errors, "Enter Password");
        }
        if ($this->pass_1 !== $this->pass_2) {
            array_push($this->errors, "Password Do Not Match");
        }

        if (count($this->errors) == 0) {
            $this->password = md5($this->pass_1);
            $sql = $this->connect()->query("SELECT * FROM users WHERE email = '$this->email'");
            $row = mysqli_fetch_assoc($sql);

            $db_email = $row['email'];
            $db_username = $row['username'];
            $db_password = $row['password'];
            $profile_pic = $row['profile_pic'];
            $user_type = $row['user_type'];
            $user_id = $row['user_id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            
            $this->connect()->query("UPDATE users SET firstname='$this->firstname', lastname='$this->lastname', username='$this->username', email='$this->email', profile_pic='$target_file', password='$this->password' WHERE user_id = $user_id ");

            
            if (isset($_SESSION['userLogged'])) {
                header('location: profile.php?user_id=' .$user_id);
            }
        }else{
            $this->errorFunc($this->errors);
        }
    }

    /////////////////////// Get Number //////////////////////
    public function Num($table)
    {
        $query = $this->connect()->query("SELECT * FROM $table");
        return mysqli_num_rows($query);
    }

    /////////////////////// Get Number Where //////////////////////
    public function numWhere($table, $row, $value)
    {
        $query = $this->connect()->query("SELECT * FROM $table WHERE $row = '$value'");
        return mysqli_num_rows($query);
    }



    /////////////////////// Show  All Users //////////////////////
    public function  showUsers()
    {
        $this->query = $this->connect()->query("SELECT * FROM users");
        return $this->query;
    }

    /////////////////////// Show  Single User //////////////////////
    public function singleUser($id)
    {
        $this->query = $this->connect()->query("SELECT * FROM users WHERE user_id = '$id'");
        
    }

    /////////////////////// Make Admin //////////////////////
    public function makeAdmin($id)
    {
        $this->query = $this->connect()->query("UPDATE users SET user_type = 'admin' WHERE user_id = $id");
    }

    /////////////////////// Remove Admin //////////////////////
    public function makeUser($id)
    {
        $this->query = $this->connect()->query("UPDATE users SET user_type = 'teacher' WHERE user_id = $id");
    }

    /////////////////////// Delete //////////////////////
    public function delete($table, $table_row, $id)
    {
        $this->connect()->query("DELETE FROM $table WHERE $table_row = $id");
    }

    public function getUser($table, $table_row, $id)
    {
        $this->query = $this->connect()->query("SELECT * FROM $table WHERE $table_row = $id");
        $this->row = mysqli_fetch_assoc($this->query);
        return $this->query;
        return $this->row;
    }



    /////////////////////// Login User //////////////////////

    public function login($email, $pwd)
    {
        $this->email = $email;
        $this->password = $pwd;
        if (empty($this->email) || (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))) {
            array_push($this->errors, "Check Email");
        }
        if (empty($this->password)) {
            array_push($this->errors, "Enter Password");
        }

        if (count($this->errors) == 0) {
            $sql = $this->connect()->query("SELECT * FROM users WHERE email = '$this->email'");
            $row = mysqli_fetch_assoc($sql);

            $db_email = $row['email'];
            $db_username = $row['username'];
            $db_password = $row['password'];
            $profile_pic = $row['profile_pic'];
            $user_type = $row['user_type'];
            $user_id = $row['user_id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];

            $hashpassword = md5($this->password);

            if ($this->email === $db_email && $db_password === $hashpassword) {
                $_SESSION['userLogged'] = $this->email;
                $_SESSION['profile_pic'] = $profile_pic;
                $_SESSION['username'] = $db_username;
                $_SESSION['user_type'] = $user_type;
                $_SESSION['user_id'] = $user_id;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
                if ($user_type == 'student') {
                    header("location: " . $_SERVER['document_root'] . "/school_web/");
                } else {
                    header("location: index.php");
                }
            } else {
                $_SESSION['log_email'] = "$email";
                header("location: login.php?wrong_entries");
            }
        } else {
            $this->errorFunc($this->errors);
        }
    }

    public function logout($user_id)
    {
        session_unset();
        header("location: index.php");
    }

    /////////////////////// Error //////////////////////
    public function errorFunc($errors)
    {
        if (count($this->errors) > 0) { ?>

            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php foreach ($this->errors as $this->error) { ?>
                    <p><?php echo $this->error; ?>
                        <hr />
                    </p>
                <?php } ?>
            </div>
<?php }
    }



    public function addCourse($course_title, $course_cat, $course_teacher, $course_fee, $course_date, $course_desc)
    {

        $course_title = mysqli_real_escape_string($this->connect(), $course_title);
        $course_cat = mysqli_real_escape_string($this->connect(), $course_cat);
        $course_teacher = mysqli_real_escape_string($this->connect(), $course_teacher);
        $course_fee = mysqli_real_escape_string($this->connect(), $course_fee);
        $course_description = mysqli_real_escape_string($this->connect(), $course_desc);
        $course_date = $course_date;
        $course_desc = $course_desc;

        $this->query = $this->connect()->query("SELECT course_id FROM course_cat WHERE course_title='$course_cat' ");
        $row = mysqli_fetch_array($this->query);
        $course_category_id = $row['course_id'];
        if (empty($course_title)) {
            array_push($this->errors, 'course title field cannot be empty');
        }
        if (empty($course_cat)) {
            array_push($this->errors, 'Select Course Category');
        }
        if (empty($course_teacher)) {
            array_push($this->errors, 'course teacher field cannot be empty');
        }
        if (empty($course_fee)) {
            array_push($this->errors, 'course fee field cannot be empty');
        }
        if (empty($course_date)) {
            array_push($this->errors, 'course date field cannot be empty');
        }
        if (empty($course_desc)) {
            array_push($this->errors, 'course description field cannot be empty');
        }

        $target_dir="images/";
        $target_file = $target_dir. basename($_FILES['course_img']['name']);
        move_uploaded_file($_FILES['course_img']['tmp_name'], $target_file);

        if (count($this->errors) == 0) {
            $this->connect()->query("INSERT INTO courses VALUES ('', '$course_title', '$course_cat', '$course_teacher', '$course_fee', '$target_file', '$course_description', 'unapproved', '$course_category_id', '$course_desc')");
            echo "<div class='alert alert-success'>
    <button type='button' class='close' data-dismiss='alert'>×</button>
    <h4 style='color:blue; text-align:center; font-weight:bold; display:block;'>Course Added</h4>
    </div>";
        } else {
            $this->errorFunc($this->errors);
        }
    }



    public function editCourse($course_title, $course_cat, $course_teacher, $course_fee, $course_date, $course_desc)
    {

        $course_id = $_GET['edit_post'];
        $course_title = mysqli_real_escape_string($this->connect(), $course_title);
        $course_cat = mysqli_real_escape_string($this->connect(), $course_cat);
        $course_teacher = mysqli_real_escape_string($this->connect(), $course_teacher);
        $course_fee = mysqli_real_escape_string($this->connect(), $course_fee);
        $course_description = mysqli_real_escape_string($this->connect(), $course_desc);
        $course_date = $course_date;
        $course_desc = $course_desc;

        $this->query = $this->connect()->query("SELECT course_id FROM course_cat WHERE course_title='$course_cat' ");
        $row = mysqli_fetch_array($this->query);
        $course_category_id = $row['course_id'];
        if (empty($course_title)) {
            array_push($this->errors, 'course title field cannot be empty');
        }
        if (empty($course_cat)) {
            array_push($this->errors, 'Select Course Category');
        }
        if (empty($course_teacher)) {
            array_push($this->errors, 'course teacher field cannot be empty');
        }
        if (empty($course_fee)) {
            array_push($this->errors, 'course fee field cannot be empty');
        }
        if (empty($course_date)) {
            array_push($this->errors, 'course date field cannot be empty');
        }
        if (empty($course_desc)) {
            array_push($this->errors, 'course description field cannot be empty');
        }

        $target_dir="images/";
        $target_file = $target_dir. basename($_FILES['course_img']['name']);
        move_uploaded_file($_FILES['course_img']['tmp_name'], $target_file);

        if (count($this->errors) == 0) {
            $this->connect()->query("UPDATE courses SET course_title ='$course_title', course_cat_id = '$course_category_id', course_cat = '$course_cat', course_teacher = '$course_teacher', course_date = '$course_date', course_fee = '$course_fee', course_description = '$course_desc' WHERE course_id = '$course_id' ");
            echo "<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert'>×</button>
            <h4 style='color:orange; text-align:center; font-weight:bold; display:block;'>Changes Saved</h4>
            </div>";
        } else {
            $this->errorFunc($this->errors);
        }
    }


    public function allCourses(){
        $sql = "SELECT * FROM courses WHERE course_status = 'approved'";
        $this->query=$this->connect()->query($sql);
        return $this->query;
    }
}
