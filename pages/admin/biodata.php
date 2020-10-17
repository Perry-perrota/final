<title>Admin Biodata | Southview Junior School</title>
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
   <div class="header pb-3 d-flex align-items-center" style="min-height: 350px; background-image: url(../../assets/img/theme/class-1.jpg); background-size: cover; background-position: center center;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-7"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
         <div class="row">
            <div class="col-lg-12 col-md-10">
               <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Admin Details • Biodata</h1>
               <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">This is your biodata page. You can take a look your details.</strong></p>
            </div>
         </div>
      </div>
   </div>
   <!-- Page content -->
   <div class="container-fluid mt--4">
   <div class="row justify-content-center">
   <div class="col-lg-7">
      <div data-aos="slide-up" data-aos-duration="1000">
         <div class="card card-profile">
            <!-- Card header -->
            <div class="card-header border-0">
               <div class="row justify-content-center m-2">
                  <div class="col-lg-3 order-lg-2">
                     <div class="card-profile-image card-profile-image-sm mt--5">
                        <img src="../../assets/img/staff.admin/20.webp" class="rounded-circle border-secondary">
                     </div>
                  </div>
               </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
               <table class="table align-items-center table-flush table-striped">
                  <thead class="thead-light">
                     <tr></tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="table-year-value">
                           <b>Name</b>
                        </td>
                        <td>
                           <span class="text-muted"></span>
                        </td>
                     </tr>
                     <tr>
                        <td class="table-year-value">
                           <b>Status</b>
                        </td>
                        <td>
                           <span class="text-muted"></span>
                        </td>
                     </tr>
                     <tr>
                        <td class="table-year-value">
                           <b>Sex</b>
                        </td>
                        <td>
                           <span class="text-muted"></span>
                        </td>
                     </tr>
                     <tr>
                        <td class="table-year-value">
                           <b>Department</b>
                        </td>
                        <td>
                           <span class="text-muted"></span>
                        </td>
                     </tr>
                     <tr>
                        <td class="table-year-value">
                           <b>Nationality</b>
                        </td>
                        <td>
                           <span class="text-muted"></span>
                        </td>
                     </tr>
                     <tr>
                        <td class="table-year-value">
                           <b>Tsc No.</b>
                        </td>
                        <td>
                           <span class="text-muted"></span>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer -->
   <section class="col-lg-12">
      <?php require_once "../../inc/footer.php";?>
   </section>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>