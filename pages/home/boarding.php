<title>Boarding Requirements | Southview Junior School</title>
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

.header::before {
  background-image: url('../../assets/img/theme/9.gif');
  background-size: contain;
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -2;
  opacity: 0.8;
}

.header::after {
  background-color: #2dce89;
  content: "";
  display: block;
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  z-index: -1;
  opacity: 0.7;
}

@media (max-width: 580px) {
  #h1 {
    font-size: 1.5rem !important;
  }
  #p1 {
    font-size: 1rem !important;
  }
  /*.card-body
   {
   padding-left: 1rem !important;
   }*/
  .px-8,
  .py-7 {
    padding: 3rem !important;
  }
}

@media (max-width: 450px) {
  #h1 {
    font-size: 1.5rem !important;
  }
  #p1 {
    font-size: 1rem !important;
  }
  .px-8,
  .py-7 {
    padding: 1.5rem !important;
  }
}
</style>
<body style="background-color: #F5F5F5">
   <!-- Navbar -->
   <?php require_once "../../inc/navbar.inc.php";?>
   <!-- Main content -->
   <div class="main-content">
   <!-- Header -->
   <div class="header py-6 py-lg-8 pt-lg-6">
      <div class="container">
         <div class="header-body text-center mb-7 mt-8">
            <div class="row justify-content-center">
               <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                  <div class="animated zoomIn">
                     <h1 id="h1" class="text-white" style="font-size: 32px;">Boarding Requirements</h1>
                     <p id="p1" class="text-lead text-white" style="font-size: 21px;">And other information</p>
                     <br>
                     <a href="../../assets/docs/boarding_requirements.pdf"><button class="btn btn-neutral text-success" style="border-radius: 2rem;"><i class="ni ni-cloud-download-95"></i><br />Download PDF</button></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
         <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon style="fill: transparent;" points="2560 0 2560 100 0 100"></polygon>
         </svg>
      </div>
   </div>
   <!-- Page content -->
   <div class="container mt--8 pb-7">
      <!-- Table -->
      <section id="fees">
         <div class="row justify-content-center">
            <div class="col-lg-10">
               <div data-aos="slide-up" data-aos-duration="1000">
                  <iframe src="../../assets/docs/boarding_requirements.pdf" width="100%" height="1000px" style="border-radius: 0.5rem;">
                  </iframe>
               </div>
            </div>
         </div>
      </section>
   </div>
   <!-- Footer -->
   <?php require_once "../../inc/foot.inc.php";?>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>