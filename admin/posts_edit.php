<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$slug = preg_replace("/[^A-Za-z0-9]/", '-', $title);
		$author = mysqli_real_escape_string($conn, $_POST['author']);
		$category = mysqli_real_escape_string($conn, $_POST['category']);
		$content = mysqli_real_escape_string($conn, $_POST['content']);
		$tags = mysqli_real_escape_string($conn, $_POST['tags']);
        $keywords = mysqli_real_escape_string($conn, $_POST['keywords']);

        $dir = "images/posts/";
        $target_file = $dir . basename($_FILES['image']['name']);
        //validation
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        array_push($errors, "Could not upload picture");
        }
        
        $sql = "SELECT * FROM categories WHERE cat_title = '$category' ORDER BY cat_id DESC LIMIT 1";
        $query = $conn->query($sql);
        $row = $query->fetch_assoc();

        $cat_id = $row['cat_id'];
        $date = date('Y-m-d');

        $sql = "UPDATE posts SET post_title = '$title', post_slug = '$slug', post_author = '$author', post_category = '$category', post_content = '$content', post_tags = '$tags', post_seo_keywords = '$keywords', post_category_id = '$cat_id', post_pic = '$target_file' WHERE post_id = '$id'";
        
		if($conn->query($sql)){
			$_SESSION['success'] = 'Post updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: posts.php');

?>