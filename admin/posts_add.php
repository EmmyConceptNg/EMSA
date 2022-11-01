<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
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

		$sql = "SELECT * FROM categories WHERE cat_title = '$category' ORDER BY cat_id DESC";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		$cat_id = $row['cat_id'];
		$date = date('Y-m-d');
		
		$sql = "INSERT INTO posts (post_title, post_slug, post_author, post_category, post_content, post_tags, post_pic, post_category_id, created_at, post_seo_keywords) VALUES ('$title', '$slug', '$author', '$category', '$content', '$tags', '$target_file', '$cat_id', '$date', '$keywords')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Post added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: posts.php');
?>