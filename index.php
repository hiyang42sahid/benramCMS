<?php include("config.php");
 

// header('Location: main.php');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Benram Construction ERP | Log in</title>

  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="<?php echo WEB_URL; ?>images/logo.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo WEB_URL; ?>dist/css/adminlte.min.css">
</head>
<body style="background-color:white;" class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="text-center" >
   <img style="margin-bottom:50px;"  src="<?php echo WEB_URL; ?>images/logo.jpg" alt="Benram Construction ERP" width="100px;" height="100px;"><br>
  </div>
  <div  class="card card-outline card-primary">
    <div class="card-header text-center">
	   
      <a href="index.php"  class="h3"><b>Benram Construction ERP</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form class="login" method="post" role="form" id="form" name="login" onSubmit="return valid();" method="post">
        <div class="input-group mb-3">
          <input type="text" name="Username" id="Username"  class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="Password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8"> 
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button  type="button"  onclick="LogIn()"  class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form> 
      <!-- /.social-auth-links -->
 
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo WEB_URL; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo WEB_URL; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Toastr -->
<script src="<?php echo WEB_URL; ?>plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo WEB_URL; ?>dist/js/adminlte.min.js"></script>

<script>

	$(document).ready(function(){ 
		sessionStorage.removeItem("lastTimeStamp");  
		$("#Username").focus();
	}); 
	
	function LogIn(){

		var Username= $("#Username").val();
		var pass= $("#password").val(); 

		 
		if(Username == ""){
			toastr.error('Please Enter Username','Invalid Input!!!')
			$("#Username").focus();
			return;
		}  

		if(pass == ""){
			toastr.error('Please Enter Password','Invalid Input!!!')
			$("#password").focus();
			return;
		}


		$.ajax({
			type:'POST',
			url:'login.php',
			data:$('form.login').serialize(),
			beforeSend: function () { 
			},
			success:function(msg){
				var res = msg.split(".");

				if(res[0]=='exist'){ 
					window.location.href = "pages/index.php"; 
				}else{
					toastr.error(msg,"Invalid Input!!!")
				}

			}
		});    
	} 

	document.addEventListener("keydown", keyDownTextField, false);
	function keyDownTextField(e) {
		var keyCode = e.keyCode;
		// alert(keyCode);


		if(keyCode==13){
			LogIn();
		}    
	} 
</script>
</body>
</html>
