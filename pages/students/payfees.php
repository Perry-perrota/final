<title>Pay School Fees | Southview Junior School</title>
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
   <?php require_once "../../inc/students.inc/sidenav.inc.php";?>
   <!-- Main content -->
   <div class="main-content" id="panel">
   <!-- Topnav -->
   <?php require_once "../../inc/students.inc/topnav.inc.php";?>
   <!-- Header -->
   <div class="header pb-3 d-flex align-items-center" style="min-height: 350px; background-image: url(../../assets/img/theme/numbers.jpg); background-size: cover; background-position: center bottom;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-7"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
         <div class="row">
            <div class="col-lg-12 col-md-10">
               <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Finance • Pay School Fees</h1>
               <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">Pay your school fees using Lipa Na M-Pesa <strong class="text-success font-weight-bold">Till No. 12345</strong></p>
            </div>
         </div>
      </div>
   </div>
   <!-- Page content -->
   <div class="container-fluid mt--6">
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <div data-aos="slide-up" data-aos-duration="1000">
               <div class="card-wrapper">
                  <!-- Input groups -->
                  <div class="card" style="border-radius: 1rem;">
                     <!-- Card header -->
                     <div class="card-header" style="border-radius: 1rem;">
                        <h3 class="mb-0">Pay School Fees</h3>
                     </div>
                     <!-- Card body -->
                     <div class="card-body">
                        <form>
                           <!-- Input groups with icon -->
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <div class="input-group input-group-merge">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                                       </div>
                                       <input class="form-control" placeholder="Enter Till No." type="text">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Input groups with icon -->
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <div class="input-group input-group-merge">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                                       </div>
                                       <input class="form-control" placeholder="Enter Amount" type="text">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4" name="fees-submit" id="fees-submit"><i class="ni ni-check-bold pr-3 text-danger"></i>Submit</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <?php require_once "../../inc/footer.php";?>
   </div>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>