<title>Management | Southview Junior School</title>
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
  background-image: url('../../assets/img/theme/img-3.jpg');
  background-size: cover;
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
  opacity: 0.8;
}
</style>
<body class="g-sidenav-hidden bg-default">
   <!-- Navbar -->
   <?php require_once "../../inc/navbar.inc.php";?>
   <!-- Main content -->
   <div class="main-content">
      <!-- Header -->
      <div class="header pt-8 pb-1">
         <div class="container">
            <div class="header-body">
               <div class="row row-grid pt-4 pb-9 justify-content-center">
                  <div class="col-lg-8 text-center mt-7">
                     <h2 class="display-3 text-white" data-aos="fade-in" data-aos-duration="1200">Where to find us<span class="text-white pt-3">Nyamarambe, Gucha South Kisii County<br>P.O BOX 1200-40200 KISII</span></h2>
                     <p class="lead pt-3 text-white" data-aos="fade-in" data-aos-duration="1200">It is worthy noting that the school is situated in a quite serene and semi urban environment. Very suitable for learning.</p>
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
   </div>
   <!-- Footer -->
   <?php require_once "../../inc/foot.inc.php";?>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>