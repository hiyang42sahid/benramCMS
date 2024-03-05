<?php include("config.php");


// header('Location: main.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Benram CMS | Log in</title>

  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="<?php echo WEB_URL; ?>images/logo.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="dist/css/bootstrap-login-form.min.css" />
  <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/toastr/toastr.min.css">
</head>

<body>
  <!-- Start your project here-->

  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }

    .h-custom {
      height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img style="margin-left:25%" src="<?php echo WEB_URL; ?>images/logo.png" class="img-fluid" alt="Benram CMS"
            width="50%">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form class="login" method="post" role="form" id="form" name="login" onSubmit="return valid();" method="post">
      
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3 "><b>Welcome to Benram CMS</b></p>

            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Login</p>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input onfocus="txt_onfocus(this);" onfocusout="txt_onfocusout(this);" type="text" id="username" name="username"
                class="form-control form-control-lg" placeholder="Enter Username" />
              <label class="form-label" for="form3Example3">Username</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="password" name="password" onfocus="txt_onfocus(this);" onfocusout="txt_onfocusout(this);"
                class="form-control form-control-lg" placeholder="Enter Password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="button" onclick="LogIn()"  class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>

            </div>

          </form>
        </div>
      </div>
    </div>

  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="dist/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>

<!-- jQuery -->
<script src="<?php echo WEB_URL; ?>plugins/jquery/jquery.min.js"></script>
  <!-- Toastr -->
<script src="<?php echo WEB_URL; ?>plugins/toastr/toastr.min.js"></script>
  <script>

    

	$(document).ready(function(){ 
		sessionStorage.removeItem("lastTimeStamp");  
		$("#Username").focus();
	}); 
	
	function LogIn(){

		var Username= $("#username").val();
		var pass= $("#password").val(); 

		 
		if(Username == ""){
			toastr.error('Please Enter Username','Invalid Input!!!')
			$("#username").focus();
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

  function txt_onfocus(txt) {
      txt.style.backgroundColor = "#e8f0fe";
    }

    function txt_onfocusout(txt) {
      txt.style.backgroundColor = "white";
    } 
  </script>
</body>

</html>