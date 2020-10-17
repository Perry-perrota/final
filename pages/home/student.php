<title>Student Login | Southview Junior School</title>
<?php require_once "../../inc/header.php";?>
<style>
::-moz-selection {
  background: #0ddb83;
  color: #FFF;
}

::selection {
  background-color: #0ddb83;
  color: #FFF;
}
</style>
<body class="bg-default">
   <!-- Navbar -->
   <?php require_once "../../inc/navbar.inc.php";?>
   <!-- Main content -->
   <div class="main-content">
      <!-- Header -->
      <div class="header bg-success py-7 py-lg-8 pt-lg-9">
         <div class="container">
            <div class="header-body text-center mb-7 mt-8">
               <div class="row justify-content-center">
                  <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                     <h1 class="text-white">Login as a Student/Parent</h1>
                     <p class="text-lead text-white">Sign in to gain access to the School's Digital Platform.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
         </div>
      </div>
      <!-- Page content -->
      <div class="animated fadeInUp">
         <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
               <div class="col-lg-5 col-md-7">
                  <div class="animated fadeInUp">
                     <div class="card bg-secondary border-0">
                        <div class="card-header bg-transparent pb-4">
                           <!-- <div class="text-muted text-center mt-2 mb-4"><small>Sign up with credentials</small></div> -->
                           <div class="text-center">
                              <span class="shortcut-media avatar avatar-lg rounded-circle bg-primary">
                              <i class="ni ni-lg ni-single-02"></i>
                              </span>
                           </div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                           <div class="text-center text-muted mb-4">
                              <small>Sign in with your credentials</small>
                           </div>
                           <form role="form" name="login" action="" method="post" onsubmit="return loginValidation()">
                              <?php if(!empty($loginResult)){?>
                              <div class="error-msg"><?php echo $loginResult;?></div>
                              <?php }?>
                              <div class="error-msg" id="error-msg"></div>
                              <!-- <div data-aos="fade-up" data-aos-duration="500"> -->
                              <div class="form-group mb-3">
                                 <div id="username-info" style="font-size: 15;"></div>
                                 <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Student No." type="text" id="username">
                                 </div>
                              </div>
                              <!-- <div data-aos="fade-up" data-aos-duration="500"> -->
                              <div class="form-group">
                                 <div id="signup-password-info" style="font-size: 15;"></div>
                                 <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text" span id="signup-password-info"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password" id="signup-password">
                                 </div>
                              </div>
                              <div class="text-center">
                                 <button type="submit" name="login-btn" id="login-btn" class="btn btn-success my-4">Sign in</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-6">
                           <a href="../students/dashboard.php" class="text-light"><small>Go to dashboard</small></a>
                        </div>
                        <div class="col-6 text-right">
                           <a href="register.php" class="text-light"><small>Create new account</small></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer -->
   <?php require_once "../../inc/foot.inc.php";?>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
   <script>
      function loginValidation() {
        var valid = true;
        $("#username").removeClass("error-field");
        $("#password").removeClass("error-field");
        
        var UserName = $("#username").val();
        var Password = $('#signup-password').val();
          
        $("#username-info").html("").hide();
        $("#email-info").html("").hide();
      
        if (UserName.trim() == "") {
          $("#username-info").html(" Required!").css("color", "#ee0000").show();
          $("#username").addClass("error-field");
          valid = false;
        }
        if (Password.trim() == "") {
          $("#signup-password-info").html(" Required!").css("color", "#ee0000").show();
          $("#signup-password").addClass("error-field");
          valid = false;
        }
        if (valid == false) {
          $('.error-field').first().focus();
          valid = false;
        }
        return valid; 
      }
   </script>
</body>