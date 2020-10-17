<title>Email | Southview Junior School</title>
<?php require_once "../../inc/head.inc.php";?>
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
<body class="bg-gradient-success">
   <!-- Sidenav -->
   <?php require_once "../../inc/admin.inc/sidenav.inc.php";?>
   <!-- Main content -->
   <div class="main-content" id="panel">
      <!-- Topnav -->
      <?php require_once "../../inc/admin.inc/topnav.inc.php";?>
      <!-- Header -->
      <div class="header pb-3 d-flex align-items-center" style="min-height: 350px; background-image: url(https://hsm.utimaco.com/wp-content/uploads/2017/09/HSM-Utimaco-contact.jpg); background-size: cover; background-position: center center;">
         <!-- Mask -->
         <span class="mask bg-gradient-default opacity-5"></span>
         <!-- Header container -->
         <div class="container-fluid d-flex align-items-center">
            <div class="row">
               <div class="col-lg-8 col-md-10">
                  <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Get in Touch</h1>
                  <h2 class="title display-3 text-white"></h2>
                  <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">You need more information? Check what other persons are saying about our school. They are very happy.</p>
                  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                     <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                           <div class="modal-body p-0">
                              <div class="card bg-secondary border-0 mb-0">
                                 <div class="card-header bg-transparent pt--6 pb-3">
                                    <div class="btn-wrapper text-center">
                                       <div class="text-center">
                                          <span class="shortcut-media avatar avatar-lg rounded-circle bg-success">
                                          <i class="ni ni-lg ni-cloud-upload-96"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                       <p>Upload Document</p>
                                    </div>
                                    <form>
                                       <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                                          <label class="custom-file-label" for="customFileLang">Select file</label>
                                       </div>
                                       <div class="text-center">
                                          <button type="submit" class="btn btn-success mt-5" style="border-radius: 25px;">Submit</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--6">
         <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5 mt-7 d-flex justify-content-center flex-column" data-aos="slide-up" data-aos-duration="1500">
               <div class="row justify-content-center ml-3 mb-2">
                  <div class="col">
                     <div class="info info-horizontal">
                        <div class="icon icon-shape icon-shape-default shadow rounded-circle card-lift--hover text-white">
                           <i class="ni ni-square-pin"></i>
                        </div>
                        <div class="description mt-2">
                           <h4 class="info-title text-white">Find us at the office</h4>
                           <p class="description text-white"> Nyamarambe, <br>
                              Gucha South,<br>
                              Kisii County
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="info info-horizontal">
                        <div class="icon icon-shape icon-shape-default shadow rounded-circle card-lift--hover text-white">
                           <i class="ni ni-mobile-button"></i>
                        </div>
                        <div class="description mt-2">
                           <h4 class="info-title text-white">Give us a ring</h4>
                           <p class="description text-white"> School Office;<br>
                              +254722459275<br>
                              nathankiriago@gmail.com<br>
                              Mon - Fri, 8:00-22:00
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-7 ml-auto mr-auto">
               <div class="card card-contact card-raised" data-aos="slide-up" data-aos-duration="1500">
                  <form role="form" id="contact-form" method="post">
                     <div class="card-header text-center">
                        <h4 class="card-title">Contact Us</h4>
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>First name</label>
                                 <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="First Name..." aria-label="First Name..." type="text">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 pl-2">
                              <div class="form-group">
                                 <label>Last name</label>
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="ni ni-collection"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Last Name..." aria-label="Last Name...">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Email address</label>
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Email Here...">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Your message</label>
                           <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="custom-control custom-checkbox mt-2">
                                 <input class="custom-control-input" id="customCheck" type="checkbox">
                                 <label class="custom-control-label" for="customCheck">
                                 <span>I'm not a robot</span>
                                 </label>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <button type="submit" class="btn btn-success pull-right" style="border-radius: 25px;">Send Message</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!-- Footer -->
         <footer class="footer pt-6 bg-transparent">
            <div class="row align-items-center justify-content-lg-between">
               <div class="col-lg-5 mb-2">
                  <div class="copyright text-center text-xl-left text-muted">
                     &copy; 2020 <a class="font-weight-bold ml-1 text-white" target="_blank">Southview Junior School</a>
                  </div>
               </div>
               <div class="col-lg-5">
                  <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                     <span class="love-from">
                        <t class="text-white">Made with</t>
                        <i class="icon ion-heart" style="color:#CD252D;"></i> 
                        <t class="text-white">by Westos</t>
                     </span>
                  </ul>
               </div>
            </div>
         </footer>
      </div>
   </div>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>