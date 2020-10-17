<title>Registration | Southview Junior School</title>
<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
}
?>
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
                  <h1 class="text-white">Create an account</h1>
                  <p class="text-lead text-white">Register to gain access to the Schools Digital Platform.</p>
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
   <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-8">
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
                        <small>Create your school account</small>
                     </div>
                     <form role="form" name="sign-up" action="" method="post" onsubmit="return signupValidation()">
                        <?php 
                           if(!empty($registrationResponse["status"]))
                           {
                           ?>
                        <?php 
                           if($registrationResponse["status"] == "error")
                           {
                           ?>
                        <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                        <?php 
                           } 
                           else if($registrationResponse["status"] == "success")
                           {
                                   ?>
                        <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                        <?php 
                           }
                                   ?>
                        <?php 
                           }?>
                        <div class="error-msg" id="error-msg"></div>
                        <div data-aos="fade-up" data-aos-duration="500">
                           <div class="form-group">
                              <div id="username-info" style="font-size: 15;"></div>
                              <div class="input-group input-group-merge input-group-alternative mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Name" type="text" name="username" id="username">
                              </div>
                           </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="500">
                           <div class="form-group">
                              <div id="email-info" style="font-size: 15;"></div>
                              <div class="input-group input-group-merge input-group-alternative mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Email" type="email" name="email" id="email">
                              </div>
                           </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="500">
                           <div class="form-group">
                              <div id="signup-password-info" style="font-size: 15;"></div>
                              <div class="input-group input-group-merge input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Password" type="password" name="signup-password" id="signup-password">
                              </div>
                           </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="500">
                           <div class="form-group">
                              <div id="confirm-password-info" style="font-size: 15;"></div>
                              <div class="input-group input-group-merge input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span id="confirm-password-info" class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Confirm password" type="password" name="confirm-password" id="confirm-password">
                              </div>
                           </div>
                        </div>
                        <!-- <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div> -->
                        <div data-aos="zoom-in" data-aos-duration="500">
                           <div class="text-center">
                              <button type="submit" class="btn btn-success mt-4" name="signup-btn" id="signup-btn">Create account</button>
                           </div>
                     </form>
                     </div>
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-6">
                     <span class="text-light"><small>Already have an account?</small></span>
                  </div>
                  <div class="col-6 text-right">
                     <a href="#" onclick="history.go(-1)" class="text-light"><small>Log In</small></a>
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
      function signupValidation() {
        var valid = true;
        
        $("#username").removeClass("error-field");
        $("#email").removeClass("error-field");
        $("#password").removeClass("error-field");
        $("#confirm-password").removeClass("error-field");
        
        var UserName = $("#username").val();
        var email = $("#email").val();
        var Password = $('#signup-password').val();
        var ConfirmPassword = $('#confirm-password').val();
        var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
          
        $("#username-info").html("").hide();
        $("#email-info").html("").hide();
      
        if (UserName.trim() == "") {
          $("#username-info").html(" Required!").css("color", "#ee0000").show();
          $("#username").addClass("error-field");
          valid = false;
        }
        if (email == "") {
          $("#email-info").html(" Required!").css("color", "#ee0000").show();
          $("#email").addClass("error-field");
          valid = false;
        } else if (email.trim() == "") {
          $("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
          $("#email").addClass("error-field");
          valid = false;
        } else if (!emailRegex.test(email)) {
          $("#email-info").html("Invalid email address.").css("color", "#ee0000")
              .show();
          $("#email").addClass("error-field");
          valid = false;
        }
        if (Password.trim() == "") {
          $("#signup-password-info").html(" Required!").css("color", "#ee0000").show();
          $("#signup-password").addClass("error-field");
          valid = false;
        }
        if (ConfirmPassword.trim() == "") {
          $("#confirm-password-info").html(" Required!").css("color", "#ee0000").show();
          $("#confirm-password").addClass("error-field");
          valid = false;
        }
        if(Password != ConfirmPassword){
              $("#error-msg").html("Both passwords must be same.").show();
              valid=false;
          }
        if (valid == false) {
          $('.error-field').first().focus();
          valid = false;
        }
        return valid; 
      }
   </script>
</body>