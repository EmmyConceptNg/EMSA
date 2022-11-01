<?php
  	session_start();
  	if(isset($_SESSION['user']) && $_SESSION['user'] !== 'student'){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>EMSA ADMIN</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to start your session</p>

    	<form id='login-form' action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>

<script>
	$(document).ready(function(){
		$('#login-form').submit(function(e){
			e.preventDefault();
			$('#login-form button').attr('disable', true);
			$('#login-form button').html('Please wait...');

			$.ajax({
				url:'./login.php',
				method: 'POST',
				data:$(this).serialize(),
				error:err=>{
					console.log(err)
					alert('An Error Occurred');
					$('#login-form button').removeAttr('disable')
					$('#login-form button').html('Sign in')
				},
				success:function(response){
					if(response == 1){
						location.replace('home.php')
						
						$('#login-frm button').removeAttr('disable')
						$('#login-frm button').html('Sign in')
					}
			});
		})
	});
</script>

