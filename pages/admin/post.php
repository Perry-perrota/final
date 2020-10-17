<title>Staff Biodata | Southview Junior School</title>
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
<body style="background-color: #F5F5F5">
   <!-- Sidenav -->
   <?php require_once "../../inc/admin.inc/sidenav.inc.php";?>
   <!-- Main content -->
   <div class="main-content" id="panel">
   <!-- Topnav -->
   <?php require_once "../../inc/admin.inc/topnav.inc.php";?>
   <!-- Header -->
   <div class="header pb-3 d-flex align-items-center" style="min-height: 350px; background-image: url(https://www.learnupon.com/wp-content/uploads/assignments720.png); background-size: contain; background-position: center center;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-5"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
         <div class="row">
            <div class="col-lg-12 col-md-10">
               <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Post Assignments</h1>
               <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">Text goes here. Text goes here. Text goes here. Text goes here.</strong></p>
            </div>
         </div>
      </div>
   </div>
   <!-- Page content -->
   <div class="container-fluid mt--4">
   <div class="row justify-content-center">
   <div class="col-lg-6">
      <div data-aos="slide-up" data-aos-duration="1000">
         <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pt--6 pb-3">
               <!-- <div class="text-muted text-center mt-2 mb-3"><small>....</small></div> -->
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
                  <p>Upload Assignments</p>
               </div>
               <form action="post.php" onsubmit="myFunction()">
                  <div class="custom-file">
                     <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                     <label class="custom-file-label" for="customFileLang">Select file</label>
                  </div>
                  <div class="text-center">
                     <button type="submit" value="Submit" class="btn btn-success mt-5" style="border-radius: 25px;">Submit</button>
                  </div>
               </form>
                <script>
                  function myFunction() {
                    alert("File successfully submitted");}
                </script>
            </div>
         </div>
      </div>
   </div>
   <section class="col-lg-12">
      <?php require_once "../../inc/footer.php";?>
   </section>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>